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
class User extends Controller {
    /**
     * Récupération d'un utilisateur
     */
    public static function get()
    {
        $uid = \Lib\Request::getInputValue('uid', \Lib\Request::INPUT_GET);

        if (isset($uid)) {
            $user = \Lib\Objects::gi()->user();
            $user->uid = $uid;
            if ($user->load()) {
                \Lib\Response::appendData('success', true);
                \Lib\Response::appendData('data', self::toJson($user));
            }
            else {
                \Lib\Response::appendData('success', false);
                \Lib\Response::appendData('error', "User not found");
            }
        }
        else {
            \Lib\Response::appendData('success', false);
            \Lib\Response::appendData('error', "Missing parameter uid");
        }
    }

    /**
     * Converti un utilisateur en array pour faire du json
     * 
     * @param \LibMelanie\Api\Defaut\User
     * 
     * @return array
     */
    private static function toJson($user) 
    {
        return [
            'uid'               => $user->uid,
            'fullname'          => $user->fullname,
            'name'              => $user->name,
            'email'             => $user->email,
            'email_list'        => $user->email_list,
            'email_send'        => $user->email_send,
            'email_send_list'   => $user->email_send_list,
            'type'              => $user->type,
        ];
    }
}