<?php

// Les tableaux


/////////// Premier format de tableau : ////////////

$notes = [10, 20];          // nouvelle ecriture

$notes = array(10, 20);     // ancienne ecriture toujours valable

echo $notes[1];

// Exemple

$notes = [10, 20, 10, 9, 5];

echo "\n" . $notes[3];   // recupere la valeur numero 3 (9)

// a savoir on peut melanger des entiers, des reels mais aussi des chaines de caracteres dans le meme tableau

// Exemple

$notes = [10, 20, 10, 9, 5, 'louise'];

echo "\n" . $notes[5];   // recupere la valeur numero 5 (louise)


/////////// Deuxieme format de tableau : ///////////////

// Exemple    

$eleve = ['Marc', 'Doe', [10, 20, 18]];

echo "\n" . $eleve[2][1];

// on peut mettre un tableau dans un tableau, ici on recupere dans le tableau 1 la deuxieme partie du tableau et dans celui ci la 2eme note

// on peut aussi associer les index automatiques ([0],[1],[2]...) par des indexs particuliers en leurs donnant une valeur particuliere (entier ou chaine de caractere) :

// Exemple 

$eleve = ['nom' => 'Doe', 'prenom' => 'Marc', 'notes' => [10, 20, 15] ];

echo "\n" . $eleve['nom']; // affiche le nom du tableau $eleve

// on l'ecriras de cette maniere plus lisible

$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]    
];

echo "\n" . $eleve['nom'] . " " . $eleve['prenom']; // affiche le nom et le prenom du tableau $eleve
echo "\n" . $eleve['notes'][1]; // affiche la note 2 du tableau $eleve

// pour modifier le prenom :

$eleve['prenom'] = 'jean';    
echo "\n" . $eleve['nom'] . " " . $eleve['prenom']; // affiche Doe jean : ecrase la valeur 'Marc'

// pour rajouter une note : 

$eleve['notes'][3] = 16; // modifie et rajoute 16 en quatrieme note dans le tableau
echo "\n" . $eleve['notes'][3]; // affiche 16

//////// attention ///// pour afficher toutes les notes : ici on ne retourne pas une note mais un tableau donc ceci return un array et non les notes 

echo "\n" . $eleve['notes']; 

// pour retourner les notes il faut utiliser une fonction print_r a laquelle on doit utiliser les parentheses :

print_r($eleve['notes']);