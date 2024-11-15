<?php

class Personne
{

	protected int $age;
	protected string $nom;
	protected string $prenom;

	function __construct($age, $nom, $prenom)
	{
		$this->age = $age;
		$this->nom = $nom;
		$this->prenom = $prenom;
	}

	function getAge(): int
	{
		return $this->age;
	}

	function getNom(): string
	{
		return $this->nom;
	}

	function getPrenom(): string
	{
		return $this->prenom;
	}

	function setNom($nom): void
	{
		$this->nom = $nom;
	}
	
	function __toString(): string
	{
		return "{$this->getAge()}, {$this->getNom()}, {$this->getPrenom()}";
	}
}