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

namespace Lib;

use LibMelanie\Log\M2Log;

/**
 * Classe de gestion des logs pour les API
 * 
 * @package Lib
 */
class Log {
    const NOLOG = 0;
    const ERROR = 1;
    const INFO = 2;
    const DEBUG = 3;
    const TRACE = 4;

    /**
     * Singleton
     * 
     * @var Log
     */
    private static $instance;

    /**
     * @var array Mapping des niveaux de logs
     */
    private static $LEVEL = [
        'NOLOG',
        'ERROR',
        'INFO',
        'DEBUG',
        'TRACE',
    ];

    /**
     * @var array Configuration du script
     */
    private $config;

    /**
     * Récupération du singleton
     * 
     * @param array $config Configuration du script
     * 
     * @return Log
     */
    public static function get_instance($config = null)
    {
        if (!isset($config)) {
            global $config;
        }

        if (!isset(self::$instance)) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    /**
     * Raccourcis pour get_instance
     * 
     * @param array $config Configuration du script
     * 
     * @return Log
     */
    public static function gi($config = null) 
    {
        return self::get_instance($config);
    }

    /**
     * Initialisation des logs pour l'ORM
     * 
     * @param array $config Configuration du script
     */
    public static function InitORMLogs($config) {
        // Niveau de log ERROR
        if ($config['log_level'] >= self::ERROR) {
            M2Log::InitErrorLog(function($message) {
                global $config;
                self::gi($config)->log(self::ERROR, $message);
            });
        }

        // Niveau de log INFO
        if ($config['log_level'] >= self::INFO) {
            M2Log::InitInfoLog(function($message) {
                global $config;
                self::gi($config)->log(self::INFO, $message);
            });
        }

        // Niveau de log TRACE
        if ($config['log_level'] >= self::TRACE) {
            M2Log::InitDebugLog(function($message) {
                global $config;
                self::gi($config)->log(self::TRACE, $message);
            });
        }
    }

    /**
     * Constructeur par défaut de la classe
     * 
     * @param array $config Configuration du script
     */
    public function __construct($config)
    {
        $this->config = $config;
        
        // Valider que le fichier de log existe et est accessible sinon arrêter le script
        if ($this->config['log_file'] != 'syslog' 
                && $this->config['log_file'] != 'standard' 
                && !file_exists($this->config['log_file'])) {
            $message = "Le fichier '".$this->config['log_file']."' n'existe pas ou n'est pas accessible par l'utilisateur courant";
            echo "ERROR 5: $message\r\n";
            exit(5);
        }
    }

    /**
     * Est-ce que le niveau de log configuré est supérieur ou égal au niveau en param
     * 
     * @param integer $level Niveau de log à tester
     * 
     * @return boolean
     */
    public function is($level)
    {
        return $level <= $this->config['log_level'];
    }

    /**
     * Est-ce que le niveau de log configuré est supérieur ou égal au niveau en param
     * 
     * Méthode static d'accès direct à is()
     * 
     * @param integer $level Niveau de log à tester
     * 
     * @return boolean
     */
    public static function IsLvl($level) {
        return self::get_instance()->is($level);
    }

    /**
     * Logguer en fonction de la configuration
     * 
     * @param integer $level Niveau de log du message
     * @param string $message Message à logguer
     */
    public function log($level, $message) 
    {
        if ($this->is($level)) {
            // Formatter le message avec la date et le level
            $date = date('Y-m-d H:i:s');
            $level = self::$LEVEL[$level];
            $message = "[$date] $level $message";

            // Appeler la méthode de log
            if ($this->config['log_file'] == 'standard') {
                $this->standard($message);
            }
            else if ($this->config['log_file'] == 'syslog') {
                $this->syslog($message);
            }
            else {
                $this->file($message);
            }
        }
    }

    /**
     * Logguer en ERROR
     * 
     * Méthode static d'accès direct à log()
     * 
     * @param string $message Message à logguer
     */
    public static function LogError($message) {
        self::get_instance()->log(self::ERROR, $message);
    }

    /**
     * Logguer en INFO
     * 
     * Méthode static d'accès direct à log()
     * 
     * @param string $message Message à logguer
     */
    public static function LogInfo($message) {
        self::get_instance()->log(self::INFO, $message);
    }

    /**
     * Logguer en DEBUG
     * 
     * Méthode static d'accès direct à log()
     * 
     * @param string $message Message à logguer
     */
    public static function LogDebug($message) {
        self::get_instance()->log(self::DEBUG, $message);
    }

    /**
     * Logguer en TRACE
     * 
     * Méthode static d'accès direct à log()
     * 
     * @param string $message Message à logguer
     */
    public static function LogTrace($message) {
        self::get_instance()->log(self::TRACE, $message);
    }

    /**
     * Logguer les message sur la sortie standard (echo)
     * 
     * @param string $message
     */
    private function standard($message) 
    {
        echo $message . "\r\n";
    }

    /**
     * Logguer les message dans le fichier configuré dans le config.php
     * 
     * @param string $message
     */
    private function file($message) 
    {
        error_log($message . "\r\n", 3, $this->config['log_file']);
    }

    /**
     * Logguer les message dans syslog
     * 
     * @param string $message
     */
    private function syslog($message) 
    {
        error_log($message . "\r\n", 1);
    }
}