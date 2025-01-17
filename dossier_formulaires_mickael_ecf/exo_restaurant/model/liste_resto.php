<?php
class RestoRepository
{

    //attributs

    private PDO $connect;
    private string $nomTable;
    private array $tabChamp;

    //constructeur

    public function __construct(string $_nomTable, array $_tabChamp = [])
    {  // Un constructeur public qui initialise les attributs de la classe

        $this->connect = Dbconnect::getInstance();
        $this->nomTable = $_nomTable;
        $this->tabChamp = $_tabChamp;
    }

    //fonctions

    public function searchAll(): array
    {
        $rq = "select * from " . $this->nomTable;
        $res = $this->connect->query($rq, PDO::FETCH_ASSOC); // $this->connect : référence à une connexion à la base de données initialisée dans ta classe. query() : Cette méthode exécute une requête SQL. $rq : C'est ta requête SQL.PDO::FETCH_ASSOC : Cela indique que tu veux que les résultats soient retournés sous forme d'un tableau associatif.
        $tabData = $res->fetchAll();
        return $tabData;
    }

    public function chercherResteau($_id): array
    {
        $rq = "select * from " . $this->nomTable . " where soundex(id) = soundex(:idresto)";
        $res = $this->connect->prepare($rq);
        $res->bindParam(":idresto", $_id, PDO::PARAM_STR);
        $res->execute();
        if (($row = $res->fetch(PDO::FETCH_ASSOC)) == false) {
            $row = [];
            return $row;
        } else {
            return $row;
        }
    }

    public function searchOne($_nomResteau): array
    {
        $rq = "select * from " . $this->nomTable . " where soundex(nom) = soundex(:nomresto)";
        $res = $this->connect->prepare($rq);
        $res->bindParam(":nomresto", $_nomResteau, PDO::PARAM_STR);
        $res->execute();
        if (($row = $res->fetch(PDO::FETCH_ASSOC)) == false) {
            $row = [];
            return $row;
        } else {
            return $row;
        }
    }

    public function ajouterResteau(string $_nom, string $_adresse, float $_prix, string $_Commentaire, int $_Note, string $_visite): bool
    {
        $rq = "insert into " . $this->nomTable . " values (id, '" . $_nom . "','" . $_adresse . "',"
            . $_prix . ",'" . $_Commentaire . "'," . $_Note . ",'" . $_visite . "')";
        //echo $rq;                                                                                
        $numberLigne = $this->connect->exec($rq);
        if ($numberLigne === 1) {
            return true;
        }
        return false;
    }
    public function updateRestau(int $_id, string $_nom, string $_adresse, float $_prix, string $_Commentaire, int $_Note, string $_visite): bool
    {
        $rq = "update " . $this->nomTable . " set  nom='" . $_nom . "', adresse='" . $_adresse . "', prix=" . $_prix .
            ", commentaire='" . $_Commentaire . "', note=" . $_Note . ", visite='" . $_visite . "'  where id=" . $_id;

        $nbLigne = $this->connect->exec($rq);
        if ($nbLigne === 1) {
            return true;
        }
        return false;
    }

    public function deleteRestau(int $_id): bool
    {
        $rq = "delete from " . $this->nomTable . " where id=" . $_id;

        $nbLigne = $this->connect->exec($rq);
        if ($nbLigne === 1) {
            return true;
        }
        return false;
    }
}
