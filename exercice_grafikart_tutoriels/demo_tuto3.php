<?php

$note = 12;

if (/*condition qui prends une valeur booleene (true or false)*/$note >= 10) {
    /*si cette condition est true faire cette instruction */
    echo 'Bravo vous avez la moyenne' . PHP_EOL . '';
} else {
    /*sinon faire cette instruction*/
    echo 'Dommage vous n\'avez pas la moyenne' . PHP_EOL . '';
}

// ceci donneras :

// vous avez la moyenne car 12 est >= a 10

// si vous avez mis la variable $note entre ' ' c'est comme si c'etait une chaine mais cela seras lu comme 12 et le 
// resultat seras 'Bravo vous avez la moyenne' et ce serais pareil pour $note = '12rloghji' la machine lirais 12 
// donc le premier bloc d'instruction serais lu aussi.

// Pour plus d'interraction : on peut faire ca aussi :

$note = readline('Entrez votre note :'); // Fonction readline()
// Dans le terminal seras affiche 'Entrer votre note :', vous tappez cette note
// dans le terminal et il afficheras le bloc de code correspondant. 

if ($note >= 10) {
    echo 'Bravo vous avez la moyenne'; // . PHP_EOL . '';
} else {
    echo 'Dommage vous n\'avez pas la moyenne'; // . PHP_EOL . '';
}
