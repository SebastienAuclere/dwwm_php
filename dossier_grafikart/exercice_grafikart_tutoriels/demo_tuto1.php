<!-- Salut les gens
<?php
// $name = 1;
// $name0 = 1.4;
// $name_ = 'Marc';
// echo $name;

// $note = 10;
// $note2 = 15;
// echo ($note + $note2) / 2;

// $prenom = 'Marc';
// $nom = 'Doe';
//     // echo $prenom + $nom; // prenom et nom ne sont pas des nombres il faut concatener
    
//     echo $prenom . ' ' . $nom;

//     // difference entre guillemets simples et guillemets doubles

//     echo $prenom . '\n' . $nom;  // affiche \n

//     echo $prenom . "\n" . $nom;  // affiche un saut de ligne

//     // donc entre "\n" qui affiche un saut de ligne et '\n' qui affiche \n il faut se rappeler la différence et ne pas l'oublier

//     // autre exemple : 

//     echo "$prenom $nom";  // affiche : Marc Doe

//     echo "$prenom\n$nom"; // affiche : Marc et Saute une ligne

//     echo '$prenom $nom'; // affiche : $prenom $nom

//     // pour afficher un guillemet simple dans des guillemets simples il faut échaper avec un antislash \ devant le guillemet simple

//     echo '$prenom \' $nom';

//     // pareil que 

//     echo "$prenom \" $nom";

//     // variable booleene : 
    
//     $prenom = true; // pour les conditions
//     $nom = false; // pour les conditions

//     // variable null :

//     $prenom = null; // permets de sauvegarder une variable qui n'as pas de type par default
//     $prenom; // = null

//     // si je veux afficher 

//     $prenom; //cela n'affiche rien : un espace vide

///////// exercice 1 //////////

// afficher : Bonjour Marc Doe vous avez eu 15 de moyenne

$prenom = 'Marc';
$nom = 'Doe';
$note1 = 10;
$note2 = 20;

echo 'Bonjour ' . $prenom . ' ' . $nom . ' vous avez eu ' . (( $note1 + $note2 ) / 2) . ' de moyenne';

/////////// 2eme maniere : /////////

// afficher : Bonjour Marc Doe vous avez eu 15 de moyenne

$prenom = 'Marc';
$nom = 'Doe';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1 + $note2) / 2;

echo "\nBonjour $prenom $nom vous avez eu $moyenne de moyenne"; // \n est un echappement de caracteres speciaux (doc php : https://www.php.net/manual/fr/language.types.string.php)