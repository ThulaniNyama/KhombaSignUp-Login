<?php

require 'Connect.php';

$postdata = file_get_contents("php://input");

if (isset($postdata) && !empty($postdata)) {
	$request = json_decode($postdata);

	$id = mysqli_real_escape_string($connection, (int)$_GET['id']);
	$name = mysqli_real_escape_string($connection, trim($request->name));
	$surname = mysqli_real_escape_string($connection, trim($request->surname));
	$dob = mysqli_real_escape_string($connection, trim($request->dob));
	$email = mysqli_real_escape_string($connection, trim($request->email));

	$sql = "UPDATE `Users` SET `name` = '$name', `surname` = '$surname', `email` = '$email' WHERE `uID` = '{$id}' LIMIT 1";

	if (mysqli_query($connection, $sql)) {
		http_response_code(204);}
	}
	else {
	return http_response_code(422);
    }
}
?>