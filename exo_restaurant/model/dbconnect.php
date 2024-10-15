 <?php
    class Dbconnect
    {

        //attributs

        private static ?PDO $connection = null;
        private const HOST = "localhost";
        private const DBNAME = "guide";
        private const USER = "root";
        private const PWD = "";

        //constructeur

        private function __construct() {}

        //fonctions

        public static function getInstance(): PDO
        {
            if (is_null(self::$connection)) {
                self::$connection = new PDO("mysql:host=" . self::HOST . "; dbname=" . self::DBNAME . ";charset=utf8mb4", self::USER, self::PWD);
            }
            return self::$connection;
        }
    }
