<?php
require 'Connect.php';

$postdata = file_get_contents("php://input");

if (isset($postdata) && !empty($postdata)) {
	$request = json_decode($postdata);

	$name = $request->name;
	$surname = $request->surname;
	$name = $request->name;
	$dob = $request->dob;
	$email = $request->email;

	//remember to check if user exists
	$sql = "INSERT INTO `Users`(
		`Name`,
		`Surname`,
		`DOB`,
		`Email`
	) VALUES (
		'{$name}',
		'{$surname}',
		'{$dob}',
		'{$email}')";
}
else {
	# code...
}


?>