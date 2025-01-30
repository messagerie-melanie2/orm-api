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
 * Configuration du mapping
 * 
 * @var array
 */
$mapping = [
    'user' => [
        'dn',
        'dnarray',
        'uid',
        'fullname',
        'firstname',
        'lastname',
        'name',
        'email',
        'email_list',
        'email_send',
        'email_send_list',
        'type',
        'phonenumber',
        'phoneformat',
        'mobilephone',
        'mobileformat',
        'gender',
        'locality',
        'service',
        'street',
        'roomnumber',
        'postalcode',
        'photo_src',
        'description',
        'observation',
        'work',
        'object_type',
        'order',
        'alias',
    ],
    'other_user' => [
        'dn',
        'dnarray',
        'uid',
        'fullname',
        'firstname',
        'lastname',
        'name',
        'email',
        'email_list',
        'email_send',
        'email_send_list',
        'type',
        'phonenumber',
        'phoneformat',
        'mobilephone',
        'mobileformat',
        'gender',
        'locality',
        'service',
        'street',
        'roomnumber',
        'postalcode',
        'photo_src',
        'description',
        'observation',
        'work',
        'object_type'
    ],
    'group' => [
        "dn",
        "ou",
        "fullname",
        "email",
        "description",
        "type",
        "phonenumber",
        "faxnumber",
        "phoneformat",
        'object_type'
    ],
    'folder' => [
        "dn",
        'dnarray',
        "ou",
        "fullname",
        "email",
        "description",
        "type",
        "phonenumber",
        "faxnumber",
        "phoneformat",
        "street",
        "postalcode",
        "locality",
        "service",
        "can_export",
        'object_type'
    ],
    'FolderChildren' => [
        'uid',
        'dn',
        'dnarray',
        'fullname',
        'lastname',
        'firstname',
        'name',
        'gender',
        'email',
        'description',
        'phonenumber',
        'phoneformat',
        'roomnumber',
        'mobilephone',
        'mobileformat',
        'photo_src',
        'order',
        'description',
        'objectclass',
        'type',
        'object_type'
    ],
    'export' => [ //Prendre folder ou user ? (Choix déterminé par le front)
        "dn",
        "ou",
        "fullname",
        "email",
        "description",
        "type",
        "phonenumber",
        "faxnumber",
        "phoneformat",
        "street",
        "postalcode",
        "locality",
        "service",
    ],
];
