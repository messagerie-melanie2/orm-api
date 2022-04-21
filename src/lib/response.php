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
 * Classe de gestion de la réponse des API
 * 
 * @package Lib
 */
class Response {
    /**
     * Données à retourner en réponse au format json
     * 
     * @var array
     */
    private static $data;

    /**
     * Liste des headers à retourner au client
     * 
     * @var array
     */
    private static $headers;

    /**
	 *  Constructeur privé pour ne pas instancier la classe
	 */
	private function __construct() {}

    /**
     * Envoi des données au client
     */
    public static function send() 
    {
        // Gestion des headers
        if (isset(self::$headers) && is_array(self::$headers)) {
            foreach (self::$headers as $header) {
                header($header);
            }
        }
        header("Content-Type: application/json");

        // Gestion des data
        if (isset(self::$data) && is_array(self::$data)) {
            echo json_encode(self::$data);
        }

        exit;
    }

    /**
     * Ajoute un header pour la réponse
     * 
     * @param string $header
     */
    public static function appendHeader($header)
    {
        if (!isset(self::$headers)) {
            self::$headers = [];
        }

        self::$headers[] = $header;
    }

    /**
     * Ajoute des data pour la réponse
     * 
     * @param string $key
     * @param string $data
     */
    public static function appendData($key, $data)
    {
        if (!isset(self::$data)) {
            self::$data = [];
        }

        self::$data[$key] = $data;
    }
}