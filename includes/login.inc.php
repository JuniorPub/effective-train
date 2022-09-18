<?php

if (isset($_POST["submit"])) {

  
  $brugernavn = $_POST["brugernavn"];
  $password = $_POST["password"];

  

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';


  if (emptyInputLogin($brugernavn, $password) === true) {
    header("location: ../login.php?error=emptyinput");
		exit();
  }

 
  loginUser($conn, $brugernavn, $password);

} else {
	header("location: ../login.php");
    exit();
}
