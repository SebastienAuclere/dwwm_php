<?php
require_once 'Voiture.php';

class Moteur
{

	protected $marqueMoteur;
	protected $vitesseMax;
	
	
	public function __construct(string $marqueMoteur, int $vitesseMax) {
		$this->marqueMoteur = $marqueMoteur;
		$this->vitesseMax = $vitesseMax;
	}

	public function getMarquemoteur(): string
	{
		return $this->marqueMoteur;
	}

	public function setMarquemoteur($marqueMoteur): void
	{
		$this->marqueMoteur = $marqueMoteur;
	}

	public function getVitesseMax(): int
	{
		return $this->vitesseMax;
	}
	
	public function setVitesseMax($vitesseMax): void
	{
		$this->vitesseMax = $vitesseMax;
	}
}