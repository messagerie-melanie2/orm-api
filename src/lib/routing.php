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
 * Classe de gestion du routing des API
 * 
 * @package Lib
 */
class Routing {
    /**
	 *  Constructeur privé pour ne pas instancier la classe
	 */
	private function __construct() {}

    /**
	 * Lancement du routing
	 */
	public static function process()
	{
		$routing = [
            'routing' => Config::get('routing', [])
        ];
        $class = '';

        // Récupérer le bon routing
        foreach (Request::getUris() as $uri) {
            $routing = $routing['routing'];
            if (isset($routing[$uri])) {
                $routing = $routing[$uri];
                $class .= ucfirst(strtolower($uri));
            }
            else {
                Response::appendData('success', false);
                Response::appendData('error', "Routing error for uri '$uri'");
                $routing = null;
                break;
            }
        }

        // Gestion du routing
        if (isset($routing)) {
            // Utiliser la classe configurée ?
            $file = __DIR__.'/../controller/'.strtolower($class).'.php';
            $class = "Controller\\". isset($routing['class']) ? $routing['class'] : $class;
            $method = Request::getMethod();

            if (isset($routing['methods']) && isset($routing['methods'][$method])) {
                if (is_bool($routing['methods'][$method])) {
                    if ($routing['methods'][$method] === true) {
                        $method = strtolower($method);
                    }
                    else {
                        Response::appendData('success', false);
                        Response::appendData('error', "Method is forbidden");
                        return;
                    }
                }
                else {
                    $method = $routing['methods'][$method];
                }
                
                // Charger le fichier controleur
                if (file_exists($file)) {
                    require_once $file;

                    // Retrouver la méthode associée
                    if (method_exists($class, $method)) {
                        call_user_func([$class, $method]);
                    }
                    else {
                        Response::appendData('success', false);
                        Response::appendData('error', "Routing method error");
                    }
                }
                else {
                    Response::appendData('success', false);
                    Response::appendData('error', "Routing controller error");
                }
            }
            else {
                Response::appendData('success', false);
                Response::appendData('error', "Routing configuration error for uri '$uri' and method '$method'");
            }
        }
	}
}