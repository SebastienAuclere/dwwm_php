<?php

class Dbconnect
{
    private static ?PDO $connexion = null;

    private function __construct()
    {
        
    }

    private static function getConfig(): array
    {
        $config = (require ('./models/config.php'));
        return $config;
    }

    public static function getInstance() {
        if(is_null(self::$connexion)) {
            $config = self::getConfig();
            self::$connexion = new PDO($config['dsn'], $config['user'], $config['pass'], [PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC]);
        }
        return self::$connexion;
    }
}