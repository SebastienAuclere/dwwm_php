<?php

/////////////////////////////////////////////////////////
/////////////// Les boucles /////////////////////////////
/////////////////////////////////////////////////////////

/// 3 types de boucles en php :

/// boucle : tant que (while/do while)
/// boucle : pour (for)

/// boucle specifique en php : pour chaque (foreach)

/// La boucle tant que (while) :

$chiffre = null;    

while ($condition) {    // tant que la $condition n'est pas la recommencer la boucle 

}

//exemple

while ($chiffre !== 10){                                 // tant que le chiffre n'est pas = 10 
    $chiffre = (int)readline('Entrez un chiffre : ');    // Entrez un nouveau chiffre
}

echo 'Bravo vous avez gagn\é';                            // si le chiffre est egal a 10 on affiche 'Bravo vous avez gagne