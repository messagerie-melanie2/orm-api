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
class Manager extends Controller
{

  /**
   * Envoi vers le bon objet (user,folder,group) pour la gestion de l'annuaire
   */
  public static function get()
  {
    \Lib\Log::LogTrace("get(): " . var_export($_GET, 1));
    $user = \Lib\Objects::gi()->user();

    if (\Lib\Request::checkInputValues(['email'], \Lib\Request::INPUT_GET, null, false)) {
      $user->email = \Lib\Request::getInputValue('email', \Lib\Request::INPUT_GET);
    } elseif (\Lib\Request::checkInputValues(['dn'], \Lib\Request::INPUT_GET)) {
      $user->dn = \Lib\Request::getInputValue('dn', \Lib\Request::INPUT_GET);
    } else {
      return;
    }

    // Gestion des attributs
    $attributes = \Lib\Request::getInputValue('attributes', \Lib\Request::INPUT_GET);
    if (isset($attributes)) {
      $attributes = explode(',', $attributes);
    } else {
      $attributes = \Lib\Mapping::get_mapping('user');
    }

    if ($user->load($attributes)) {
      \Lib\Response::data(\Lib\Mapping::get(strtolower($user->object_type), $user->object));
    } else {
      \Lib\Response::error("Type not found");
    }
  }

    /**
     * Récupération de la valeur du nombre de résultats maximum pour la recherche avancée
     */
    public static function getPortee()
    {
        \Lib\Log::LogTrace("getPortee(): " . var_export($_GET, 1));

        \Lib\Response::data(\LibMelanie\Config\Config::get(\LibMelanie\Config\Config::MINEQ_PORTEE_MAPPING));
    }

    /**
     * Récupération des champs dans les ressources de l'annuaire pour les champs smtp
     */
    public static function getSmtpDomains()
    {
        \Lib\Log::LogTrace("getSmtpDomains(): " . var_export($_GET, 1));

        $user = \Lib\Objects::gi()->user();
        \Lib\Response::data($user->mineq_domaines_SMTP);
    }
}
