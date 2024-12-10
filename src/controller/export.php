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
 * Classe de traitement pour les export
 * 
 * @package Controller
 */
class Export extends Controller
{
    /**
     * Récupération d'un export
     */
    public static function get()
    {
        \Lib\Log::LogTrace("get(): " . var_export($_GET, 1));

        if (\Lib\Request::checkInputValues(['dn'], \Lib\Request::INPUT_GET)) {

            $export = \Lib\Objects::gi()->export();
            $export->dn = \Lib\Request::getInputValue('dn', \Lib\Request::INPUT_GET);

            // Gestion des attributs
            $attributes = \Lib\Request::getInputValue('attributes', \Lib\Request::INPUT_GET);
            if (isset($attributes)) {
                $attributes = explode(',', $attributes);
            } else {
                $attributes = \Lib\Mapping::get_mapping('export');
            }
            $data = $export->getExportChildren($attributes);

            if (isset($data)) {
                \Lib\Response::appendHeader("Content-Type: text/csv");
                // \Lib\Response::appendHeader("Content-Disposition : inline");
                \Lib\Response::data(\Lib\Mapping::get('user', $data));
            } else {
                \Lib\Response::error("Export not found");
            }
        }
    }
}
