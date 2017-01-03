<?php
$servername = "146.148.107.234";
$username = "root";
$password = "Escudo2430!";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connexao faiou... " . $e->getMessage();
    }
?>
