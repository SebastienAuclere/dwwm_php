<?php
class Dbconnect
{

    //attributs

    private int $servername;
    private float $username;
    private int $password;    

    //constructeur

    public function __construct(int $_servername, float $_username, int $_password)
    {
        $this->servername = $_servername;
        $this->username = $_username;
        $this->password = $_password;
    }

    //fonctions

    function affichage(){        

        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=myDB", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
    
}    