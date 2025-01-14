<?php
require_once('dbconnect.php');
class DepartRepository
{

    private PDO $connexion;
    private string $table;
    private array $tabColumn;
    private array $tabId;

    public function __construct(array $_tabColumn = [], array $_tabId = [])
    {
        $this->connexion = Dbconnect::getInstance();
        $this->table = "departements";
        $this->tabColumn = $_tabColumn;
        $this->tabId = $_tabId;
    }

    public function searchAll(): array
    {
        $sqlQuery = 'SELECT id_dep, Name, dep_actif, dep_taux FROM ' . $this->table;
        $listeStatement = $this->connexion->prepare($sqlQuery);
        $listeStatement->execute();
        $liste = $listeStatement->fetchAll();

        return $liste;
    }
}