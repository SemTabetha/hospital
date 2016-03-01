<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');  
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["speciess"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		$client = $db->escape_string($_POST["clientt"]);
		
		// Prepare query and execute
		$query = "INSERT INTO patient (name, species, status, gender, client) VALUES ('$name','$species','$status','$gender','$client')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

	$db = new mysqli('localhost','root','','hospital');  
	$query_species = "SELECT * FROM `species`";
	$result_species = $db->query($query_species);
	
	$species = $result_species  ->fetch_all(MYSQLI_ASSOC);


	$query_clients = "SELECT * FROM `client`";
	$result_clients = $db->query($query_clients);
	
	$clients = $result_clients  ->fetch_all(MYSQLI_ASSOC);
