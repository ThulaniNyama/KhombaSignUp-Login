<?php
require 'Connect.php';

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$sql = "CREATE DATABASE khomba IF NOT EXISTS";

if ($connection->query($sql) === True) {

    $sql = "CREATE TABLE Users IF NOT EXISTS (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    surname VARCHAR(255),
    email VARCHAR(255),
    dob VARCHAR)";
}

$connection->close();
?>