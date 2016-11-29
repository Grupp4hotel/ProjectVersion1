<?php

global $db;

// Anslutningsinfo för MySQL
$config = array(
	"mysql_user" => "gladageten",
	"mysql_password" => "gladageten",
	"mysql_database" => "gladageten",
	"mysql_host" => "127.0.0.1",
	"mysql_port" => 32769,
);

// Skapa en anslutning mot databasen och lagra i en variabel
$db = new mysqli($config["mysql_host"], $config["mysql_user"], $config["mysql_password"], $config["mysql_database"],
	$config["mysql_port"]);

// Om något gick fel till vid anslutning spotta ut det på skärmen
if ($db->connect_errno) {
	die("Failed to connect to MySQL");
}

// Set charset
$db->set_charset("utf8");