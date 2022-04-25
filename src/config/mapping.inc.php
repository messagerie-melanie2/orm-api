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
$config['mapping'] = [
    'user' => [
        'dn',
        'uid',
        'fullname',
        'name',
        'email',
        'email_list',
        'email_send',
        'email_send_list',
        'type',
    ],
    'calendar' => [
        'id',
        'name',
        'owner',
        'perm',
    ],
    'event' => [
        'uid',
        'realuid',
        'calendar',
        'owner',
        'keywords',
        'title',
        'description',
        'category',
        'location',
        'status',
        'class',
        'sequence',
        'priority',
        'alarm',
        'deleted',
        'transparency',
        [\Lib\Mapping::NAME => 'attendees', \Lib\Mapping::GET => ["Controller\\Event", "getAttendees"]],
        [\Lib\Mapping::NAME => 'organizer', \Lib\Mapping::GET => ["Controller\\Event", "getOrganizer"]],
        'all_day',
        'start',
        'end',
        'created',
        'modified',
        'timezone',
        [\Lib\Mapping::NAME => 'exceptions', \Lib\Mapping::GET => ["Controller\\Event", "getExceptions"]],
        [\Lib\Mapping::NAME => 'recurrence', \Lib\Mapping::GET => ["Controller\\Event", "getRecurrence"]],
    ],
    'exception' => [
        'uid',
        'realuid',
        'calendar',
        'owner',
        'keywords',
        'title',
        'description',
        'category',
        'location',
        'status',
        'class',
        'sequence',
        'priority',
        'alarm',
        'deleted',
        'transparency',
        [\Lib\Mapping::NAME => 'attendees', \Lib\Mapping::GET => ["Controller\\Event", "getAttendees"]],
        [\Lib\Mapping::NAME => 'organizer', \Lib\Mapping::GET => ["Controller\\Event", "getOrganizer"]],
        'all_day',
        'start',
        'end',
        'created',
        'modified',
        'timezone',
        'recurrence_id',
    ],
    'attendee' => [
        'name',
        'email',
        'role',
        'response',
    ],
    'organizer' => [
        'name',
        'email',
    ],
    'recurrence' => [
        "enddate",
        "count",
        "interval",
        "type",
        "days",
    ],
];
