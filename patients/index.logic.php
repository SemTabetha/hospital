<?php
	$sort_name = 0;
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT * FROM `patient`";
 $value = 0;
switch($_POST['sort_name']) {
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

	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);

	
?>