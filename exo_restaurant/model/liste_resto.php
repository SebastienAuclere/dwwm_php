<?php
class RestoRepository
{

    //attributs

    private PDO $connect;
    private string $nomTable;
    private array $tabChamp;

    //constructeur

    public function __construct(PDO $_connect, string $_nomTable, array $_tabChamp = [])
    {
        $this->connect = $_connect;
        $this->nomTable = $_nomTable;
        $this->tabChamp = $_tabChamp;        
    } 
    
    //function
    
    public function searchAll():array
    {
        $rq = "select * from " . $this->nomTable;
        $res = $this->connect->query($rq);
        $tabData = $res->fetchAll();
        return $tabData; 
    }
}    