<?php

function getToday(): string
{
    $date = new DateTime("now");
    return $date->format('d/m/Y');
}

function getToday2(): string
{
    $dateToday = new DateTime("now");
    return $dateToday->format("Y-m-d");
}

function getTimeLeft(string $dateFournie): string
{
    $dateFournie = new DateTime(($dateFournie)); //instancie l'objet dateFournie avec l'argument string de la fonction getTimeLeft;
    $dateFormatee = $dateFournie->format("y-m-d"); //ne change pas l'objet dateFournie mais le mets avec le format "y-m-d";
    $dateJour = new DateTime("now"); //instancie l'objet dateJour avec la date de "now" = maintenant (date actuelle du pc);
    $dateDuJour = $dateJour->format("y-m-d"); // !! pour comparer la date fournie il me faut aussi creer un format en donnant une nouvelle variable de date car les elements comparés doivent avoir le meme type de variable; 
    //$resultatIntervalle = date_diff($dateFournie, $dateJour); // date_diff est une fonction qui calcule l'intervalle entre deux objets date;
    $resultatIntervalle = $dateFournie->diff($dateJour); // la ligne du dessus est egale a cette ligne, il n'y a juste que la syntaxe qui change. On l'as mis avec Franck car quand la nouvelle version seras mise a jour il faudras l'ecrire de cette manière.
    $intervalleAnnee = $resultatIntervalle->format("%y"); //donne l'année;
    $intervalleMois = $resultatIntervalle->format("%m"); //donne le mois;
    $intervalleJours = $resultatIntervalle->format("%d"); //donne le jour;

    if ($dateFormatee > $dateDuJour) // si supérieur;
    {
        if ($intervalleAnnee === "0") // et que l'intervalle n'as pas un an;
        {
            if ($intervalleMois === "0") // et que l'intervalle n'as pas non plus un mois;
            {
                return "Dans " . $intervalleJours . " jours."; // donne le nombre de jours;
            } else {
                return "Dans " . $intervalleMois . " mois et " . $intervalleJours . " jours."; // sinon les mois et les jours;
            }
        } else {
            return "Dans " . $intervalleAnnee . " an(s) et " . $intervalleMois . " mois."; // si l'intervalle a une annee ou plus et les mois;
        }
    } elseif ($dateFormatee === $dateDuJour) // si elle est egale;
    {
        return "Aujourd'hui.";
    } elseif ($dateFormatee < $dateDuJour) {
        return "Evènement passé."; // si elle est passée;
    } else {
        return "Is not valid."; // sinon elle n'est pas valide;
    }
}

echo getTimeLeft("2020-11-23") . PHP_EOL;
echo getTimeLeft("2024-09-02") . PHP_EOL;
echo getTimeLeft("2024-09-18") . PHP_EOL;
echo getTimeLeft("2024-12-25") . PHP_EOL;
echo getTimeLeft("2025-10-26") . PHP_EOL;
echo getTimeLeft("2026-10-29") . PHP_EOL;
