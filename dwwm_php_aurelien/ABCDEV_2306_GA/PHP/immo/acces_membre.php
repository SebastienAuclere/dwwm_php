<style>
  .text-on-pannel {
    background: #fff none repeat scroll 0 0;
    height: auto;
    margin-left: 20px;
    padding: 3px 5px;
    position: absolute;
    margin-top: -47px;
    border: 1px solid #337ab7;
    border-radius: 8px;
  }

  .panel {
    /* for text on pannel */
    margin-top: 27px !important;
  }

  .panel-body {
    padding-top: 30px !important;
  }
</style>

<?php

require('./models/dbconnect.php');
require('./models/utilisateur.php');

if (isset($_POST["validation"])) {

  $objUser = new Utilisateurs();
  $tab = $objUser->authenticate($_POST["identifiant"], $_POST["pwd"]);

  if (count($tab) > 1) {
    $_SESSION['id_com'] = $tab["id_utilisateur"];
    $_SESSION['name_user'] = $tab["nom_utilisateur"];
    $_SESSION['firstname_user'] = $tab["prenom_utilisateur"];
    $_SESSION['id_level'] = $tab["id_niveau"];
  }
}

if (isset($_SESSION['id_com'])) {
  echo '<h2>Bonjour M(me) ' . $_SESSION['firstname_user'] . ' ' . $_SESSION['name_user']  . ' vous êtes bien connecté(e)</h2>';
} else {




?>



  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3 class="text-on-pannel text-primary"><strong class="text-uppercase"> Accès gestion</strong></h3>


        <form id="verif" name="verif" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

          <p style="text-align:center;"><label style="font-family:Verdana, Geneva, sans-serif" for="identifiant"> email </label>

            <input class="form-control" id="identifiant" name="identifiant" value="" type="text">
          </p>

          <p style="text-align:center; "><label style="font-family:Verdana, Geneva, sans-serif" for="pwd">Mot de passe : </label>
            <input class="form-control" type="password" id="pwd" name="pwd" value="" />
          </p>
          <p style="text-align:center; width:100%">
            <input type="submit" class="btn btn-primary" id="validation" name="validation" value="Valider" style=" text-align:center">
          </p>
        </form>
      </div>
    </div>
    <div>
    <?php
  };
    ?>