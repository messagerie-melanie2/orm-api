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
        'dn'                => 'dn',
        'uid'               => 'uid',
        'fullname'          => 'fullname',
        'name'              => 'name',
        'email'             => 'email',
        'email_list'        => 'email_list',
        'email_send'        => 'email_send',
        'email_send_list'   => 'email_send_list',
        'type'              => 'type',
    ],
    'calendar' => [
        'id'    => 'id',
        'name'  => 'name',
        'owner' => 'owner',
        'perm'  => 'perm',
    ],
    'event' => [
        'id'        => 'id',
        'uid'       => 'uid',
        'realuid'   => 'realuid',
        'calendar'  => 'calendar',
        'owner'     => 'owner',
        'keywords'  => 'keywords',
        'title'         => 'title',
        'description'   => 'description',
        'category'      => 'category',
        'location'      => 'location',
        'status'        => 'status',
        'class'         => 'class',
        'sequence'      => 'sequence',
        'priority'      => 'priority',
        'alarm'         => 'alarm',
        'deleted'       => 'deleted',
        'transparency'  => 'transparency',
        'attendees'     => [\Lib\Mapping::NAME => 'attendees', \Lib\Mapping::GET => ["Controller\\Event", "getAttendees"]],
        'organizer'     => [\Lib\Mapping::NAME => 'organizer', \Lib\Mapping::GET => ["Controller\\Event", "getOrganizer"]],
        'all_day'       => 'all_day',
        'start'         => 'start',
        'end'           => 'end',
        'created'       => 'created',
        'modified'      => 'modified',
        'timezone'      => 'timezone',
        'exceptions'    => [\Lib\Mapping::NAME => 'exceptions', \Lib\Mapping::GET => ["Controller\\Event", "getExceptions"]],
        'recurrence'    => [\Lib\Mapping::NAME => 'recurrence', \Lib\Mapping::GET => ["Controller\\Event", "getRecurrence"]],
    ],
    'event' => [
        'id'        => 'id',
        'uid'       => 'uid',
        'realuid'   => 'realuid',
        'calendar'  => 'calendar',
        'owner'     => 'owner',
        'keywords'  => 'keywords',
        'title'         => 'title',
        'description'   => 'description',
        'category'      => 'category',
        'location'      => 'location',
        'status'        => 'status',
        'class'         => 'class',
        'sequence'      => 'sequence',
        'priority'      => 'priority',
        'alarm'         => 'alarm',
        'deleted'       => 'deleted',
        'transparency'  => 'transparency',
        'attendees'     => [\Lib\Mapping::NAME => 'attendees', \Lib\Mapping::GET => ["Controller\\Event", "getAttendees"]],
        'organizer'     => [\Lib\Mapping::NAME => 'organizer', \Lib\Mapping::GET => ["Controller\\Event", "getOrganizer"]],
        'all_day'       => 'all_day',
        'start'         => 'start',
        'end'           => 'end',
        'created'       => 'created',
        'modified'      => 'modified',
        'timezone'      => 'timezone',
        'exceptions'    => [\Lib\Mapping::NAME => 'exceptions', \Lib\Mapping::GET => ["Controller\\Event", "getExceptions"]],
        'recurrence'    => [\Lib\Mapping::NAME => 'recurrence', \Lib\Mapping::GET => ["Controller\\Event", "getRecurrence"]],
    ],
    'exception' => [
        'id'        => 'id',
        'uid'       => 'uid',
        'realuid'   => 'realuid',
        'calendar'  => 'calendar',
        'owner'     => 'owner',
        'keywords'  => 'keywords',
        'title'         => 'title',
        'description'   => 'description',
        'category'      => 'category',
        'location'      => 'location',
        'status'        => 'status',
        'class'         => 'class',
        'sequence'      => 'sequence',
        'priority'      => 'priority',
        'alarm'         => 'alarm',
        'deleted'       => 'deleted',
        'transparency'  => 'transparency',
        'attendees'     => [\Lib\Mapping::NAME => 'attendees', \Lib\Mapping::GET => ["Controller\\Event", "getAttendees"]],
        'organizer'     => [\Lib\Mapping::NAME => 'organizer', \Lib\Mapping::GET => ["Controller\\Event", "getOrganizer"]],
        'all_day'       => 'all_day',
        'start'         => 'start',
        'end'           => 'end',
        'created'       => 'created',
        'modified'      => 'modified',
        'timezone'      => 'timezone',
        'recurrence_id' => 'recurrence_id',
    ],
    'attendee' => [
        'name'      => 'name',
        'email'     => 'email',
        'role'      => 'role',
        'response'  => 'response',
    ],
    'organizer' => [
        'name'  => 'name',
        'email' => 'email',
    ],
    'recurrence' => [
        "enddate" 		=> "enddate",
        "count" 		=> "count",
        "interval" 		=> "interval",
        "type" 			=> "type",
        "days" 			=> "days",
    ],
];
