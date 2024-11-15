<?php

class Mensualite {
    private float $k;
    private float $tauxMensuel;
    private float $nbMois;

    public function __construct(float $_k, float $_ta, float $_an) 
    
    {
        $this->k = $_k;
        $this->tauxMensuel = $_ta/1200;
        $this->nbMois = $_an * 12;
    }

    public function calculMensualite() : float {
            $quotient = (1-pow((1+$this->tauxMensuel), -$this->nbMois));
            $mensualite = ($this->k * $this->tauxMensuel) / $quotient;
            return round($mensualite, 2);
        }
}