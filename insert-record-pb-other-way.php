<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'TestPDO';

try {

    $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `users2` (id, fname,lname,age) VALUES (?, ?, ?, ?)";

    $statement = $connection->prepare($sql);

    $statement->execute([2, 'sara', 'mortazavi', 22]);

    echo 'ok';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}