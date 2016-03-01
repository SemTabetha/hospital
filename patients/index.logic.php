<?php

	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT * FROM `patient`";
	
	$value = 0;
	if (isset($_GET['value'])){
	switch($_GET['value']) {
	 case 1:
	    $value = 2;
	    $query .= "ORDER BY `patient`.`name` DESC";
	  break;
	 case 0:
	  $value = 1;
	    $query .= "ORDER BY `patient`.`name` ASC";
	  break;
	 default:
	  break;
	}
}

	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);

	
?>