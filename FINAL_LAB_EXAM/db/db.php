<?php

	$location 	= 'localhost';
	$dbuser		= 'root';
	$dbpass		= '';
	$database	= 'OnlineShop'; 

	function getConnection(){
		
		global $location;
		global $dbuser;
		global $dbpass;
		global $database;

		$conn = mysqli_connect($location, $dbuser, $dbpass, $database);
		return $conn;
	}

?>