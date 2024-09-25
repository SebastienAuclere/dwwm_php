<?php
class Dbconnect
{

    //attributs

    private string $servername;
    private string $username;
    private string $password;
    private string $dbname;

    //constructeur

    public function __construct(string $_servername, string $_username, string $_password, string $_dbname)
    {
        $this->servername = $_servername;
        $this->username = $_username;
        $this->password = $_password;
        $this->dbname = $_dbname;
    }

    //fonctions

    function tryConnect(): ?PDO
    {
        try
        {
            $connection = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=utf8", $this->username, $this->password);            
            return $connection;
        } 
        catch (PDOException $e) 
        {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
