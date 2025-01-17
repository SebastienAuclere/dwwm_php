<?php
/* /Dao/FormRepository.php */ 

// inclusion de la classe DbConnect qui sera utilisée dans la méthode insertData()
require_once 'Dbconnect.php';

class FormRepository 
{
    /**
     * Ajoute une nouvelle ligne dans la table 'formulairedecontact' 
     * @param string $nom le nom renseigné dans le formulaire
     * @param string $date_naissance la date de naissance renseigné dans le formulaire
     * @param string $email renseigné dans le formulaire
     * @param string $message renseigné dans le formulaire
     * @return bool TRUE si l'ajout a réussi, sinon FALSE
    */
    public static function insertData(string $nom, string $date_naissance, string $email, string $message): bool {

        /** @var PDO $db connexion à la base de données */
        $db = Dbconnect::getInstance();

        /** @var $nblines stockera le nombre de lignes affectées par la requête */
        $nblines = 0;

        /** @var PDOStatement $stmt initialisation de la requête préparée */
        $stmt = $db->prepare("INSERT INTO formulairedecontact
         (nom, date_naissance, email, message) VALUES (:nom, :date_naissance, :email, :message)");

        // exécution de la requêtes préparée
        // execute() retourne true si la requête a été exécutée avec succés, sinon false
        if($stmt->execute([':nom' => $nom, ':date_naissance' => $date_naissance, ':email' => $email, ':message' => $message])) {
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