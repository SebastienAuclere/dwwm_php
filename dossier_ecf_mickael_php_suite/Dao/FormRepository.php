<?php
/* /Dao/FormRepository.php */ 

// inclusion de la classe DbConnect qui sera utilisée dans la méthode insertData()
require_once 'Dbconnect.php';

class FormRepository 
{
    /**
     * Ajoute une nouvelle ligne dans la table 'tbl_formulaire'
     * @param string $nom le nom renseigné dans le formulaire
     * @param int $age l'âge renseigné dans le formulaire
     * @return bool TRUE si l'ajout a réussi, sinon FALSE
    */
    public static function insertData(string $nom, int $age): bool {

        /** @var PDO $db connexion à la base de données */
        $db = Dbconnect::getInstance();

        /** @var $nblines stockera le nombre de lignes affectées par la requête */
        $nblines = 0;

        /** @var PDOStatement $stmt initialisation de la requête préparée */
        $stmt = $db->prepare("INSERT INTO tbl_formulaire (nom, age) VALUES (:nom, :age)");

        // exécution de la requêtes préparée
        // execute() retourne true si la requête a été exécutée avec succés, sinon false
        if($stmt->execute([':nom' => $nom, ':age' => $age])) {
            // récupération du nombre de lignes affectées par la requête
            $nblines = $stmt->rowCount();
        }

        // fermeture de la requête (pour libérer les ressources)
        $stmt->closeCursor();

        // Retourne le résultat. 
        // Si le nombre de lignes affectées est égal à 1, les données ont bien été insérées
        return $nblines == 1;
    }
}