<?php
require "./vendor/autoload.php";
//require "./src/Demo.php";
//require "./src/Blog/Article/Demo.php";



$objDemo =new App\Demo();

$objdemo2=new App\Blog\Article\Demo();

for ($i=1; $i<=6; $i++)
{ 
    echo "<input type='button' value='supprimer".$i."' id='suppr".$i."' name='suppr".$i."' class='arrondi'>";
}
?>
<style>

.arrondi {
display:block;
border-radius:12px;
margin: 10px;
}   
    
</style>