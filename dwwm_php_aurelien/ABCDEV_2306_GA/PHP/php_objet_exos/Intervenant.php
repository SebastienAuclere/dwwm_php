<?php
require_once ('Personne.php');

class Intervenant extends Personne
{

	protected float $autresRevenus;
	protected float $salaire;

	function __construct($age, $nom, $prenom, $autresRevenus, $salaire)
	{
		parent::__construct($age, $nom, $prenom);
		$this->autresRevenus = $autresRevenus;
		$this->salaire = $salaire;
	}

	function __toString()
	{
		return " ,{$this->getAge()}, {$this->getNom()}, {$this->getPrenom()}, {$this->getAutresRevenus()}, {$this->getSalaire()}";
	}

	function getAge(): int
	{
		return $this->age;
	}

	function getAutresRevenus(): float
	{
		return $this->autresRevenus;
	}

	function getNom(): string
	{
		return $this->nom;
	}

	function getPrenom(): string
	{
		return $this->prenom;
	}

	function getSalaire(): float
	{
		return $this->salaire;
	}

	function setAutresRevenus($autresRevenus): void
	{
		$this->autresRevenus = $autresRevenus;
	}

	function setNom($nom): void
	{
		$this->nom = $nom;
	}

	function setSalaire($salaire)
	{
		$this->salaire = $salaire;
	}

}
$monIntervenant = new Intervenant(48,'Truite','Aurelien',5000,40000);
echo $monIntervenant;
