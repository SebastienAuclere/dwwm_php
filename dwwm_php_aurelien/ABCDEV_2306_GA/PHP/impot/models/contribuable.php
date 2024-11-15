<?php

class Contribuable {
    private string $firstname;
    private string $lastname;
    private float $revenu;

    const TAUX1 = 0.09;
    const TAUX2 = 0.14;

    public function __construct(string $_firstname, string $_lastname, float $_revenu) 
    
    {
        $this->firstname = $_firstname;
        $this->lastname = $_lastname;
        $this->revenu = $_revenu;
    }

    public function calculImpot() : float {
    $valImpot = 0;
        if($this->revenu < 15000) {
            $valImpot = $this->revenu * $this::TAUX1;
        }
        else {
            $valImpot = 15000 * $this::TAUX1 + ($this->revenu - 15000) * $this::TAUX2;
        }

        return $valImpot;
    }
}