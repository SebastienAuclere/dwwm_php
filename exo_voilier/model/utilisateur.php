<?php

class Utilisateur
{
    private PDO $connect;

    public function __construct()
    {
        $this->connect = Dbconnect::getInstance();
    }

    public function signIn(string $mail, string $password): bool
    {
        $rq = 'SELECT * FROM utilisateurs WHERE mail_user =:email';

        $PDOstatement = $this->connect->prepare($rq);
        $PDOstatement->bindParam(':email', $mail, PDO::PARAM_STR);
        $PDOstatement->execute();

        $nbLigne = $PDOstatement->rowCount();

        if ($nbLigne == 1) {

            $table = $PDOstatement->fetch();

            $testMdp = password_verify($password, $table['pass_user']);
            if ($testMdp === true) {
                //echo "ligne trouve";
                echo "Bonjour Me ou M " . $table['lastname_user'] . " vous êtes bien connecté.";
                return true;
            } else {
                echo "Erreur sur le mot de Passe";
                return false;
            }
        } else {
            echo "Erreur identifiant faux";
            return false;
        }
    }
}
