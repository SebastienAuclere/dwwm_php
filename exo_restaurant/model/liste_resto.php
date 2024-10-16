<?php
class RestoRepository
{

    //attributs

    private PDO $connect;        // Un attribut privé de type PDO qui représente la connexion à la base de données.
    private string $nomTable;    // Un attribut privé de type string qui stocke le nom de la table dans la base de données.
    private array $tabChamp;     // Un attribut privé de type array qui stocke les champs de la table.

    //constructeur

    public function __construct(string $_nomTable, array $_tabChamp = []) {  // Un constructeur public qui initialise les attributs de la classe
        
        $this->connect = Dbconnect::getInstance();  //  La connexion à la base de données est établie en utilisant la méthode getInstance de la classe Dbconnect
        $this->nomTable = $_nomTable;               //  Le nom de la table est passé en paramètre et assigné à l’attribut $nomTable
        $this->tabChamp = $_tabChamp;               //  Un tableau de champs est passé en paramètre et assigné à l’attribut $tabChamp. Ce paramètre est optionnel et par défaut, c’est un tableau vide.
    }

    //fonctions

    public function searchAll(): array // Cette fonction ne prend aucun paramètre et retourne un tableau contenant toutes les lignes de la table spécifiée
    {
        $rq = "select * from " . $this->nomTable;                                            // La requête SQL sélectionne toutes les colonnes de toutes les lignes de la table spécifiée par $this->nomTable.
        $res = $this->connect->query($rq, PDO::FETCH_ASSOC);                                 // La requête est exécutée et les résultats sont récupérés sous forme de tableau associatif (PDO::FETCH_ASSOC). 
        $tabData = $res->fetchAll();                                                         // Toutes les lignes de résultats sont récupérées et stockées dans le tableau $tabData.
        return $tabData;                                                                     // Le tableau contenant toutes les lignes de la table est retourné.
    }                                                                                        // En résumé, cette fonction récupère toutes les lignes de la table spécifiée et retourne les résultats sous forme de tableau associatif.

    public function chercherResteau($_id): array /// Cette fonction prend un identifiant ($_id) en paramètre et retourne un tableau contenant les informations d’un restaurant correspondant à cet identifiant.
    {                                             // La fonction est publique et retourne un tableau.
        $rq = "select * from " . $this->nomTable . " where soundex(id) = soundex(:idresto)";  // La requête SQL sélectionne toutes les colonnes de la table spécifiée par $this->nomTable où le soundex de l’identifiant de la table est égal au soundex de l’identifiant fourni (:idresto). Soundex est une fonction qui permet de comparer des chaînes de caractères en fonction de leur prononciation.
        $res = $this->connect->prepare($rq);                                                  // La requête SQL est préparée pour être exécutée.
        $res->bindParam(":idresto", $_id, PDO::PARAM_STR);                                    // Le paramètre :idresto est lié à la valeur de $_id en tant que chaîne de caractères.
        $res->execute();                                                                      // La requête est exécutée.
        if (($row = $res->fetch(PDO::FETCH_ASSOC)) == false) {                                // La fonction tente de récupérer une ligne de résultat sous forme de tableau associatif.
            $row = [];                                                                        // Si aucune ligne n’est trouvée (fetch retourne false), un tableau vide est retourné.
            return $row;                                                                      // Sinon, le tableau contenant les données de la ligne est retourné.
        } else {                                                                              // En résumé, cette fonction cherche un restaurant par son identifiant en utilisant une comparaison phonétique et retourne les informations du restaurant sous forme de tableau associatif, 
            return $row;                                                                      //  ou un tableau vide si aucun restaurant n’est trouvé.
        }
    }

    public function searchOne($_nomResteau): array /// Cette fonction prend un nom de restaurant ($_nomResteau) en paramètre et retourne un tableau contenant les informations d’un restaurant correspondant à ce nom 
    {                                               // La fonction est publique.
        $rq = "select * from " . $this->nomTable . " where soundex(nom) = soundex(:nomresto)";  // La requête SQL sélectionne toutes les colonnes de la table spécifiée par $this->nomTable où le soundex du nom de la table est égal au soundex du nom fourni (:nomresto). Soundex est une fonction qui permet de comparer des chaînes de caractères en fonction de leur prononciation.
        $res = $this->connect->prepare($rq);                                                    // La requête SQL est préparée pour être exécutée.
        $res->bindParam(":nomresto", $_nomResteau, PDO::PARAM_STR);                             // Le paramètre :nomresto est lié à la valeur de $_nomResteau en tant que chaîne de caractères. 
        $res->execute();                                                                        // La requête est exécutée.
        if (($row = $res->fetch(PDO::FETCH_ASSOC)) == false) {                                  // La fonction tente de récupérer une ligne de résultat sous forme de tableau associatif.
            $row = [];                                                                          // Si aucune ligne n’est trouvée (fetch retourne false), un tableau vide est retourné.
            return $row;                                                                        // Sinon, le tableau contenant les données de la ligne est retourné.
        } else {                                                                                // En résumé, cette fonction cherche un restaurant par son nom en utilisant une comparaison phonétique et retourne les informations du restaurant sous forme de tableau associatif, ou un tableau vide si aucun restaurant n’est trouvé.
            return $row;                                                                        // et retourne les informations du restaurant sous forme de tableau associatif, ou un tableau vide si aucun restaurant n’est trouvé.
        }
    }

    public function ajouterResteau(string $_nom, string $_adresse, float $_prix, string $_Commentaire, int $_Note, string $_visite): bool  // Cette fonction prend plusieurs paramètres relatifs à un restaurant et insère une nouvelle ligne dans la table correspondante
    {                                                                                                                                      //La fonction est publique et retourne un booléen (true ou false)  
        $rq = "insert into " . $this->nomTable . " values (id, '" . $_nom . "','" . $_adresse . "',"  // La requête SQL insère une nouvelle ligne dans la table spécifiée par $this->nomTable. Les valeurs des colonnes sont fournies par les paramètres de la fonction. 
              . $_prix . ",'" . $_Commentaire . "'," . $_Note . ",'" . $_visite . "')";               // Notez que id est supposé être une colonne auto-incrémentée ou gérée par la base de données.
        echo $rq;                                                                                     // La requête SQL est affichée.
        $numberLigne = $this->connect->exec($rq);                                                     // La requête est exécutée et le nombre de lignes affectées est stocké dans $numberLigne.
        if ($numberLigne == 1) {                                                                      // Si une ligne a été insérée ($numberLigne == 1), la fonction retourne true.
            return true;                                                                              // 
        }                                                                                             //
        return false;                                                                                 // Sinon, elle retourne false.
    }                                                                                                 // En résumé, cette fonction ajoute un nouveau restaurant dans la table et retourne true si l’insertion a réussi, ou false sinon.
}
