<?php

require 'Connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `Users` WHERE `uID` = '{$id}' LIMIT 1";

$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$json = json_encode($row);
?>