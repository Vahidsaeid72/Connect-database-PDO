<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';


try {

    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]; //afzodean options // $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   //another way to add option moode 
    $connection = new PDO("mysql:host=$serverName", $userName, $password, $options);

    $sql = "CREATE DATABASE `TestPDO` ";
    $connection->exec($sql);
    echo 'ok';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}