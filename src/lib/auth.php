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

namespace Lib;

/**
 * Classe de gestion de l'authentification (par JWT ou par certificat)
 * 
 * @package Lib
 */
class Auth {
    /**
	 *  Constructeur privé pour ne pas instancier la classe
	 */
	private function __construct() {}

    /**
     * Validation de l'authentification des API
     * 
     * @return boolean
     */
    public static function validate()
    {
        // Récupération du type d'authentification
        $auth_type = Config::get('auth_type');

        // Validation de l'authentification en fonction du type
        if ($auth_type == 'basic') {
            return self::basic();
        }
        else if ($auth_type == 'token') {
            return self::token();
        }
        else if ($auth_type == 'jwt') {
            return self::jwt();
        }
        else if ($auth_type == 'none') {
            return true;
        }
        return false;
    }

    /**
     * Validation de l'authentification login/mot de passe
     * 
     * Pas implémenté actuellement
     */
    private static function basic() 
    {
        return false;
    }

    /**
     * Validation de l'authentification par API Token dans la configuration
     */
    private static function token() 
    {
        // Récupération du header Autorization
        $headers = Request::getHeaders();

        $authorization = trim($headers['Authorization']);

        if (strpos($authorization, 'Bearer') !== false) {
            // Récupération des tokens d'authentification
            $auth_tokens = Config::get('auth_tokens', []);
            $token = trim(str_replace('Bearer', '', $authorization));

            if (in_array($token, $auth_tokens)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Validation de l'authentification par token jwt
     * 
     * Pas implémenté actuellement
     */
    private static function jwt() {
        return false;
    }
}