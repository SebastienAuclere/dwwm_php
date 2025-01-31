<?php 
/* /Dao/ScientistRepository.php */ 

// inclusion de la classe DbConnect qui sera utilisée dans la méthode signIn()
require_once 'Dbconnect.php';

class ScientistRepository 
{
    /**
     * Identifie un scientifique
     * @param string $email l'email renseigné dans le formulaire
     * @param string $password le mot de passe renseigné dans le formulaire
     * @return array le scientifique trouvé (ou un tableau vide si le scientist n'a pas été trouvé)
    */
    public static function signIn(string $email, string $password): array {
        // Récupérer la connexion à la base de données
        /** @var PDO $pdo */
        $pdo = Dbconnect::getInstance();
        // Cherche dans la base de données, l'email correspondant au mail_scientist fourni

        $sql = "SELECT `id_scientist`, `lastname_scientist`, `firstname_scientist`, `mail_scientist`, `pass_scientist`, `level_scientist` FROM scientists WHERE mail_scientist=:mail_scientist";

        /** @var PDOStatement $stmt */
        $stmt = $pdo->prepare($sql);

        // Si la requête a réussi
        if($stmt->execute([':mail_scientist' => $email])) {
            // récupérer les données du jeu de résultat
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // si $result est vide, le scientifique n'a pas été trouvé
            if(empty($result)) {
                return []; // on retourne un tableau vide
            }

            // A partir de ce point, on a la garantie que $result contient les données d'un scientifique

            // Si le mot de passe est correct, on retourne le tableau $result
            // sinon on retourne un tableau vide
            if(password_verify($password, $result['pass_scientist'])) {
                // mot de passe correct, on retourne le tableau contenant les données du scientifique
                return $result;
            } else { 
                // mot de passe incorrect, on retourne un tableau vide
                return [];
            }

        } else {
            throw new Exception("Erreur SQL");
        }

        return $result;


    }

    /**
     * Retourne tous les scientifiques trouvés en base de données
     * @return array Le tableau contenant les scientifiques trouvés en base de données
     */
    public static function searchAll(): array {
        $pdo = DbConnect::getInstance();

        $sql = "SELECT `id_scientist`, `lastname_scientist`, `firstname_scientist`, `mail_scientist`, `level_scientist` FROM scientists";

        $stmt = $pdo->query($sql);

        // Si la requête a échoué
        if($stmt === false) {
            throw new Exception("Erreur SQL !");
        }

        // Récupère le jeu de résultat de la requête
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Ajoute un nouvel scientifique dans la base de données
     * @param string $lastname le nom du scientifique
     * @param string $firstname le prenom du scientifique
     * @param string $email l'email' du scientifique
     * @param string $password2 le mot de passe du scientifique
     * @return bool TRUE si le scientifique a été ajouté | FALSE en cas d'échec
     */
    public static function addDscientist(string $lastname, string $firstname, string $email, string $password2, int $level): bool {
        $pdo = DbConnect::getInstance();

        // On vérifie que le nom d'un scientifique n'existe pas !
        $sqlVerifUser = "SELECT COUNT(*) as nb FROM scientists WHERE mail_scientist=:mail_scientist";

        $stmt = $pdo->prepare($sqlVerifUser);

        if($stmt->execute([':mail_scientist' => $email])) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result === false) {
                throw new Exception('Erreur SQL');
            }

            if($result['nb'] > 0) { // si le scientifique existe déjà
                throw new Exception("Le nom du scientifique existe déjà !");
            }

            $stmt->closeCursor(); // Fermer la requête préparée

            // Chiffrement du mot de passe
            $password2 = password_hash($password2, PASSWORD_BCRYPT);

            // Instruction SQL pour l'ajout du scientifique
            $sqlAjout = "INSERT INTO scientists (`lastname_scientist`, `firstname_scientist`, `mail_scientist`, `pass_scientist`, `level_scientist`) VALUES (:l, :f, :m, :p, :l)";

            $stmt = $pdo->prepare($sqlAjout);

            if($stmt->execute([':l' => $lastname, ':f' => $firstname, ':m' => $email, ':p' => $password2, ':l' => $level])) {
                $nbLignes =  $stmt->rowCount(); // récupération du nombre de lignes ajoutées dans la table

                if($nbLignes > 0) {
                    return true; // insertion réussie
                }
            }
        }

        return false; // insertion échouée
    } 
}