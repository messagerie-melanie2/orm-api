<?php
/**
 * Ce fichier est développé pour la gestion des API de la librairie Mélanie2
 * Ces API permettent d'accéder à la librairie en REST
 *
 * ORM API Copyright © 2022  Groupe MCD/MTE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Controller;

/**
 * Classe de traitement pour les partages sur un carnet d'adresses
 * 
 * @package Controller
 */
class AddressbookShare extends Controller {
    /**
     * Récupération d'un partage sur un carnet d'adresses
     */
    public static function get()
    {
        if (\Lib\Request::checkInputValues(['id', 'name'], \Lib\Request::INPUT_GET)) {
            $user = \Lib\Utils::getCurrentUser();

            $addressbook = \Lib\Objects::gi()->addressbook([$user]);
            $addressbook->id = \Lib\Request::getInputValue('id', \Lib\Request::INPUT_GET);

            if ($addressbook->load()) {
                $share = \Lib\Objects::gi()->share([$addressbook]);
                $share->name = \Lib\Request::getInputValue('name', \Lib\Request::INPUT_GET);

                if ($share->load()) {
                    \Lib\Response::data([
                        'acl' => $share->acl,
                    ]);
                }
                else {
                    \Lib\Response::error("Share not found");
                }
            }
            else {
                \Lib\Response::error("Addressbook not found");
            }
        }
    }

    /**
     * Enregistrer/modifier un partage sur un carnet d'adresses
     */
    public static function post()
    {
        $json = \Lib\Request::readJson();

        if (isset($json) && $json !== false) {

            if (\Lib\Request::checkInputValues(['id', 'name', 'acl'], null, $json)) {
                $user = \Lib\Utils::getCurrentUser('owner', null, $json);

                $addressbook = \Lib\Objects::gi()->addressbook([$user]);
                $addressbook->id = $json['id'];

                if ($addressbook->load()) {
                    $share = \Lib\Objects::gi()->share([$addressbook]);
                    $share->name = $json['name'];
                    $share->acl = $json['acl'];
                    $share->type = isset($json['is_group']) && $json['is_group'] ? \LibMelanie\Api\Defaut\Share::TYPE_GROUP : \LibMelanie\Api\Defaut\Share::TYPE_USER;;

                    $ret = $share->save();

                    if (!is_null($ret)) {
                        \Lib\Response::success(true);
                    }
                    else {
                        \Lib\Response::error("Error when saving the share");
                    }
                }
                else {
                    \Lib\Response::error("Addressbook not found");
                }
            }
        }
        else {
            \Lib\Response::error("Invalid json parameter");
        }
    }

    /**
     * Suppression d'un partage sur un carnet d'adresses
     */
    public static function delete()
    {
        if (\Lib\Request::checkInputValues(['id', 'name'], \Lib\Request::INPUT_GET)) {
            $user = \Lib\Utils::getCurrentUser();

            $addressbook = \Lib\Objects::gi()->addressbook([$user]);
            $addressbook->id = \Lib\Request::getInputValue('id', \Lib\Request::INPUT_GET);

            if ($addressbook->load()) {
                $share = \Lib\Objects::gi()->share([$addressbook]);
                $share->name = \Lib\Request::getInputValue('name', \Lib\Request::INPUT_GET);

                if ($share->load()) {
                    if ($share->delete()) {
                        \Lib\Response::success(true);
                    }
                    else {
                        \Lib\Response::error("Error when deleting share");
                    }
                }
                else {
                    \Lib\Response::error("Share not found");
                }
            }
            else {
                \Lib\Response::error("Addressbook not found");
            }
        }
    }
}