<?php

$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'lab_task';

$connection = new mysqli($servername, $user, $pass, $dbname);

if ($connection->connect_error) {
    die("Connection Failed" . $connection->connect_error);
} else {
    $stmt = $connection->prepare("insert into userdata(username, email, password) values(?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $stmt->close();
}