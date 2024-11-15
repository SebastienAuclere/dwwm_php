<?php
    date_default_timezone_set('Europe/Paris');

    function getToday() {
        $date = new DateTime('now');
        return $date->format('d/m/Y');
    }

    echo getToday();
    echo PHP_EOL;

    function getTimeLeft(string $annee, string $mois, string $jour) : string {
        $date = new DateTime('now');
        $ladate = $date->format('Y-m-d');
        $ladateseconde = strtotime($date->format('Y-m-d'));
        $customdateseconde = strtotime($annee . '-' . $mois . '-' . $jour);
        $datediff = $customdateseconde - $ladateseconde;
        $years = floor($datediff / (365.25*60*60*24));
        $months = floor(($datediff - $years * 365.25*60*60*24) / (30.437*60*60*24)); /* 30.437 = moyenne des mois */
        $days = floor(($datediff - $years * 365.25*60*60*24 - $months*30.437*60*60*24)/ (60*60*24));

        if($annee . '-' . $mois . '-' . $jour === $ladate) {
            return "Aujourd'hui";
        }
        elseif($annee . '-' . $mois . '-' . $jour < $ladate) {
            return "Évènement passé";
        }
        elseif($datediff <= 2419200 && $datediff >= 86400) {
            return 'Dans ' . $days  . ' jour(s)';
        }
        elseif($datediff <= 31536000 && $datediff > 2419200) {
            return 'Dans ' . $months . ' mois et ' . $days . ' jour(s)';
        }
        elseif($datediff > 31536000) {
            return 'Dans ' . $years. ' année(s) et ' . $months . ' mois';
        }
    }

    echo getTimeLeft('2024','08','27');
    echo PHP_EOL;
    echo getTimeLeft('2024','11','03');

    echo strtotime($date->format('Y-m-d'));

    
