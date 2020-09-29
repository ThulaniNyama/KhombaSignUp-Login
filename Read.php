<?php

require 'Connect.php';
error_reporting(E_ERROR);
$users = [];
$sql = "SELECT * FROM Users";

if ($result = mysqli_query($connection, $sql)) {
	$cr = 0;
	while($row = mysqli_fectch_assoc($result)) {
		$users[$cr]['uID'] = $row['uID'];
		$users[$cr]['name'] = $row['name'];
		$users[$cr]['surname'] = $row['surname'];
		$users[$cr]['dob'] = $row['dob'];
		$users[$cr]['email'] = $row['email'];
		$cr++;
	}
	json_encode($users);
}
else {
	http_response_code(404);
}
?>