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

 /**
  * Configuration par défaut des API
  * 
  * @var array
  */
 $default = [
    // Configuration du namespace pour la librairie ORM (Mce, Mel, Mi, Dgfip, Gn)
    'namespace' => 'Mce',

    // URL de base utilisée pour les API
    'base_url' => '/api/api.php/',

    // Possibilité de se connecter aux API sans authentification ?
    'auth_type_none' => false,

    // Authentification possible via une clé d'API ?
    'auth_type_apikey' => false,

    // Authentification possible via un token Bearer ?
    'auth_type_bearer' => false,

    // Liste des clés d'API utilisables
    'api_keys' => [],

    // Limiter les connexions possibles à certaines adresse IP
    'ip_address_filter' => false,

    // Liste des adresses IP autorisées
    'valid_ip_addresses_list' => [],

    // Configuration d'un mapping personnalisé
    'mapping' => [],

    // Configuration d'un routing personnalisé
    'mapping' => [],
 ];