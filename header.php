<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/main.js"></script>

    <title>Hjemmeside 3</title>
  </head> 

  <body>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="lommeregner.php">Lommeregner</a></li>
        <?php
            if (isset($_SESSION["brugernavn"])) {
              echo "<li><a href='profile.php'>profilside</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
      </ul>
    </nav>

