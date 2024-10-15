<?php
class RestoRepository
{

    //attributs

    private PDO $connect;        //
    private string $nomTable;    //
    private array $tabChamp;     //

    //constructeur

    public function __construct(string $_nomTable, array $_tabChamp = []) {  //
       
        $this->connect = Dbconnect::getInstance();  //
        $this->nomTable = $_nomTable;               //
        $this->tabChamp = $_tabChamp;               //
    }

    //fonctions

    public function chercherResteau($_id): array /// chercher le restaurant par l'id 
    {
        $rq = "select * from " . $this->nomTable . " where soundex(id) = soundex(:idresto)";  //
        $res = $this->connect->prepare($rq);                                                  //
        $res->bindParam(":idresto", $_id, PDO::PARAM_STR);                                    // 
        $res->execute();                                                                      //
        if (($row = $res->fetch(PDO::FETCH_ASSOC)) == false) {                                //
            $row = [];                                                                        //
            return $row;                                                                      //
        } else {                                                                              //
            return $row;                                                                      //
        }
    }

    public function searchOne($_nomResteau): array /// chercher le restaurant par le nom du resteau 
    {
        $rq = "select * from " . $this->nomTable . " where soundex(nom) = soundex(:nomresto)";  //
        $res = $this->connect->prepare($rq);                                                    //
        $res->bindParam(":nomresto", $_nomResteau, PDO::PARAM_STR);                             //  
        $res->execute();                                                                        //
        if (($row = $res->fetch(PDO::FETCH_ASSOC)) == false) {                                  //
            $row = [];                                                                          //
            return $row;                                                                        //
        } else {                                                                                // 
            return $row;                                                                        //
        }
    }

    public function searchAll(): array /// donne tout le tableau
    {
        $rq = "select * from " . $this->nomTable;                                               //
        $res = $this->connect->query($rq, PDO::FETCH_ASSOC);                                    //  
        $tabData = $res->fetchAll();                                                            //
        return $tabData;                                                                        // 
    }    

    public function ajouterResteau(string $_nom, string $_adresse, float $_prix, string $_Commentaire, int $_Note, string $_visite): bool  /// ajoute un resteau
    {
        $rq = "insert into " . $this->nomTable . " values (id, '" . $_nom . "','" . $_adresse . "',"  //
              . $_prix . ",'" . $_Commentaire . "'," . $_Note . ",'" . $_visite . "')";               //
        echo $rq;                                                                                     //
        $numberLigne = $this->connect->exec($rq);                                                     //
        if ($numberLigne == 1) {                                                                      //
            return true;                                                                              // 
        }                                                                                             //
        return false;                                                                                 //
    }
}
