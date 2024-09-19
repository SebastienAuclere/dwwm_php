<?php
class Pret
{

    //attributs

    private int $capitalEmprunte;
    private float $tauxInteretAnnuel;
    private int $dureeRembNbAnnee;

    //constante statique ( même valeur pour tous les objets )
    
    //pas de constantes dans cette classe
    
    //propriétés ( accesseur / modifieur)

    public function getCapitalEmprunte(): int
    {
        return $this->capitalEmprunte;
    }

    public function setcapitalEmprunte(int $new_capital_emprunte): void
    {
        $this->capitalEmprunte = $new_capital_emprunte;
    }

    public function getTauxInteretAnnuel(): float
    {
        return $this->tauxInteretAnnuel;
    }

    public function setTauxInteretAnnuel(int $new_tauxInteretAnnuel): void
    {
        $this->tauxInteretAnnuel = $new_tauxInteretAnnuel;
    }

    public function getDureeRembNbAnnee(): int
    {
        return $this->dureeRembNbAnnee;
    }

    public function setDureeRembNbAnnee(int $new_dureeRembNbAnnee): void
    {
        $this->dureeRembNbAnnee = $new_dureeRembNbAnnee;
    }

    //constructeur

    public function __construct(int $_capitalEmprunte, float $_tauxInteretAnnuel, int $_dureeRembNbAnnee)
    {
        $this->capitalEmprunte = $_capitalEmprunte;
        $this->tauxInteretAnnuel = $_tauxInteretAnnuel;
        $this->dureeRembNbAnnee = $_dureeRembNbAnnee;
    }

    //methode  ( fonctions ou procédures )

    public function tauxMensuelInteret(): float
    {
        $tauxMensuelInteret = $this->tauxInteretAnnuel / 1200;  // 1200 represente : divise par 12 mois et divise par 100 (pourcentage)
        return $tauxMensuelInteret;
    }

    public function nombreDeMoisDeRemboursement(): int
    {
        $nombreDeMoisDeRemboursement = $this->dureeRembNbAnnee * 12;    // represente le nombre d'annee du formulaire multiplie par 12 mois 
        return $nombreDeMoisDeRemboursement;
    }

    public function calculMensualite(): float
    {   
        $Q = 1 - pow( 1 + $this->tauxMensuelInteret() , - ($this->nombreDeMoisDeRemboursement()));
        $Mensualite = ($this->capitalEmprunte * $this->tauxMensuelInteret()) / $Q;
        $Mensualite = round($Mensualite, 2);
        return $Mensualite;
    }    
}
