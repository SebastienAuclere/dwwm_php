<?php

require_once "classeVoiture.php";

class VoitureDeCourse
{
    // Attributs

    protected $marqueMoteur === $marque;

    // Fonction vitesseMaxVoitureDeCourse

    public function vitesseMaxVoitureDeCourse($vitesseMaxMoteur, $poids): string
    {
        $vitesseMaxVoitureDeCourse = ($vitesseMaxMoteur - ($poids * 0.05));
        return $vitesseMaxVoitureDeCourse;
    }

    // Fonction informationsCompletesVDC

    public function informationsCompletesVDC($marque, $modele, $poids, $vitesseMaxVoitureDeCourse): string
    {
        return $marque . $modele . ", " . $poids . " kg. Vitesse max: " . $vitesseMaxVoitureDeCourse . " km/h.";
    }
}