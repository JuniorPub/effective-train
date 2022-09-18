<?php

if (isset($_POST["submit"])) {
  
  $brugernavn = $_POST["brugernavn"];
  $password = $_POST["password"];
  $passwordrepeat = $_POST["passwordrepeat"];

  // Herefter kommer der forskellige kode med fejl funktioner for at fange alle brugerfejl. som om man har glemt password eller glemt udfylde alle felter
  // Disse funktioner kan findes i functions.inc.php

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(tommeFelter($brugernavn, $password, $passwordrepeat) !== false) {
  header("location: ../signup.php?error=tommefelter");
  exit();
  }

  if(forkertBrugernavn($brugernavn) !== false) {
  header("location: ../signup.php?error=forkertbrugernavn");
  exit();
  }

  if(pwdMatch($password, $passwordrepeat) !== false) {
  header("location: ../signup.php?error=pwdmatch");
  exit();
  }

  if(brugernavnOptaget($conn, $brugernavn) !== false) {
  header("location: ../signup.php?error=brugernavnoptaget");
  exit();
  }

  opretBruger($conn, $brugernavn, $password);

}
else {
  header("location: ../signup.php");
}
