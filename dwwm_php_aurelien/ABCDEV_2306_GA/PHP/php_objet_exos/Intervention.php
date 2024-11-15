<?php
require_once ('Client.php');
require_once ('Intervenant.php');

class Intervention
{

	protected string $dateIntervention;
	protected string $descIntervention;
	protected Client $client;
	protected Intervenant $intervenant;

	function __construct($dateIntervention, $descIntervention)
	{
		$this->dateIntervention = $dateIntervention;
		$this->descIntervention = $descIntervention;

		$this->client = new Client();
		$this->intervenant = new Intervenant();
	}

	function __toString()
	{
		return ", {$this->getdateIntervention()}, {$this->getdescIntervention()}";
	}

	function getdateIntervention(): string
	{
		return $this->dateIntervention;
	}

	function getdescIntervention(): string
	{
		return $this->descIntervention;
	}

	function getClient(): Client
	{
		return $this->client;
	}

	function getIntervenant(): Intervenant
	{
		return $this->intervenant;
	}

	function setdateIntervention($dateIntervention): void
	{
		$this->dateIntervention = $dateIntervention;
	}

	function setdescIntervention($descIntervention): void
	{
		$this->descIntervention = $descIntervention;
	}
}

$monIntervention = new Intervention('09-11-2024 16:00', 'test');
echo $monIntervention;
