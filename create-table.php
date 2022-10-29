<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'TestPDO';

try {

    $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE users2 (
        id int ,
        fname varchar(255),
        lname varchar(255),
        age int
    )";
    $connection->exec($sql);
    echo 'ok';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}