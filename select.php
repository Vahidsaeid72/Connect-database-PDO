<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'w3schools';

try {

    $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM `categories`";

    $statement = $connection->query($sql);
    $categories = $statement->fetchAll(PDO::FETCH_OBJ);
    echo '<pre/>';
    foreach ($categories as  $category) {

        echo  $category->CategoryID . " " . $category->CategoryName . '<br>';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}