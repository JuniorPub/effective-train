<?php

if (isset($_POST["submit"])) {

  // Her har vi vores form data fra vores URL
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  // Herefter kommer der forskellige kode med fejl funktioner for at fange alle brugerfejl. som om man har glemt password eller glemt udfylde alle felter
  // Disse funktioner kan findes i functions.inc.php

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  // Left inputs empty
  // We set the functions "!== false" since "=== true" has a risk of giving us the wrong outcome
  if (emptyInputSignup($username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
	// Proper username chosen
  if (invalidUid($uid) !== false) {
    header("location: ../signup.php?error=invaliduid");
		exit();
  }

  // Do the two passwords match?
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch");
		exit();
  }
  // Is the username taken already
  if (uidExists($conn, $username) !== false) {
    header("location: ../signup.php?error=usernametaken");
		exit();
  }

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  createUser($conn, $username, $pwd);

} else {
	header("location: ../signup.php");
    exit();
}
