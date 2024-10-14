<?php

/////////////////////////////////////////////////////////
/////////////// Les boucles /////////////////////////////
/////////////////////////////////////////////////////////

/// 3 types de boucles en php :

/// boucle : tant que (while/do while)
/// boucle : pour (for)

/// boucle specifique en php : pour chaque (foreach)

/// La boucle tant que (while) : //////////////////

$chiffre = null;    

while ($condition) {    // tant que la $condition n'est pas la recommencer la boucle 

}

// exemple

while ($chiffre !== 10){                                 // tant que le chiffre n'est pas = 10 
    $chiffre = (int)readline('Entrez un chiffre : ');    // Entrez un nouveau chiffre
}

echo 'Bravo vous avez gagné !';                          // si le chiffre est egal a 10 on affiche 'Bravo vous avez gagne

// possibilité de plus :

while ($chiffre !== 10) {                                 
    $chiffre = (int)readline('Entrez un chiffre : ');
    break; //  le break servirais a sortir obligatoirement de la boucle (il n'est pas la d'origine)  
}

echo 'Bravo vous avez gagné !';


/// La boucle pour (for) : //////////////////

// exemple : pour afficher les 10 premiers chiffres

for ($i = 0 ; $i < 10 ; $i++)  // pour i allant de 0 a 10 
{
    echo "$i \n";              // afficher ca
}

// astuce :

for ($i = 0; $i < 10; $i++)  // detail : on peut afficher la troisieme partie de la condition comme ca " $i += 1 "
                             // c'est egal a " $i = $i + 1 "  ou decrementer : " $i -= 1 "
{
    echo "$i \n";            

}

// exemple pour recuperer les valeurs du tableau : mais on doit connaitre a l'avance la taille du tableau ici < 3 (dans la condition) 

$notes = [10, 15, 16];

for ( $i = 0 ; $i < 3 ; $i++ ){
    echo '- ' . $notes[$i] . "\n";   // afficheras avec un tiret devant chaque notes et entre elles revient a la ligne
}

//  - 10
//  - 15          resultat (recupere les valeurs)
//  - 16


/// La boucle pour (foreach) : //////////////////

// exemple : pour afficher un tableau, crée pour ca.


$notes = [10, 15, 16];

foreach ($notes as $note){       // ici $notes correspond au tableau $notes et $note (sans le s) correspond aux notes de l'eleve ici 10,15,16
    echo "- $note \n";
}

/// on peut donc se servir du for aussi mais le foreach reste plus lisible et plus court pour php

// - 10 
// - 15          meme resultat (recupere les valeurs)
// - 16

/// le foreach peut aussi recuperer aussi les index :

$eleves = [
    'cm2' => 'Jean',
    'cm1' => 'Marc'
];
                    //"key"   "valeurs"
foreach ($eleves as $classe => $eleve){
    echo "$eleve est dans la classe $classe /n";
}