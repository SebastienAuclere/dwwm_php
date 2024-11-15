
<?php
session_start();
require("./utilisateurs.php");
require("./Dbconnect.php");

$objUser = new Utilisateurs();

if (!empty($_POST["mail"]) && !empty($_POST["psw"])) {
  $data = $objUser->authenticate($_POST["mail"], $_POST["psw"]);
  if (count($data) > 1) {
    $_SESSION["lastname_user"] = $data["lastname_user"];
    $_SESSION["level"] = $data["level"];
    $_SESSION["firstname_user"] = $data["firstname_user"];

    header("Location: ./liste.php"); /* redirection sur un autre URL */
  }
}



?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; width: 30%; margin-left: auto; margin-right: auto}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.validbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>



<h2>Login Form</h2>
<form action="" method="POST">

  <div class="container">
    <label for="uname"><b>Mail</b></label>
    <input type="text" placeholder="Enter Mail" name="mail" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <input type="button" class="validbtn" value="cancel" /> 
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>