<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'w3schools';

$connection = new mysqli($serverName, $userName, $password, $dbName);

if ($connection->connect_error) {
    die('error ' . $connection->connect_error);
}

$sql = "SELECT * FROM `categories` ";


$result = $connection->query($sql);

if ($result) {
    echo 'success';
} else {
    echo "failed " . mysqli_error($connection);
}
echo '<pre>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id : " . $row['CategoryID'] . '<br>' .
            "name : " . $row['CategoryName'] . '<br>' .
            "description : " . $row['Description'] . '<hr>';
    }
} else {
    echo 'No records found';
}