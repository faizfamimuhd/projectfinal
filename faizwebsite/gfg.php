<?php

// Get the user id
$userid = $_REQUEST['userid'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "goapps");

if ($userid !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT username FROM users WHERE userid='$userid'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$username = $row["username"];

	// Get the first name
}

// Store it in a array
$result = array("$username",);

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
