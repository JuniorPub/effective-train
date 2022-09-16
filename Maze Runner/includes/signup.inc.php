<?php

if (isset($_POST["submit"])) {
    echo "it hhgf";
    // $brugernavn = $_POST["uid"];
    // $pwd = $_POST["pwd"];
    // $pwdRepeat= $_POST["pwdrepeat"];

    // require_once 'dbh.inc.php';
    // require_once 'functions.inc.php';

    // if (emptyInputSignup($brugernavn, $pwd, $pwdRepeat) !== false) {
    //     header("location: ../signup.php?error=emptyinput");
    //     exit();
    // }
    // if (invalidUid($brugernavn) !== false) {
    //     header("location: ../signup.php?error=invaliduid");
    //     exit();
    // }
    // if (pwdMatch($pwd, $pwdRepeat) !== false) {
    //     header("location: ../signup.php?error=passwordsdontmatch");
    //     exit();
    // }
    // if (uidExits($conn, $brugernavn) !== false) {
    //     header("location: ../signup.php?error=brugernavntaken");
    //     exit();
    // }

    // createUser($conn, $brugernavn, $pwd, $pwdRepeat);
    

}

else {
    header("location: ../signup.php")
    exit();

}

