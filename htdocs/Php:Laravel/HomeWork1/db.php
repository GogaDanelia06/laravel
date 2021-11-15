<?php


$servername = "localhost";
$dbname = "quiz";
$username = "root";
$password = "";

try {
    $connection = new mysql("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>