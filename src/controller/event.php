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
 * Classe de traitement pour les événements
 * 
 * @package Controller
 */
class Event extends Controller {
    /**
     * Récupération d'un événement
     */
    public static function get()
    {
        $uid = \Lib\Request::getInputValue('uid', \Lib\Request::INPUT_GET);

        if (isset($uid)) {
            $calendar_id = \Lib\Request::getInputValue('calendar', \Lib\Request::INPUT_GET);

            if (isset($calendar_id)) {
                $user = null;

                // Forcer l'uid dans le cas d'un user Basic
                if (\Lib\Request::issetUser()) {
                    $user = \Lib\Objects::gi()->user();
                    $user->uid = \Lib\Request::getUser();
                }
                else {
                    $user_uid = \Lib\Request::getInputValue('user', \Lib\Request::INPUT_GET);
                    if (isset($user_uid)) {
                        $user = \Lib\Objects::gi()->user();
                        $user->uid = $user_uid;
                    }
                }
    
                $calendar = \Lib\Objects::gi()->calendar([$user]);
                $calendar->id = $calendar_id;

                $event = \Lib\Objects::gi()->event([$user, $calendar]);
                $event->uid = $uid;

                if ($event->load()) {
                    \Lib\Response::appendData('success', true);
                    \Lib\Response::appendData('data', \Lib\Mapping::get('event', $event));
                }
                else {
                    \Lib\Response::appendData('success', false);
                    \Lib\Response::appendData('error', "Event not found");
                }
            }
            else {
                \Lib\Response::appendData('success', false);
                \Lib\Response::appendData('error', "Missing parameter calendar");
            }
        }
        else {
            \Lib\Response::appendData('success', false);
            \Lib\Response::appendData('error', "Missing parameter uid");
        }
    }

    /**
     * Mapping pour les attendees
     */
    public function getAttendees($attendees)
    {
        if (isset($attendees) && is_array($attendees) && count($attendees)) {
            $data = [];
            foreach ($attendees as $attendee) {
                $data[] = \Lib\Mapping::get('attendee', $attendee);
            }
        }
        else {
            $data = null;
        }
        return $data;
    }

    /**
     * Mapping pour l'organizer
     */
    public function getOrganizer($organizer)
    {
        if (isset($organizer)) {
            $email = $organizer->email;
            if (isset($email)) {
                $data = \Lib\Mapping::get('organizer', $organizer);
            }
            else {
                $data = null;
            }
        }
        else {
            $data = null;
        }
        return $data;
    }

    /**
     * Mapping pour la recurrence
     */
    public function getRecurrence($recurrence)
    {
        if (isset($recurrence)) {
            $type = $recurrence->type;
            if (isset($type) && $type) {
                $data = \Lib\Mapping::get('recurrence', $recurrence);
            }
            else {
                $data = null;
            }
        }
        else {
            $data = null;
        }
        return $data;
    }

    /**
     * Mapping pour les exceptions
     */
    public function getExceptions($exceptions)
    {
        if (isset($exceptions) && is_array($exceptions) && count($exceptions)) {
            $data = [];
            foreach ($exceptions as $key => $exception) {
                $data[] = \Lib\Mapping::get('exception', $exception);
            }
        }
        else {
            $data = null;
        }
        return $data;
    }
}