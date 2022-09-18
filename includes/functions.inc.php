<?php

// Her tjekkere vi, om der er et tomt input til sign up. Hvis 

function tommeFelter($brugernavn, $password, $passwordrepeat) {
    $result;
    if(empty($brugernavn) || empty($password) || empty($passwordrepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// Her tjekkere vi så for ugyldigt brugernavn

function forkertBrugernavn($brugernavn) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $brugernavn)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// Her tjekkere vi om begge koder man skriver er ens 

function pwdMatch($password, $passwordrepeat) {
    $result;
    if($password !== $passwordrepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// Her tjekkere vi om ens brugernavn er i vores database

function brugernavnOptaget($conn, $brugernavn) {
    $sql = "SELECT * FROM login WHERE brugernavn = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $brugernavn);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
// Den her kode hjælper os med at tilføje personer til vores databse

function opretBruger($conn, $brugernavn, $password) {
    $sql = "INSERT INTO login (brugernavn, password) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $brugernavn, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
        exit();
}

// // Her tjekker vi, for om der er et tomt input felt i selve login delen. 
// function emptyInputLogin($brugernavn, $password) {
// 	$result;
// 	if (empty($brugernavn) || empty(password)) {
// 		$result = true;
// 	}
// 	else {
// 		$result = false;
// 	}
// 	return $result;
// }

// // Hvis alt går rigtig og man skriver den rigtig brugernavn og password. Så hjælpe den her med logge in ind på siden. 
// function loginUser($conn, $brugernavn, $password) {
// 	$uidExists = uidExists($conn, $brugernavn);

// 	if ($uidExists === false) {
// 		header("location: ../login.php?error=wronglogin");
// 		exit();
// 	}

// 	$passwordHashed = $uidExists["brugernavnpassword"];
// 	$checkpassword = password_verify($password, $passwordHashed);

// 	if ($checkpassword === false) {
// 		header("location: ../login.php?error=wronglogin");
// 		exit();
// 	}
// 	elseif ($checkpassword === true) {
// 		session_start();
// 		$_SESSION["userid"] = $uidExists["usersId"];
// 		$_SESSION["useruid"] = $uidExists["usersUid"];
// 		header("location: ../index.php?error=none");
// 		exit();
// 	}
// }
