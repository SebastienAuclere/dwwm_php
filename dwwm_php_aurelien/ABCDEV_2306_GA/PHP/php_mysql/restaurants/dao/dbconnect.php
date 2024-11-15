<?php

class Dbconnect
{
    private string $db_host;
    private string $db_basename;
    private string $db_username;
    private string $db_password;

    public function __construct($_db_host, $_db_basename, $_db_username, $_db_password)
    {
        $this->db_host = $_db_host;
        $this->db_basename = $_db_basename;
        $this->db_username = $_db_username;
        $this->db_password = $_db_password;
    }

    public function tryConnect():?PDO
    {
        try {
            $myConnection = new PDO("mysql:host=" . $this->db_host . ";port=3306;dbname=" . $this->db_basename . ";charset=utf8", $this->db_username, $this->db_password, [PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC]);
            $myConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $myConnection;
        } catch (PDOException $e) {
            echo "Echec de la connexion :".$e->getMessage();
            return null;
        }
    }

    public function setDb_basename(string $basename) {
        $this->db_basename = $basename;
    }
}
