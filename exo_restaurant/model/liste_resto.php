<?php
class RestoRepository
{

    //attributs

    private PDO $connect;
    private string $nomTable;
    private array $tabChamp;

    //constructeur

    public function __construct(
        PDO $_connect,
        string $_nomTable,
        array $_tabChamp = []
    ) {
        $this->connect = $_connect;
        $this->nomTable = $_nomTable;
        $this->tabChamp = $_tabChamp;
    }

    //fonctions

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

    public function searchAll(): array
    {
        $rq = "select * from " . $this->nomTable;
        $res = $this->connect->query($rq, PDO::FETCH_ASSOC);
        $tabData = $res->fetchAll();
        return $tabData;
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
        $rq = "insert into " . $this->nomTable . " values (id, '" . $_nom . "','" . $_adresse . "'," . $_prix . ",'" . $_Commentaire . "'," . $_Note . ",'" . $_visite . "')";
        echo $rq;
        $numberLigne = $this->connect->exec($rq);
        if ($numberLigne == 1) {
            return true;
        }

        return false;
    }
}
