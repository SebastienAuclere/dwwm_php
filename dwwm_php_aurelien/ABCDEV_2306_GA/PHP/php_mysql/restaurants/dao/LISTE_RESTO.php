<?php
    require_once ('dbconnect.php');
class Liste_resto {

    private PDO $connexion;
    private string $table;
    private array $tabColumn;
    private array $tabId;

    public function __construct(PDO $_connexion,string $_table, array $_tabColumn = [], array $_tabId = [])
    {
        $this->connexion = $_connexion;
        $this->table = $_table;
        $this->tabColumn = $_tabColumn;
        $this->tabId = $_tabId;
    }

    public function affichageAll() : array {
        $sqlQuery = 'SELECT id, nom, adresse, prix, commentaire, note, visite FROM '. $this->table;
        $listeStatement = $this->connexion->prepare($sqlQuery);
        $listeStatement->execute();
        $liste = $listeStatement->fetchAll();

        return $liste;
    }

    public function chercherResto(int $id) : array {
        $sqlQuery2 = 'SELECT id, nom, adresse, prix, commentaire, note, visite FROM '. $this->table . ' WHERE id = :id';
        $pdoStatement = $this->connexion->prepare($sqlQuery2);
        $pdoStatement->bindParam(':id', $id, PDO::PARAM_INT);
        $pdoStatement->execute();
       
        
        while($row = $pdoStatement->fetch() ) {
            array_push($this->tabId,$row);
        }


        return $this->tabId;
    }


    private function info_table() : array {

        $sqlQuery3 = 'SELECT * FROM '.$this->table;
        $state = $this->connexion->query($sqlQuery3);
        $nbColumn = $state->columnCount();

        for ($i=0; $i < $nbColumn; $i++) { 
            $tabMeta = $state->getColumnMeta($i);
            $nomColumn = $tabMeta["name"];
            array_push($this->tabColumn,$nomColumn);
        }

        return $this->tabColumn;
    }

    public function rendre_HTML() : string {
        $chaineTab = '<table><thead><tr><th>modification</th><th>suppression</th>';
        $tabTitre = $this->info_table();


        for ($i=0; $i < count($tabTitre); $i++) { 
            $chaineTab .= '<th>' . $tabTitre[$i] . '</th>';
        }

        $chaineTab .= '</tr></thead>';
        $chaineTab .= '<tbody>';
        
        $tabContenu = $this->affichageAll();

        for ($i=0; $i < count($tabContenu); $i++) { 
            $chaineTab .= '<tr>';
            $chaineTab .= '<td><a href=detail.php?id='.$tabContenu[$i]['id'].'>modifier</a></td>' ;
            $chaineTab .= '<td><form action="index.php" method="GET"><input type="hidden" value="'.$tabContenu[$i]['id'].'"  name="id"  /><input type="submit" name="supprimer" value="supprimer"/></form></td>';

            foreach($tabContenu[$i] as $key=>$value) {
                $chaineTab .= '<td>' . $value . '</td>';
            }

            $chaineTab .= '</tr>';
        }

        $chaineTab .= '</tbody></table>';

        return $chaineTab;
    }

    public function creerLigne(string $_nom, string $_adresse, float $_prix, string $_commentaire, float $_note, string $_visite) {
        $sqlQuery5 = 'INSERT INTO ' . $this->table . ' VALUES (id, ?, ?, ?, ?, ?, ?)';
        $nom = $this->nettoyerChaine($_nom);
        $adresse = $this->nettoyerChaine($_adresse);
        $commentaire = $this->nettoyerChaine($_commentaire);
        $prix = floatval($_prix);
        $note = floatval($_note);

        $bool=false;

        try {
            $maDate = new DateTime($_visite);
        } catch (DateInvalidTimeZoneException $e) {
            echo $e->getMessage();
            return $bool;
        }

        $pdoStatement = $this->connexion->prepare($sqlQuery5);
        $pdoStatement->execute([$nom, $adresse, $prix, $commentaire, $note, $_visite]);
        
        $nbLignes = $pdoStatement->rowCount();

        if($nbLignes === 1) {
            $bool=true;
        }
        return $bool;
    }

    public function supprimerLigne(int $_id) : int {
        $sqlQuery4 = 'DELETE FROM ' . $this->table . ' WHERE id = :id'; /*:id = veut dire que l'on remplace par la variable $_id) */
        $pdoStatement = $this->connexion->prepare($sqlQuery4);
        $pdoStatement->bindParam(':id', $_id, PDO::PARAM_INT); /* liaison avec paramètres et le marqueur */
        $pdoStatement->execute();
        $nbLignes = $pdoStatement->rowCount();

        return $nbLignes;
    }

    private function nettoyerChaine($_maChaine) : string {
        $chaine = trim($_maChaine); /* commence et termine par un caractère */
        $chaine = addslashes($chaine); /* enlève l'antislashes devant les caractères spéciaux */
        $chaine = htmlspecialchars($chaine); /* chevrons ouvrant ou fermant transformés en affichage seulement */

        return $chaine;
    }

    private function verifNombre($_maChaine) : int {
        $subject = $_maChaine;
        $pattern = '/^[0-9]+$/'; /* ^ prend le début de la chaine, le $ la fin de la chaine et + veut dire au moins 1 chiffre */
        $res = preg_match($subject,$pattern);

        return $res;
    }

    public function modifierLigne(string $_nom, string $_adresse, float $_prix, string $_commentaire, float $_note, string $_visite, int $_id) : bool {
        $sqlQuery5 = 'UPDATE ' . $this->table . ' SET nom = ?, adresse = ?, prix = ?, commentaire = ?, note = ?, visite = ? WHERE id = ?';
        $pdoStatement = $this->connexion->prepare($sqlQuery5);


        if(filter_var($_prix, FILTER_VALIDATE_FLOAT) !== false) {
            $prix = filter_var($_prix, FILTER_VALIDATE_FLOAT);
        }

        $nom = $this->nettoyerChaine($_nom);
        $adresse = $this->nettoyerChaine($_adresse);
        $commentaire = $this->nettoyerChaine($_commentaire);
        $visite = $this->nettoyerChaine($_visite);


        // if($this->verifNombre($_prix) == 1 && $this->verifNombre($_note) == 1) {
            $pdoStatement->execute(array($nom, $adresse, $prix, $commentaire, $_note, $visite, $_id));
            $nbLignes = $pdoStatement->rowCount();
        // }  

        /* echo $nbLignes; */

        $bool=false;
        
        if($nbLignes === 1) {
            $bool=true;
        }
        return $bool;
    }
}