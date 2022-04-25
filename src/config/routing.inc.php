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
 * Configuration du routing
 * Si une route n'est pas présente dans routing elle ne sera pas utilisable
 * Par défaut la classe utilisée correspond au nom de la route avec une majuscule
 * La configuration est récursive et permet d'avoir du routing sur une route
 * 
 * @var array
 */
$routing = [
    'user'          => [
        'methods'   => [
            'GET'       => true,
            'POST'      => false,
        ],
        'routing' => [
            'calendars' => [
                'methods'   => [
                    'GET'       => true,
                    'POST'      => false,
                ],
                'routing' => [
                    'default' => [
                        'class' => 'UserCalendars',
                        'methods'   => [
                            'GET'       => 'default',
                            'POST'      => false,
                        ],
                    ],
                    'shared' => [
                        'class' => 'UserCalendars',
                        'methods'   => [
                            'GET'       => 'shared',
                            'POST'      => false,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'calendar'      => [
        'methods'   => [
            'GET'       => true,
            'POST'      => true,
        ],
    ],
    'event'         => [
        'methods'   => [
            'GET'       => true,
            'POST'      => false,
        ],
    ],
    'taskslist'     => [],
    'task'          => [],
    'addressbook'   => [],
    'contact'       => [],
    'share'         => [],
];
