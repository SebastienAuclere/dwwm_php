 <?php
    class Dbconnect
    {

        //attributs

        private static ?PDO $connection = null;  // attr. prive static type pdo initialise null represente la connexion a la base de donnee
        private const HOST = "localhost";        // constante privee stocke l'hote de la base de donnee ici "localhost"
        private const DBNAME = "user_base1";          // constante privée qui stocke le nom de la base de données, ici “guide"
        private const USER = "root";             // constante privée qui stocke le nom d’utilisateur pour la connexion à la base de données, ici “root”
        private const PWD = "";                  // constante privée qui stocke le mot de passe pour la connexion à la base de données, ici une chaîne vide

        //constructeur

        private function __construct() {}        // __construct : Un constructeur privé pour empêcher l’instanciation directe de la classe. 
                                                 // Cela garantit que la classe ne peut être instanciée qu’à travers la méthode getInstance. 
        //fonctions

        // getInstance : Une méthode publique et statique qui retourne une instance de PDO

        public static function getInstance(): PDO  
        {
            if (is_null(self::$connection))  // Si l’attribut $connection est null, (is_null — Indique si une variable vaut null) self:: c'est comme $this-> pour recuperer un attribut d'une classe static 
            {     
                self::$connection = new PDO("mysql:host="    // il crée une nouvelle instance de PDO 
                . self::HOST . "; dbname=" . self::DBNAME .  // avec les paramètres de connexion définis
                ";charset=utf8mb4", self::USER, self::PWD);  // par les constantes HOST, DBNAME, USER, et PWD
            }                                                // La connexion utilise le charset utf8mb4 pour assurer 
                                                             // une bonne gestion des caractères spéciaux.
            return self::$connection;                                                
        }
    }

    // resume : Cette classe utilise le pattern Singleton pour s’assurer qu’il n’y a qu’une seule connexion
    // à la base de données à tout moment. 
    // Cela permet d’optimiser les ressources et de gérer efficacement la connexion à la base de données.
?>    