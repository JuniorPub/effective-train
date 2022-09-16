<?php

function emptyInputSignup($brugernavn, $pwd, $pwdRepeat) {
    $result;
    if (empty($brugernavn) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($brugernavn) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $brugernavn) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists ($conn, $brugernavn) {
    $sql = "SELECT * FROM `login` WHERE brugernavn = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=brugernavntaken");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $brugernavn);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

mysqli_stmt_close($stmt);

}

function createUser($conn, $brugernavn, $pwd); {
    $sql = "INSERT INTO `login` (brugernavn, `password`) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=brugernavntaken");
        exit();
    }


    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "ss", $brugernavn, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
        exit();
 
}
