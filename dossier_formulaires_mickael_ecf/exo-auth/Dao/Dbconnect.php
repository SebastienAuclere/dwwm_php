<?php 
/* /Dao/DbConnect.php */ 
/**
 * Classe de connexion à la base de données  
*/
class DbConnect 
{
    /** @var PDO|null $instance stockage de l'instance PDO unique */
    private static ?PDO $instance = null;

    /**
     * Crée et retourne l'instance PDO 
     * @return PDO l'instance PDO créée
    */
    public static function getInstance(): PDO {
        if(self::$instance === null) {
            self::$instance = new PDO('mysql:host=mysql-ergatesfaber.alwaysdata.net;port=3306;dbname=ergatesfaber_users;charset=utf8', '397666', 'brigitte2145*');
        }

        return self::$instance;
    }
}