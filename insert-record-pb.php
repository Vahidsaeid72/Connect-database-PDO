<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'TestPDO';

try {

    $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `users2` (id, fname,lname,age) VALUES (:id, :fname, :lname, :age)";

    $statement = $connection->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->bindParam(':fname', $fname);
    $statement->bindParam(':lname', $lname);
    $statement->bindParam(':age', $age);

    $id = 1;
    $fname = 'nima';
    $lname = 'ahmadi';
    $age = 30;

    $statement->execute();

    echo 'ok';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}