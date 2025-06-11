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
 * Classe de traitement pour un utilisateur
 * 
 * @package Controller
 */
class User extends Controller
{
    /**
     * Récupération d'un utilisateur
     */
    public static function get()
    {
        \Lib\Log::LogTrace("get(): " . var_export($_GET, 1));

        $user = \Lib\Utils::getCurrentUser('uid');

        if (isset($user)) {

            // Gestion des attributs
            $attributes = \Lib\Request::getInputValue('attributes', \Lib\Request::INPUT_GET);
            if (isset($attributes)) {
                $attributes = explode(',', $attributes);
            } else {
                $attributes = \Lib\Mapping::get_mapping('user');
            }

            if ($user->load($attributes)) {
                \Lib\Response::data(\Lib\Mapping::get('user', $user));
            } else {
                \Lib\Response::error("User not found");
            }
        } else {
            \Lib\Response::error("Missing parameter uid");
        }
    }

    /**
     * Enregistrer/modifier un utilisateur
     */
    public static function post()
    {
        $json = \Lib\Request::readJson();

        \Lib\Log::LogTrace("post(): " . var_export($json, 1));

        if (isset($json) && $json !== false) {

            $user = \Lib\Objects::gi()->user([\LibMelanie\Config\Ldap::$MASTER_LDAP, 'amedee.mailbox']);

            $user->dn = 'uid=amedee.testamedee,ou=AmedeeV2,ou=Test-PNE Messagerie,ou=TF,ou=melanie,
            ou=organisation,dc=equipement,dc=gouv,dc=fr';
            // $user->dn = 'uid=' . $json['uid'] . ',ou=AmedeeV2,ou=Test-PNE Messagerie,ou=TF,ou=melanie,ou=organisation,dc=equipement,dc=gouv,dc=fr';           


            foreach ($json as $key => $value) {
                if (!empty($value) && in_array($key, \Lib\Mapping::get_mapping('user'))) {
                    $user->$key = $value;
                }
            }

            if (isset($json['amedee_email'])) {
                $email_list = [];
                $email_send_list = [];

                foreach ($json['amedee_email'] as $value) {
                    $email_list[] = $value['email'];

                    if ($value['primary'] === true) {
                        $user->email = $value['email'];
                        $user->email_send = $value['email'];
                        $email_send_list[] = $value['email'];
                    } elseif ($value['emission'] === true) {
                        $email_send_list[] = $value['email'];
                    }
                }

                $user->email_list = $email_list;
                $user->email_send_list = $email_send_list;
            }

            if (isset($json['amedee_phone'])) {
                foreach ($json['amedee_phone'] as $key => $value) {
                    if (!empty($value)) {
                        $user->$key = $value;
                    }
                }
            }

            if (isset($json['amedee_address'])) {
                foreach ($json['amedee_address'] as $key => $value) {
                    if (!empty($value)) {
                        $user->$key = $value;
                    }
                }
            }

            // $ret = $user->save();

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
     * Recherche avancée d'utilisateurs
     */
    public static function advancedSearch()
    {
        \Lib\Log::LogTrace("get(): " . var_export($_GET, 1));

        $json = \Lib\Request::readJson();

        if ($json) {
            $user = \Lib\Objects::gi()->user();

            foreach ($json['data'] as $key => $value) {
                if (!empty($value)) {
                    $user->$key = $value;
                }
            }

            $ret = $user->getList(\Lib\Mapping::get_mapping('user'));

            if ($ret) {
                \Lib\Response::data(\Lib\Mapping::get('user', $ret));
            } else {
                \Lib\Response::error("Children not found");
            }
        }
    }

    /**
     * Récupération des champs dans les ressources de l'annuaire pour la recherche avancée
     */
    public static function advancedSearchFields()
    {
        \Lib\Log::LogTrace("advancedSearchFields(): " . var_export($_GET, 1));

        $user = \Lib\Objects::gi()->user(); 
        $data['businessCategory'] = $user->list_business_categories;
        $data['mineqMission'] = $user->list_mineq_mission;
        $data['title'] = $user->list_title;

        \Lib\Response::data($data);
    }
}
