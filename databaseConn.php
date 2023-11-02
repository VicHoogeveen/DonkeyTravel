<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    // dit is de database connectie voor project
$username = "root";
$password = "";
$servername = "localhost";
$dbname = "donkey_travel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $error){
    echo  $error->getMessage();
}