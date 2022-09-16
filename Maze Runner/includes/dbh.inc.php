<?php


$serverName = "localhost:8080";
$dBBrugernavn = "root";
$dBPassword = "";
$dbName = "phpproject01";

$conn = mysqli_connect($serverName, $dBBrugernavn,$dBPassword, $dbName);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

