<?php

	require_once "DAO/DBConnect.php";

	$name = $_POST['name'];

	$result = array();
  	$result = Edit("authors", "id", $name);
		
	/*echo "<script>alert('$result')</script>";*/
	echo json_encode($result);
?>