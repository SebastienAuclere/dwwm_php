<?php

require_once 'contribuable.php';

class Pret
{
    protected float $k;
    protected float $tauxMensuel;
    protected float $nbMois;

    public function __construct(float $_k, float $_ta, float $_an)

    {
        $this->k = $_k;
        $this->tauxMensuel = $_ta / 1200;
        $this->nbMois = $_an * 12;
    }

    public function calculMensualite(): float
    {
        $quotient = (1 - pow((1 + $this->tauxMensuel), -$this->nbMois));
        $mensualite = ($this->k * $this->tauxMensuel) / $quotient;
        return round($mensualite, 2);
    }

    public function getTableauAmortissement(): array
    {
        $monTab = [];

        $capitalRestant = $this->k;
        $mensualite = $this->calculMensualite();
        $partInteret = 0;
        $partAmort = 0;
        for ($i = 0; $i < $this->nbMois; $i++) {
            if ($i > 0) {
                $capitalRestant -= $partAmort;
                } 
                
                $partInteret = $capitalRestant * $this->tauxMensuel;
                $partAmort = $mensualite - $partInteret;
                array_push($monTab, ["numero_mois"=>$i+1, "Part_interet"=>round($partInteret, 2), "part_amortissement"=>round($partAmort, 2), "capital_restant"=>round($capitalRestant, 2), "mensualite"=>$mensualite ] );
        }

        return $monTab;

        }
    }
