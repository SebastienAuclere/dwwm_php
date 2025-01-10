<?php

class User 
{
    private string $name = "Seb";

    public function __toString() {
        return $this->name;
    }
}

$booleen = true;
$nombre = 42;
$reel = 13.37;
$chaine = "Mike";
$tableau = ["Joe", "Jack", "Cindy" ];
$objet = new User();

echo $booleen;
echo $nombre;
echo $reel;
echo $chaine;
echo $tableau;
echo $objet;

//phpinfo();

echo "<pre>";
var_dump($tableau);
echo "</pre>";
echo "<pre>";
var_dump($objet)."<br/>";
echo "</pre>";


echo "<pre>";
var_export($tableau)."<br/>";
echo "</pre>";
echo "<pre>";
var_export($objet)."<br/>";
echo "</pre>";

?> 
