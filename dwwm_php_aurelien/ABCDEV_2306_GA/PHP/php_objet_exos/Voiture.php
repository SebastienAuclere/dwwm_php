<?php
require_once 'Moteur.php';
class Voiture
{

	protected string $marque;
	protected string $modele;
	protected int $poids = 1000;
	protected Moteur $moteur;

	public function __construct(string $marque, string $modele, int $poids, string $marqueMoteur, int $vitesseMax) {
		if(mb_strlen($marque) > 1) {
			$this->marque = $marque;
		}
		else {
			throw new Exception('Erreur, la marque indiqué possède moins de deux caractères');
		}

		if(mb_strlen($modele) > 0) {
			$this->modele = $modele;
		}
		else {
			throw new Exception('Erreur, il n y a pas de modèle indiqué');
		}

		if($poids > 0) {
			$this->poids = $poids;
		}
		else {
			throw new Exception('Le poids ne peut pas être inférieur ou égal à zéro');
		}

		$this->moteur = new Moteur($marqueMoteur, $vitesseMax);
	}

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

	public function calculVitesseMax() : float {
		return $this->moteur->getVitesseMax() - ($this->poids * 0.3);
	}

	public function __toString(): string
	{
		return "{$this->getMarque()} {$this->getModele()}, {$this->getPoids()} Kg, {$this->moteur->getMarquemoteur()}, {$this->calculVitesseMax()} Km/h";
	}
}

class Voiture_de_Course extends Voiture
{ 

	public function __construct(string $marque, string $modele, int $poids, string $marqueMoteur, int $vitesseMax)
    {
		parent::__construct($marque, $modele, $poids, $marqueMoteur, $vitesseMax);

		if($marque !== $this->moteur->getMarquemoteur()) {
			throw new Exception('La marque du moteur est differente de la marque de la voiture');
		}
	}

	public function calculVitesseFormuleMax() : float {
		return $this->moteur->getVitesseMax() - ($this->poids * 0.05);
	}

	public function __toString(): string
	{
		return "{$this->marque} {$this->modele}, {$this->poids} Kg, {$this->moteur->getMarquemoteur()}, {$this->calculVitesseFormuleMax()} Km/h";
	}
}

// try {
// 	$myVoiture = new Voiture('Toyota', 'Sprinter', 900, 'ToyotaMoteur', 300);
// 	echo $myVoiture;
// }

// catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "\n";
// }

// echo PHP_EOL;

try {
$myVoitureFormule = new Voiture_de_Course('Renault', 'F1', 768, 'Renault', 350);
echo $myVoitureFormule;
}

catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

