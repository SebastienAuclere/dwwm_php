<?php
class CandidateRepository
{

    //attributs

    private PDO $connect;
    private string $nomTable;
    

    //constructeur

    public function __construct(string $_nomTable)
    {  // Un constructeur public qui initialise les attributs de la classe

        $this->connect = Dbconnect::getInstance();
        $this->nomTable = $_nomTable;
        
    }

    //fonctions

    public function searchAll(): array
    {
        $rq = "select * from " . $this->nomTable;
        $res = $this->connect->query($rq, PDO::FETCH_ASSOC); // $this->connect : référence à une connexion à la base de données initialisée dans ta classe. query() : Cette méthode exécute une requête SQL. $rq : C'est ta requête SQL.PDO::FETCH_ASSOC : Cela indique que tu veux que les résultats soient retournés sous forme d'un tableau associatif.
        $tabData = $res->fetchAll();
        return $tabData;
    }

    public function createCandidate(string $_lastname_user, string $_firstname_user, string $_email, string $_pass_user, int $_departement_user, int $_age_user): bool
    {
        $rq = "insert into " . $this->nomTable . " values (id, '" . $_lastname_user . "','" . $_firstname_user . "',"
        . $_email . ",'" . password_hash($_pass_user, PASSWORD_ARGON2I) . "'," . $_departement_user . ",'" . $_age_user . "')";
                                                                                        
        $numberLigne = $this->connect->exec($rq);
        if ($numberLigne === 1) {
            return true;
        }
        return false;
    }

    public function searchbyAge($_age_user): array
    {
        $rq = "select * from " . $this->nomTable . " where soundex(age_user) = soundex(:age_user)";
        $res = $this->connect->prepare($rq);
        $res->bindParam(":age_user", $_age_user, PDO::PARAM_STR);
        $res->execute();
        if (($row = $res->fetch(PDO::FETCH_ASSOC)) == false) {
            $row = [];
            return $row;
        } else {
            return $row;
        }
    }
}    