<?php

    // dit is de database connectie voor project
$username = "root";
$password = "root";
$servername = "localhost";
$dbname = "donkey_travel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $error){
    echo  $error->getMessage();
}