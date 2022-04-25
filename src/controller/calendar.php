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
 * Classe de traitement pour les calendriers
 * 
 * @package Controller
 */
class Calendar extends Controller {
    /**
     * Récupération d'un calendrier
     */
    public static function get()
    {
        \Lib\Log::LogDebug("Calendar get");
        $id = \Lib\Request::getInputValue('id', \Lib\Request::INPUT_GET);

        if (isset($id)) {
            $user = null;

            // Forcer l'uid dans le cas d'un user Basic
            if (\Lib\Request::issetUser()) {
                $user = \Lib\Objects::gi()->user();
                $user->uid = \Lib\Request::getUser();
            }
            else {
                $uid = \Lib\Request::getInputValue('user', \Lib\Request::INPUT_GET);
                if (isset($uid)) {
                    $user = \Lib\Objects::gi()->user();
                    $user->uid = $uid;
                }
            }

            $calendar = \Lib\Objects::gi()->calendar([$user]);
            $calendar->id = $id;

            if ($calendar->load()) {
                \Lib\Response::appendData('success', true);
                \Lib\Response::appendData('data', \Lib\Mapping::get('calendar', $calendar));
            }
            else {
                \Lib\Response::appendData('success', false);
                \Lib\Response::appendData('error', "Calendar not found");
            }
        }
        else {
            \Lib\Response::appendData('success', false);
            \Lib\Response::appendData('error', "Missing parameter id");
        }
    }

    /**
     * Récupération des événements d'un calendrier
     */
    public static function events()
    {
        \Lib\Log::LogDebug("Calendar events");
        $id = \Lib\Request::getInputValue('id', \Lib\Request::INPUT_GET);

        if (isset($id)) {
            $user = null;

            // Forcer l'uid dans le cas d'un user Basic
            if (\Lib\Request::issetUser()) {
                $user = \Lib\Objects::gi()->user();
                $user->uid = \Lib\Request::getUser();
            }
            else {
                $uid = \Lib\Request::getInputValue('user', \Lib\Request::INPUT_GET);
                if (isset($uid)) {
                    $user = \Lib\Objects::gi()->user();
                    $user->uid = $uid;
                }
            }

            $calendar = \Lib\Objects::gi()->calendar([$user]);
            $calendar->id = $id;

            if ($calendar->load()) {
                $events = $calendar->getAllEvents();
                $data = [];

                foreach ($events as $event) {
                    $data[] = \Lib\Mapping::get('event', $event);
                }

                \Lib\Response::appendData('success', true);
                \Lib\Response::appendData('data', $data);
            }
            else {
                \Lib\Response::appendData('success', false);
                \Lib\Response::appendData('error', "Calendar not found");
            }
        }
        else {
            \Lib\Response::appendData('success', false);
            \Lib\Response::appendData('error', "Missing parameter id");
        }
    }

    /**
     * Enregistrer/modifier un calendrier
     */
    public static function post()
    {
        \Lib\Log::LogDebug("Calendar post");
        $id = \Lib\Request::getInputValue('id', \Lib\Request::INPUT_POST);

        if (isset($id)) {
            // Forcer l'uid dans le cas d'un user Basic
            if (\Lib\Request::issetUser()) {
                $user = \Lib\Objects::gi()->user();
                $user->uid = \Lib\Request::getUser();
            }
            else {
                $uid = \Lib\Request::getInputValue('owner', \Lib\Request::INPUT_POST);
                if (isset($uid)) {
                    $user = \Lib\Objects::gi()->user();
                    $user->uid = $uid;
                }
                else {
                    \Lib\Response::appendData('success', false);
                    \Lib\Response::appendData('error', "Missing parameter owner");
                    return;
                }
            }

            $name = \Lib\Request::getInputValue('name', \Lib\Request::INPUT_POST);

            if (!isset($name)) {
                \Lib\Response::appendData('success', false);
                \Lib\Response::appendData('error', "Missing parameter name");
                return;
            }

            $calendar = \Lib\Objects::gi()->calendar([$user]);
            $calendar->id = $id;

            if (!$calendar->load()) {
                $calendar->owner = $user->uid;
            }
            
            $calendar->name = $name;

            $ret = $calendar->save();

            if (!is_null($ret)) {
                \Lib\Response::appendData('success', true);
            }
            else {
                \Lib\Response::appendData('success', false);
                \Lib\Response::appendData('error', "Error when saving the calendar");
            }
        }
        else {
            \Lib\Response::appendData('success', false);
            \Lib\Response::appendData('error', "Missing parameter id");
        }
    }
}