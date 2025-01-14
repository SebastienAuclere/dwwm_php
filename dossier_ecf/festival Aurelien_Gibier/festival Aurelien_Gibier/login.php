<?php
session_start();
require_once ('dbconnect.php');
require_once ('CandidateRepository.php');

$objUser = new CandidateRepository();

if (!empty($_POST["mail_user"]) && !empty($_POST["pass_user"])) {
  $data = $objUser->authenticate($_POST["mail_user"], $_POST["pass_user"]);
  if (count($data) > 1) {
    $_SESSION["lastname_user"] = $data["lastname_user"];
    $_SESSION["firstname_user"] = $data["firstname_user"];

    header("Location: index.php"); /* redirection sur un autre URL */
  }
}



?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>



<h2>Login Form</h2>
<form action="" method="POST">

  <div class="container">
    <label for="uname"><b>Mail</b></label>
    <input type="text" placeholder="Enter Mail" name="mail_user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass_user" required>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <input type="button" class="validbtn" value="cancel" /> 
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>