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

// on peut aussi associer les index automatiques ([0],[1],[2]...) par des indexs particuliers en leur donnant une valeur particuliere (entier ou chaine de caractere) :

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
echo "\n" . $eleve['notes'][1]; // affiche la note 2 du tableau $eleve dans le tableau 'notes'

// pour modifier le prenom :

$eleve['prenom'] = 'jean';    
echo "\n" . $eleve['nom'] . " " . $eleve['prenom']; // affiche Doe jean : ecrase la valeur 'Marc'

// pour rajouter une note : 

$eleve['notes'][3] = 16; // modifie et rajoute 16 en quatrieme note dans le tableau
echo "\n" . $eleve['notes'][3]; // affiche 16

//////// attention ///// pour afficher toutes les notes : ici on ne retourne pas une note mais un tableau donc ceci return un array et non les notes 

echo "\n" . $eleve['notes']; 

// pour retourner les notes il faut utiliser une fonction print_r a laquelle on doit utiliser les parentheses : (car echo renvoie un string ou un nombre)

print_r($eleve['notes']);

// affiche le tableau :

// Array
// (
//     [0] => 10
//     [1] => 20
//     [2] => 15
//     [3] => 16
// )

// pour rajouter un element, on ecrit :

$eleve['notes'][] = 16; // cela rajoute un element a la fin du tableau qui a pour valeur 16 et cela mettra le bon index automatiquement (ici index 4)

// quand il y as beaucoup de lignes a ecrire c'est plus simple : copier coller

// exemple : 

$eleve['notes'][] = 16;
$eleve['notes'][] = 16;
$eleve['notes'][] = 16;
$eleve['notes'][] = 16;
$eleve['notes'][] = 16;

print_r($eleve['notes']); // affiche toutes les nouvelles notes + leur nouvel index

// si je fais ca :

$eleve[] = 'CM2-A';

// alors cela rajoute une valeur a la suite des autres et ne rajoute pas de notes mais une nouvelle valeur au tableau eleve.

print_r($eleve);

// cela affiche :
// Array
// (
//     [nom] => Doe
//     [prenom] => jean
//     [notes] => Array
//         (
//             [0] => 10
//             [1] => 20
//             [2] => 15
//             [3] => 16
//             [4] => 16
//             [5] => 16
//             [6] => 16
//             [7] => 16
//             [8] => 16
//             [9] => 16
//         )

//     [0] => CM2-A  <======== ici un index qui part de '0'
// )

/////////////////// un tableau dans un tableau dans un tableau //////////////////

// exemple d'une classe avec des eleves qui ont des notes :

$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'Jean',
        'notes' => [16, 16, 16]
    ],                                                 //     !! L'indentation d'un tableau
    [                                                  //     !! est tres importante                
        'nom' => 'Doe',                                //     !! pour bien s'y retrouver   
        'prenom' => 'Joe',
        'notes' => [12, 15, 17]
    ]
];

echo $classe[1]['notes'][1]; // ceci renverras donc dans le tableau classe la deuxieme partie du premier
//tableau pour la valeur notes la deuxieme note. 