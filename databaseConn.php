<?php
    // dit is de database connectie

$dbname = "donkeytravel";
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname,$username, $password ");
} catch (PDOException $error){
    echo $error->getMessage();
}