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
 * Classe de traitement pour les folder
 * 
 * @package Controller
 */
class Folder extends Controller
{
    /**
     * Récupération d'un folder
     */
    public static function get()
    {
        \Lib\Log::LogTrace("get(): " . var_export($_GET, 1));

        if (\Lib\Request::checkInputValues(['dn'], \Lib\Request::INPUT_GET)) {
            $folder = \Lib\Objects::gi()->folder();
            $folder->dn = \Lib\Request::getInputValue('dn', \Lib\Request::INPUT_GET);

            // Gestion des attributs
            $attributes = \Lib\Request::getInputValue('attributes', \Lib\Request::INPUT_GET);
            if (isset($attributes)) {
                $attributes = explode(',', $attributes);
            } else {
                $attributes = \Lib\Mapping::get_mapping('folder');
            }

            if ($folder->load($attributes)) {
                \Lib\Response::data(\Lib\Mapping::get('folder', $folder));
            } else {
                \Lib\Response::error("Folder not found");
            }
        }
    }

    /**
     * Enregistrer/modifier un folder
     */
    public static function post()
    {
        $json = \Lib\Request::readJson();

        \Lib\Log::LogTrace("post(): " . var_export($json, 1));

        if (isset($json) && $json !== false) {

            $folder = \Lib\Objects::gi()->folder([\LibMelanie\Config\Ldap::$MASTER_LDAP, 'amedee.folder']);

            foreach ($json as $key => $value) {
                if (in_array($key, \Lib\Mapping::get_mapping('folder'))) {
                    $folder->$key = $value;
                }
            }

            if (isset($json['amedee_smtp'])) {
                if (!is_array($json['amedee_smtp'])) {
                    $folder->smtp = explode("\n", $json['amedee_smtp']);
                } else {
                    $folder->smtp = $json['amedee_smtp'];
                }                
            }

            $folder->dn = 'ou=' . strtolower($json['ou']) . ',ou=AmedeeV2,ou=Test-PNE Messagerie,ou=TF,ou=melanie,ou=organisation,dc=equipement,dc=gouv,dc=fr';

            $ret = $folder->save();

            if (!is_null($ret)) {
                \Lib\Response::success(true);
            } else {
                \Lib\Response::error("Error when saving the user");
            }
        } else {
            \Lib\Response::error("Invalid json parameter");
        }
    }

    /**
     * Récupération des enfants d'un folder
     */
    public static function children()
    {
        \Lib\Log::LogTrace("get(): " . var_export($_GET, 1));

        if (\Lib\Request::checkInputValues(['dn'], \Lib\Request::INPUT_GET)) {
            $folder = \Lib\Objects::gi()->folder();
            $folder->dn = \Lib\Request::getInputValue('dn', \Lib\Request::INPUT_GET);

            $type = \Lib\Request::getInputValue('type', \Lib\Request::INPUT_GET);

            $attributes = \Lib\Request::getInputValue('attributes', \Lib\Request::INPUT_GET);
            if (isset($attributes)) {
                $attributes = explode(',', $attributes);
            } else {
                $attributes = \Lib\Mapping::get_mapping('FolderChildren');
            }

            $data = $folder->getFolderChildren($type, $attributes);
            if (isset($data)) {
                \Lib\Response::data(\Lib\Mapping::get('FolderChildren', $data));
            } else {
                \Lib\Response::error("Children not found");
            }
        }
    }

    /**
     * Récupération d'une recherche par mot clé
     */
    public static function search()
    {
        \Lib\Log::LogTrace("get(): " . var_export($_GET, 1));

        if (\Lib\Request::checkInputValues(['query'], \Lib\Request::INPUT_GET)) {
            $folder = \Lib\Objects::gi()->folder();

            $attributes = \Lib\Request::getInputValue('attributes', \Lib\Request::INPUT_GET);
            if (isset($attributes)) {
                $attributes = explode(',', $attributes);
            } else {
                $attributes = \Lib\Mapping::get_mapping('FolderChildren');
            }

            $data = $folder->search(\Lib\Request::getInputValue('query', \Lib\Request::INPUT_GET), $attributes);
            if (true) {
                \Lib\Response::data(\Lib\Mapping::get('FolderChildren', $data));
            } else {
                \Lib\Response::error("Children not found");
            }
        }
    }

    public static function getDefaultLdapDn()
    {
        $folder = \Lib\Objects::gi()->folder();
        \Lib\Response::data($folder->getDefaultLdapDn());
    }
}
