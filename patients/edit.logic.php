<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM patient WHERE id=$id";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();		
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["speciess"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		$client = $db->escape_string($_POST["clientt"]);

		// Prepare query and execute
		$query = "UPDATE patient SET name='$name', species='$species', status='$status', gender='$gender', client='$client' WHERE id=$id";
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
