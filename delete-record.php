<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'TestPDO';

try {

    $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM `users` WHERE `id` =1";
    $connection->exec($sql);
    echo 'ok';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}