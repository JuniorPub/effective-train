<?php


$serverName = "localhost";
$dBBrugernavn = "root";
$dBPassword = "";
$dbNavn = "loginsystem";

$conn = mysqli_connect($serverName, $dBBrugernavn,$dBPassword, $dbNavn);

if (!conn){
    die("Connection: " . mysqli_connect_error());
}

