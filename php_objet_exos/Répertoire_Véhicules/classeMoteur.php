<?php

require_once "classeVoiture.php";

class Moteur
{
    // Attributs

    protected string $marqueMoteur;
    protected int $vitesseMaxMoteur;

    // Constructeur

    public function _construct(string $marqueMoteur, int $vitesseMaxMoteur)
    {
        $this->marqueMoteur = $marqueMoteur;
        $this->vitesseMaxMoteur = $vitesseMaxMoteur;
    }
    

    // Public getters

    public function getMarqueMoteur(): string
    {
        return $this->marqueMoteur;
    }

    public function getVitesseMaxMoteur(): int
    {
        return $this->vitesseMaxMoteur;
    }   

    // Public setters

    public function setMarqueMoteur($marqueMoteur): void
    {
        $this->marqueMoteur = $marqueMoteur;
    }

    public function setVitesseMaxMoteur($vitesseMaxMoteur): void
    {
        $this->vitesseMaxMoteur = $vitesseMaxMoteur;
    }       
}
