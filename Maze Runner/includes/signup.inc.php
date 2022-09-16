<?php

if (isset($_POST["submit"])) {
    echo "it work";
    
//     $brugernavn = $_POST["uid"];
//     $pwd = $_POST["pwd"];
//     $pwdRepeat= $_POST["pwdrepeat"];
    
//     require_once "functions.inc.php";
//     require_once "dbh.inc.php";

//     if (emptyInputSignup($brugernavn, $pwd, $pwdRepeat) !== false) {
//         header("location: ../signup.php?error=emptyinput");
//         exit();
//     }
//     if (invalidUid($brugernavn) !== false) {
//         header("location: ../signup.php?error=invaliduid");
//         exit();
//     }
//     if (pwdMatch($pwd, $pwdRepeat) !== false) {
//         header("location: ../signup.php?error=passwordsdontmatch");
//         exit();
//     }
//     if (uidExists($conn, $brugernavn) !== false) {
//         header("location: ../signup.php?error=brugernavntaken");
//         exit();
//     }

//     createUser($conn, $brugernavn, $pwd, $pwd);
    


else {
    header("location: ../signup.php");
    exit();

}

}