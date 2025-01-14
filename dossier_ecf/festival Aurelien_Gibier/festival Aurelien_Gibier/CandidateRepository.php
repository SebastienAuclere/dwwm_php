<?php
    require_once ('dbconnect.php');
class CandidateRepository {

    private PDO $connexion;
    private string $table;
    private array $tabColumn;
    private array $tabId;

    public function __construct(array $_tabColumn = [], array $_tabId = [])
    {
        $this->connexion = Dbconnect::getInstance();
        $this->table = "candidats";
        $this->tabColumn = $_tabColumn;
        $this->tabId = $_tabId;
    }

    public function searchAll() : array {
        $sqlQuery = 'SELECT id_user, lastname_user, firstname_user, mail_user, departement_user, age_user FROM '. $this->table;
        $listeStatement = $this->connexion->prepare($sqlQuery);
        $listeStatement->execute();
        $liste = $listeStatement->fetchAll();

        return $liste;
    }

    public function searchbyAge(int $age_user) : array {
        $sqlQuery2 = 'SELECT id_user, lastname_user, firstname_user, mail_user, departement_user, age_user FROM '. $this->table . ' WHERE age_user = :age_user';
        $pdoStatement = $this->connexion->prepare($sqlQuery2);
        $pdoStatement->bindParam(':age_user', $age_user, PDO::PARAM_INT);
        $pdoStatement->execute();
       
        
        while($row = $pdoStatement->fetch()) {
            array_push($this->tabId,$row);
        }

        return $this->tabId;
    }

    public function createCandidate(string $_lastname_user, string $_firstname_user, string $_mail_user, string $_pass_user, string $_departement_user, float $_age_user) {
        $sqlQuery3 = 'INSERT INTO ' . $this->table . ' VALUES (id_user, ?, ?, ?, ?, ?, ?)';

        $lastname = $this->nettoyerChaine($_lastname_user);
        $firstname = $this->nettoyerChaine($_firstname_user);
        $mail = $this->nettoyerChaine($_mail_user);
        $pass = $this->nettoyerChaine($_pass_user);
        $departement = floatval($_departement_user);
        $age = floatval($_age_user);

        $bool=false;

        $pdoStatement = $this->connexion->prepare($sqlQuery3);
        $pdoStatement->execute([$lastname, $firstname, $mail, $pass, $departement, $age]);
        
        $nbLignes = $pdoStatement->rowCount();

        if($nbLignes === 1) {
            $bool=true;
        }
        return $bool;
    }

    private function nettoyerChaine($_maChaine) : string {
        $chaine = trim($_maChaine);
        $chaine = htmlspecialchars($chaine);

        return $chaine;
    }

    public function authenticate($mail_user, $pass_user) : array
    {
        $pdoStatement = $this->connexion->prepare("SELECT * FROM candidats WHERE mail_user = :mail_user");
        $pdoStatement->bindParam(':mail_user', $mail_user, PDO::PARAM_STR); // Exemple de hachage de mot de passe
        $pdoStatement->execute();
        
        $nbLignes = $pdoStatement->rowCount();

        if($nbLignes === 1) {
            $row = $pdoStatement->fetch(PDO::FETCH_ASSOC);
            if(password_verify($pass_user, $row["pass_user"]) === true) {
                return $row;
            }
            return [];
        }
        return [];
    }

    public function deconnexion($logout) : void {
        if($logout === 1) {
            session_destroy();
            header("Location: ./index.php");
        }
    }
}