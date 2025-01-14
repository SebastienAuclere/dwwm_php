<?php

/**
 * Affiche "Hello World !" 
 */
function helloWorld(): void
{    
    echo "Hello World !";
}

// test de la fonction (la fonction affiche directement le résultat)
helloWorld();

/**
 * Retourne "Hello $name !"
 * @ param string $name le nom à afficher 
 */
function hello(string $name): string
{
    if ($name === "") {
        return "nobody";
    } else {
        return "hello $name";
    }
}
//test de la fonction (la fonction n'affiche rien. "echo" affichera la valeur retournée
// par la fonction)
echo hello("");
echo hello("seb");

$boleen = false; //declaration du boleen en false
echo $boleen;    //echo ne retourneras rien

$boleen = true;  //redeclaration du boleen en true
echo $boleen;    //echo retourne 1



