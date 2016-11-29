<?php

require "includes/db.php";
require "includes/session.php";

// Check if username and password matches
$username = $_POST["username"];
$password = $_POST["password"];

function login($username, $password) {
	global $db;

	// Empty username? Stop here
	if (!isset($username) && null !== $username) {
		return false;
	}

	// Empty password? Stop here
	if (!isset($password) && null !== $password) {
		return false;
	}

	$stmt = "SELECT id FROM admins WHERE password = '$password' AND username = '$username'";
	$result = $db->query($stmt);

	return $result->num_rows;
}

$login = login($username, $password);

if ($login) {
	$_SESSION["adminLoggedIn"] = true;

	header("Location: /");
} 

else {
	$_SESSION["adminLoggedIn"] = false;

	header("Location: /admin?invalid=true");
}