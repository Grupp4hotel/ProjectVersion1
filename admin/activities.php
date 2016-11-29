<?php 

require "includes/db.php";
require "includes/session.php";

if ($_SESSION["adminLoggedIn"] !== true) {
	die("Du måste vara inloggad!");
}

if (isset($_REQUEST["add_activity"])) {
	add_activity($_REQUEST["title"], $_REQUEST["summary"]);
}

function add_activity($title, $summary) {
	global $db;

	$stmt = "INSERT INTO page_activities (title, summary) VALUES ('$title', '$summary')";
	$result = $db->query($stmt);

	if ($result === TRUE) {
    	echo "New record created successfully";
	}
	else {
		echo "Could not create record :-(";
	}
}