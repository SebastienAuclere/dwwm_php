<?php

require_once "classeMoteur.php";

class Voiture
{
    // Attributs

    protected string $marque;
    protected string $modele;    
    protected int $poids = 1000;
    protected Moteur $moteur;

    // Constructeur

    public function __construct(string $marque, string $modele, int $poids, string $marqueMoteur, int $vitesseMaxMoteur)
    {
        if (mb_strlen($marque) > 2)
        {
            $this->marque = $marque;
        }
        else
        {
            throw new Exception('Erreur, la marque indiquée possède moins de deux caractères');
        }

        if (mb_strlen($modele) > 1)
        {
            $this->modele = $modele;
        }
        else
        {
            throw new Exception('Erreur, il n y a pas de modèle indiqué');
        }

        if ($poids > 0)
        {
            $this->poids = $poids;
        }
        else
        {
            throw new Exception('Le poids ne peut pas être inférieur ou égal à zéro');
        }

        $this->moteur = new Moteur($marqueMoteur, $vitesseMaxMoteur);
    }

    
    // Public getters
    
    public function getMarque(): string
    {
        return $this->marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function getPoids(): int
    {
        return $this->poids;
    }

    // Public setters

    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    public function setModele($modele): void
    {
        $this->modele = $modele;
    }

    public function setPoids($poids): void
    {
        $this->poids = $poids;
    }  
    
    // Fonction ensembleInformations
    
    public function _toString(): string
    {
        return "{$this->getMarque()} {$this->getModele()}, {$this->getPoids()} kg, {$this->moteur->getMarqueMoteur()}, {$this->vitesseMaxVoiture()} km/h";
    }

    // Fonction vitesseMaxVoiture

    public function vitesseMaxVoiture(): float
    {
        $vitesseMaxVoiture = ($this->moteur->getVitesseMaxMoteur() - ($this->poids * 0.3));
        return $vitesseMaxVoiture;
    }
}

try
{
    $myVoiture = new Voiture('Skoda', 'Fabia', 1147, 'Vols', 195);
    echo $myVoiture;
}

catch (Exception $e) 
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

echo PHP_EOL;