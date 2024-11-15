<?php
    date_default_timezone_set('Europe/Paris');

    function getToday() {
        $date = new DateTime('now');
        return $date->format('d/m/Y');
    }

    echo getToday();
    echo PHP_EOL;

    // function getTimeLeft(string $annee, string $mois, string $jour) : string {
    //     $date = new DateTime('now');
    //     $ladateactuelle = $date->format('y-m-d');
    //     $datetime1 = date_create($ladateactuelle);
    //     $customdateperso = date_create(($annee . '-' . $mois . '-' . $jour));

    //     $interval = date_diff($datetime1, $customdateperso);

    //     if($interval->invert === 1 ) { /* Si $interval->invert = 1 ça veut dire difference de date négative */  
    //         return "Évènement passé";
    //     }

    //     elseif($interval->format('%d') === '0') {
    //         return "Aujourd'hui";
    //     }

    //     elseif($interval->format('%y') === '0' && $interval->format('%m') === '0' && $interval->format('%d') !== '0') {
    //         return $interval->format('Dans %d jour(s)');
    //     }

    //     elseif($interval->format('%y') === '0' && $interval->format('%m') !== '0' && $interval->format('%d') !== '0') {
    //         return $interval->format('Dans %m mois et %d jours(s)');
    //     }

    //     elseif($interval->format('%y') === '0' && $interval->format('%m') !== '0' && $interval->format('%d') !== '0') {
    //         return $interval->format('Dans %y an(s) et %m mois');
    //     }
    //     else {
    //         return 'format incohérent';
    //     }
    // }

    // echo getTimeLeft('2024','09','05');

    function getTimeLeft(string $ladateperso) : string {
        $date = new DateTime('now');
        $ladateactuelle = $date->format('y-m-d');
        $datetime1 = date_create($ladateactuelle);

        $customdateperso = date_create($ladateperso);

        $interval = date_diff($datetime1, $customdateperso);

        if($interval->invert === 1 ) { /* Si $interval->invert = 1 ça veut dire difference de date négative */  
            return "Évènement passé";
        }

        elseif($interval->format('%y') === '0' && $interval->format('%m') === '0' && $interval->format('%d') === '0') {
            return "Aujourd'hui";
        }

        elseif($interval->format('%y') === '0' && $interval->format('%m') === '0' && $interval->format('%d') !== '0') {
            return $interval->format('Dans %d jour(s)');
        }

        elseif($interval->format('%y') === '0' && $interval->format('%m') !== '0' && $interval->format('%d') === '0') {
            return $interval->format('Dans %m mois');
        }

        elseif($interval->format('%y') === '0' && $interval->format('%m') !== '0' && $interval->format('%d') !== '0') {
            return $interval->format('Dans %m mois et %d jours');
        }

        elseif($interval->format('%y') !== '0' && $interval->format('%m') === '0') {
            return $interval->format('Dans %y an(s)');
        }
        elseif($interval->format('%y') !== '0' && $interval->format('%m') !== '0') {
            return $interval->format('Dans %y an(s) et %m mois');
        }
        else {
            return 'format incohérent';
        }

    }

    echo getTimeLeft('2024-09-04');