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
 * Classe de traitement des calendriers pour un utilisateur
 * 
 * @package Controller
 */
class UserCalendars extends Controller {
    /**
     * Récupération des calendriers d'un utilisateur
     */
    public static function get()
    {
        $uid = User::getUid();

        if (isset($uid)) {
            $user = \Lib\Objects::gi()->user();
            $user->uid = $uid;
            $calendars = $user->getUserCalendars();
            if (isset($calendars)) {
                \Lib\Response::appendData('success', true);
                $data = [];
                foreach ($calendars as $calendar) {
                    $data[] = \Lib\Mapping::get('calendar', $calendar);
                }
                \Lib\Response::appendData('data', $data);
            }
            else {
                \Lib\Response::appendData('success', false);
                \Lib\Response::appendData('error', "Calendars not found");
            }
        }
        else {
            \Lib\Response::appendData('success', false);
            \Lib\Response::appendData('error', "Missing parameter uid");
        }
    }

    /**
     * Récupération du calendrier par défaut d'un utilisateur
     */
    public static function default()
    {
        $uid = User::getUid();

        if (isset($uid)) {
            $user = \Lib\Objects::gi()->user();
            $user->uid = $uid;
            $calendar = $user->getDefaultCalendar();
            if (isset($calendar)) {
                \Lib\Response::appendData('success', true);
                \Lib\Response::appendData('data', \Lib\Mapping::get('calendar', $calendar));
            }
            else {
                \Lib\Response::appendData('success', false);
                \Lib\Response::appendData('error', "Default calendar not found");
            }
        }
        else {
            \Lib\Response::appendData('success', false);
            \Lib\Response::appendData('error', "Missing parameter uid");
        }
    }

    /**
     * Récupération des calendriers partagés d'un utilisateur
     */
    public static function shared()
    {
        $uid = User::getUid();

        if (isset($uid)) {
            $user = \Lib\Objects::gi()->user();
            $user->uid = $uid;
            $calendars = $user->getSharedCalendars();
            if (isset($calendars)) {
                \Lib\Response::appendData('success', true);
                $data = [];
                foreach ($calendars as $calendar) {
                    $data[] = \Lib\Mapping::get('calendar', $calendar);
                }
                \Lib\Response::appendData('data', $data);
            }
            else {
                \Lib\Response::appendData('success', false);
                \Lib\Response::appendData('error', "Calendars not found");
            }
        }
        else {
            \Lib\Response::appendData('success', false);
            \Lib\Response::appendData('error', "Missing parameter uid");
        }
    }
}