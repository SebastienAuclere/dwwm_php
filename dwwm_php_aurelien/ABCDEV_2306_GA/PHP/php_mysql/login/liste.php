<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Liste des voiliers disponibles à la location</title>
</head>

<body>
<?php 

require("./utilisateurs.php");
require("./Dbconnect.php");

/* niveau 2 acces à tout, niveau 1 acces qu'a certains bateaux */

if(isset($_SESSION["lastname_user"]) && isset($_SESSION["level"]) && $_SESSION["level"] === 2) {
	if(isset($_POST["logout"])) {
		$objUser = new Utilisateurs();
		$objUser->deconnexion(intval($_POST["logout"]));
	}
?>
<form action="" method="POST">
	<input type="hidden" name="logout" value="1" id="logout">
	<input type="submit" name="supprBtn" value="Deconnexion" id="supprBtn">
</form>

	<ul>
		<li  class="">
			<a  class="" href="/edel/edel2" >
				<span class="">Edel Grand-large</span>
			</a>
		</li>
		<li  class="">
			<a class="" href="/edel/edel2" >
				
				<span class="">Edel 2</span>	
			</a>
		</li>
		<li  class="">
			<a class="" href="/edel/edel3" >
				
				<span class="">Edel 3</span>	
			</a>
		</li>
		<li  class="">
			<a class="" href="/edel/edel4" >
				
				<span class="">Edel 4</span>
			</a>
		</li>
		<li  class="">
			<a  class="" href="/edel/edel-5-545" >
				
				<span class="">Edel 5 / 545 / Dayboat</span>	
			</a>
		</li>
		<li  class="">
			<a  class="" href="/edel/edel600" >
				
				<span class="">Edel 600</span>	
				
			</a></li>
			<li  class="">
				<a class="" href="/edel/edel-6-660-665" >
					
					<span class="">Edel 6 / 660 / 665</span>
					
				</a>
			</li>
			<li  class="">
				<a class="" href="/edel/edel730" >
					
					
					<span class="">Edel 730</span>	
					
				</a>
			</li>

			<li  class="">
				<a  class="" href="/edel/edel820" >
					
					<span class="">Edel 820</span>	
				</a>
			</li>
		</ul>
<?php
; }

/* niveau 1 accès qu'a certains bateaux */
elseif(isset($_SESSION["lastname_user"]) && isset($_SESSION["level"]) && $_SESSION["level"] === 1) {
?>
<form action="" method="POST">
	<input type="hidden" name="logout" value="1" id="logout">
	<input type="submit" name="supprBtn" value="Deconnexion" id="supprBtn">
</form>
	<ul>
		<li  class="">
			<a  class="" href="/edel/edel2" >
				<span class="">Edel Grand-large</span>
			</a>
		</li>
	</ul>
<?php
}

else {
	echo "Vous n'êtes pas autorisé à voir cette page, veuillez vous identifiez à l'adresse suivante";
	echo "<a href='./index.php' target='_self'>Accueil</a>";
}
?>

</body>
</html>
