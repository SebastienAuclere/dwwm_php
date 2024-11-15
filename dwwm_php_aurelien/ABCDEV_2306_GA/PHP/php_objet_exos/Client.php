<?php
require_once ('Personne.php');

class Client extends Personne
{

	protected int $codePostal;
	protected int $noClient;
	protected string $nomCommune;
	protected string  $nomRue;
	protected int $noRue;

	function __construct(int $age, string $nom, string $prenom, int $codePostal, int $noClient, string $nomCommune, string $nomRue, int $noRue)
	{
		parent::__construct($age, $nom, $prenom);
		$this->codePostal = $codePostal;
		$this->noClient = $noClient;
		$this->nomCommune = $nomCommune;
		$this->nomRue = $nomRue;
		$this->noRue = $noRue;
	}

	function __toString()
	{
		return "{$this->getAge()}, {$this->getNom()}, {$this->getPrenom()}, {$this->getcodePostal()}, {$this->getnoClient()}, {$this->getnomCommune()}, {$this->getnomRue()}, {$this->getnoRue()}";
	}

	function getAge(): int
	{
		return $this->age;
	}

	function getcodePostal(): int
	{
		return $this->codePostal;
	}

	function getnoClient(): int
	{
		return $this->noClient;
	}

	function getNom(): string
	{
		return $this->nom;
	}

	function getnomCommune(): string
	{
		return $this->nomCommune;
	}

	function getnomRue(): string
	{
		return $this->nomRue;
	}

	function getnoRue(): int
	{
		return $this->noRue;
	}

	function getPrenom(): string
	{
		return $this->prenom;
	}

	function setcodePostal($codePostal): void
	{
		$this->codePostal = $codePostal;
	}

	function setNom($nom): void
	{
		$this->nom = $nom;
	}

	function setnomCommune($nomCommune): void
	{
		$this->nomCommune = $nomCommune;
	}

	function setnomRue($nomRue): void
	{
		$this->nomRue = $nomRue;
	}

	function setnoRue($noRue): void
	{
		$this->noRue = $noRue;
	}
}

$monClient = new Client(70, 'Tournesol', 'Tryphon', 75000, 7532, 'Moulinsart', 'Chateau', 64);
echo $monClient;