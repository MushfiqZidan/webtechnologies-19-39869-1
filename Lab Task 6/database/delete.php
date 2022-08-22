<?php

if (isset($_GET['delete'])) {

    //require_once 'connect.php';

    $id = $_GET['delete'];

    $stmt = $connection->prepare("DELETE FROM userdata WHERE id=$id");

    $stmt->execute();
    $stmt->close();
}