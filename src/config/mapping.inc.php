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
        'uid',
        'fullname',
        'name',
        'email',
        'email_list',
        'email_send',
        'email_send_list',
        'type'
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
        [\Lib\Mapping::NAME => 'attendees', \Lib\Mapping::MAPPING => 'attendee', \Lib\Mapping::LIST => true],
        [\Lib\Mapping::NAME => 'organizer', \Lib\Mapping::MAPPING => 'organizer'],
        [\Lib\Mapping::NAME => 'attachments', \Lib\Mapping::MAPPING => 'attachment', \Lib\Mapping::LIST => true, \Lib\Mapping::GET => ["Controller\\Attachment", "getAttachments"], \Lib\Mapping::SET => ["Controller\\Attachment", "setAttachments"]],
        'all_day',
        'start',
        'end',
        'created',
        'modified',
        'timezone',
        [\Lib\Mapping::NAME => 'exceptions', \Lib\Mapping::MAPPING => 'exception', \Lib\Mapping::LIST => true],
        [\Lib\Mapping::NAME => 'recurrence', \Lib\Mapping::MAPPING => 'recurrence', \Lib\Mapping::GET => ["Controller\\Event", "getRecurrence"]],
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
        [\Lib\Mapping::NAME => 'attendees', \Lib\Mapping::MAPPING => 'attendee', \Lib\Mapping::LIST => true],
        [\Lib\Mapping::NAME => 'organizer', \Lib\Mapping::MAPPING => 'organizer'],
        [\Lib\Mapping::NAME => 'attachments', \Lib\Mapping::MAPPING => 'attachment', \Lib\Mapping::LIST => true, \Lib\Mapping::GET => ["Controller\\Attachment", "getAttachments"]],
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
    'attachment' => [
        'name',
        'path',
        'owner',
        'modified',
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
    'addressbook' => [
        'id',
        'name',
        'owner',
        'perm',
    ],
    'contact' => [
        "addressbook",
        "uid",
        "modified",
        "members",
        "name",
        "alias",
        "freebusyurl",
        "firstname",
        "lastname",
        "middlenames",
        "nameprefix",
        "namesuffix",
        "birthday",
        "title",
        "company",
        "notes",
        "email",
        "email1",
        "email2",
        "cellphone",
        "fax",
        "category",
        "url",
        "homeaddress",
        "homephone",
        "homestreet",
        "homepob",
        "homecity",
        "homeprovince",
        "homepostalcode",
        "homecountry",
        "workaddress",
        "workphone",
        "workstreet",
        "workpob",
        "workcity",
        "workprovince",
        "workpostalcode",
        "workcountry",
        "pgppublickey",
        "smimepublickey",
        "photo",
        "phototype",
        "logo",
        "logotype",
        "timezone",
        "geo",
        "pager",
        "role",
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
        "phoneformat"
    ],
    'folder' => [
        "dn",
        "ou",
        "fullname",
        "email",
        "description",
        "type",
        "phonenumber",
        "faxnumber",
        "phoneformat"
    ],
    'FolderChildren' => [
        'dn',
        'fullname',
        'lastname',
        'firstname',
        'gender',
        'email',
        'description',
        'phonenumber',
        'roomnumber',
        'mobilephone',
        'order',
        'type'
    ]
];
