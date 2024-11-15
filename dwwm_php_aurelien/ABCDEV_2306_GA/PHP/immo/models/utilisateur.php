<?php

class Utilisateurs
{
    private PDO $connexion;

    public function __construct()
    {
        $this->connexion = Dbconnect::getInstance();
    }
    
    public function authenticate($mail_utilisateur, $pass_utilisateur) : array
    {
        $pdoStatement = $this->connexion->prepare("SELECT * FROM utilisateurs WHERE mail_utilisateur = :mail_utilisateur");
        $pdoStatement->bindParam(':mail_utilisateur', $mail_utilisateur, PDO::PARAM_STR); // Exemple de hachage de mot de passe
        $pdoStatement->execute();
        
        $nbLignes = $pdoStatement->rowCount();

        if($nbLignes === 1) {
           $row = $pdoStatement->fetch(PDO::FETCH_ASSOC);
            if(password_verify($pass_utilisateur, $row["pass_utilisateur"]) === true) {
                return $row;
            }
            return [];
        }
        return [];
    }
}
