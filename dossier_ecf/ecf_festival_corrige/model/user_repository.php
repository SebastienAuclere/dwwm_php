<?php
class CrudUtilisateur
{

    //attributs

    private PDO $connect;
    private string $nomTable;
    private array $tabChamp;

    //constructeur

    public function __construct(string $_nomTable, array $_tabChamp = [])
    {  
    // Un constructeur public qui initialise les attributs de la classe
        $this->connect = Dbconnect::getInstance();
        $this->nomTable = $_nomTable;
        $this->tabChamp = $_tabChamp;
    }

    //fonctions

    public function afficherTable(): array
    {
        $requeteSql = "select * from " . $this->nomTable;
        $resultat = $this->connect->query($requeteSql, PDO::FETCH_ASSOC);
        $table_candidats = $resultat->fetchAll();
        return $table_candidats;
    }
    // $this->nomTable : référence a la table users.
    // $this->connect : référence à une connexion à la base de données initialisée dans ta classe.
    // query() : Cette méthode exécute une requête SQL. 
    // $requeteSql : C'est ta requête SQL.
    // PDO::FETCH_ASSOC : Cela indique que tu veux que les résultats soient
    // retournés sous forme d'un tableau associatif.

    public function afficherLigneEmail($_email): array
    {
        $requeteSql = "select * from" . $this->nomTable . " where mail_user = :mail_User";
        $resultat = $this->connect->prepare($requeteSql);
        $resultat->bindParam(":mail_User", $_email, PDO::PARAM_INT);
        $resultat->execute();
        if(($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) == false)
        {
            $ligne = [];
            return $ligne;
        }
        else
        {
            return $ligne;
        }
    }    
    // Cette ligne prépare une requête SQL en utilisant la méthode prepare() de l'objet PDO.
    // La requête SQL est stockée dans la variable $requeteSql.
    // Utiliser prepare() permet de protéger contre les injections SQL, 
    // ce qui est essentiel pour la sécurité des applications web. 
    // Cette ligne lie le paramètre :idUser dans la requête SQL à la variable $_id.
    // Le troisième argument,PDO::PARAM_INT, spécifie que le paramètre doit être traité comme un integer.
    // Utiliser bindParam() permet de lier les valeurs des variables PHP aux paramètres dans la requête SQL de manière sécurisée. 
    // Cette ligne exécute la requête préparée avec les paramètres liés. Elle envoie la requête à la base de données pour être exécutée.  
    
    public function ajouterUtilisateur(string $_nom, string $_prenom, string $_email, string $_password):bool
    {
        $nom = htmlspecialchars($_nom);
        $prenom = htmlspecialchars($_prenom);
        $email = htmlspecialchars($_email);
        $password = password_hash($_password,PASSWORD_DEFAULT);

        $requeteSql = "insert into " . $this->nomTable . " values (id, :nom, :prenom, :email, :password)";

        $PDOstatement = $this->connect->prepare($requeteSql);
        $PDOstatement->bindParam(":nom", $nom, PDO::PARAM_STR);        
        $PDOstatement->bindParam(":prenom", $prenom, PDO::PARAM_STR);        
        $PDOstatement->bindParam(":email", $email, PDO::PARAM_STR);        
        $PDOstatement->bindParam(":password", $password, PDO::PARAM_STR);
        $test = $PDOstatement->execute();

        return $test;
    }
    // Ces lignes utilisent htmlspecialchars() pour s'assurer que les entrées utilisateur sont sécurisées
    // contre les attaques XSS en convertissant les caractères spéciaux en entités HTML.
    // Cette ligne crée un hachage sécurisé du mot de passe en utilisant l'algorithme par défaut (PASSWORD_DEFAULT),
    // qui est actuellement bcrypt. Cela garantit que le mot de passe est stocké de manière sécurisée.
    // La requête SQL INSERT est construite pour ajouter une nouvelle entrée dans la table spécifiée par $this->nomTable.
    // Les valeurs sont les informations utilisateur fournies, plus un ID généré automatiquement.
    // $PDOstatement est prepare, lié et executé avec le meme principe que dans la fonction afficher ligne au dessus.

    public function modifierUtilisateur(int $_id, string $_nom, string $_prenom, string $_email, string $_password): bool
    {
        $nom = htmlspecialchars($_nom);
        $prenom = htmlspecialchars($_prenom);
        $email = htmlspecialchars($_email);
        $pass = password_hash($_password,PASSWORD_DEFAULT);

        $requeteSql = "update " . $this->nomTable . " set nom='?', prenom='?', email='?', password='?' where id=?";

        $PDOstatement= $this->connect->prepare($requeteSql);
        $test=  $PDOstatement->execute([$nom,$prenom, $email,$pass,$_id]);

        return $test;
    }
    //Cette fonction a juste la requete sql qui change pour modifier l'utilisateur donc se referer a la fonction ajouterUtilisateur.

    public function supprimerUtilisateur(int $_id): bool
    {
        $requeteSql = "delete from " . $this->nomTable . " where id=" . $_id;

        $nombreDeLigne = $this->connect->exec($requeteSql);
        if ($nombreDeLigne === 1) {
            return true;
        }
        return false;
    }
    // Cette fonction supprime l'utilisateur.
}
?>