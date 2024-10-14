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
    if ($note == 10){
        echo 'vous avez juste la moyenne'; // . PHP_EOL . '';   
    } else{
        echo 'Bravo vous avez la moyenne'; // . PHP_EOL . ''; 
    }        
} else {
    echo 'Dommage vous n\'avez pas la moyenne'; // . PHP_EOL . '';
}

///////////////// on peut utiliser plutot le "elseif" ////////////////////

if ($note > 10) {
   echo 'vous avez eu la moyenne'; // . PHP_EOL . '';
}elseif ($note == 10){                                                 // le double egal ne donne que l'egalite et le triple egal en plus de l'egalite le type egal en plus       
    echo 'vous avez eu juste la moyenne'; // . PHP_EOL . '';
}
else {
    echo 'Dommage vous n\'avez pas la moyenne'; // . PHP_EOL . '';
}

////////////////////////////////////////////////////////////////////////
///////////////////// Le Switch ////////////////////////////////////////
////////////////////////////////////////////////////////////////////////

$action = (int)readline('Entrez votre action : (1: attaquer, 2: defendre, 3: passer mon tour');

switch ($action){
    case 1:
        echo 'J\'attaque !';
        break;
    case 2:
        echo 'Je defends !';
        break;
    case 3:
        echo 'Je passe mon tour !';
        break;
    default:
        echo 'Commande inconnue';                
}

///////////////////////////////////////////////////////////////////
//////////////////// Opérateurs logiques //////////////////////////
///////////////////////////////////////////////////////////////////

// Pour un magasin on a besoin de connaitre l'heure que l'on
// vas demander a l'utilisateur afin de savoir si le magasin
// est ouvert pendant certaines heures

$heure = (int)readline('Entrez une heure : ');

//        SI $heure = 10
//           = FAUX               OU            = VRAI            =  VRAI donc passe dans la premiere instruction : 'Le magasin sera ouvert'
//  (   FAUX     &&    VRAI     ) ou (   VRAI      &&     VRAI    )
        
if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)){     // '9 <= $heure' devient un booleen qui sera soit vrai soit faux
    echo 'Le magasin sera ouvert';                                        //  VRAI && VRAI = VRAI            VRAI || VRAI = VRAI    
} else {                                                                  //  VRAI && FAUX = FAUX            VRAI || FAUX = VRAI 
    echo 'Le magasin sera ferme';                                         //  FAUX && FAUX = FAUX            FAUX || FAUX = FAUX
}

// pour inverser la condition : !

//(!((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)))

// ou

//(!(9 <= $heure && $heure <= 12) && !(14 <= $heure && $heure <= 17))

// ou

//((9 > $heure || $heure > 12) && (14 > $heure || $heure > 17))

