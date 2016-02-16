<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT * FROM species";
	$result = $db->query($query);
	
	$specie = $result->fetch_all(MYSQLI_ASSOC);

	
?>