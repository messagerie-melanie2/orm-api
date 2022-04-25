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
 * Classe de gestion du mapping des API
 * 
 * @package Lib
 */
class Mapping {
    const NAME = 'name';
    const KEY = 'key';
    const GET = 'get';
    const SET = 'set';
    
    /**
	 *  Constructeur privé pour ne pas instancier la classe
	 */
	private function __construct() {}

    /**
	 * Mapping objet vers json
	 */
	public static function get($itemName, $item)
	{
		$mapping = Config::get('mapping', []);
        $data = [];

        if (isset($mapping[$itemName])) {
            foreach($mapping[$itemName] as $name) {
                $method = null;
                if (is_array($name)) {
                    $method = isset($name[self::GET]) ? $name[self::GET] : null;
                    $name = isset($name[self::NAME]) ? $name[self::NAME] : null;
                    $key = isset($name[self::KEY]) ? $name[self::KEY] : $name;
                }
                else {
                    $key = $name;
                }
                $value = $item->$name;
                if (isset($method)) {
                    $file = strtolower(str_replace("\\", "/", $method[0]));
                    require_once __DIR__ . "/../$file.php";
                    $value = call_user_func($method, $value);
                }
                if (isset($value) && !empty($value)) {
                    $data[$key] = $value;
                }
            }
        }
        return $data;
	}

    /**
     * Mapping json vers objet
     */
    public static function set($itemName, $item, $data)
    {
        $mapping = Config::get('mapping', []);

        if (isset($mapping[$itemName])) {
            foreach($mapping[$itemName] as $name) {
                $method = null;
                if (is_array($name)) {
                    $method = isset($name[self::SET]) ? $name[self::SET] : null;
                    $name = isset($name[self::NAME]) ? $name[self::NAME] : null;
                    $key = isset($name[self::KEY]) ? $name[self::KEY] : $name;
                }
                else {
                    $key = $name;
                }
                $value = isset($data[$key]) ? $data[$key] : null;
                if (isset($method)) {
                    $file = strtolower(str_replace("\\", "/", $method[0]));
                    require_once __DIR__ . "/../$file.php";
                    $value = call_user_func($method, $value);
                }
                $item->name = $value;
            }
        }
        return $item;
    }
}