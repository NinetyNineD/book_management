<?php

	require_once "DAO/DBConnect.php";

	$name = $_POST['name'];

	$result = array();
  	$result = Edit("employee", "Code",$name);
		
	/*	$array = array(
			'Code' => $fetch['Code'],
			'Name' => $fetch['Name'],
			'DateOfBirth' => $fetch['DateOfBirth'],
			'Gender' => $fetch['Gender'],
			'Position' => $fetch['Position'],
			'PhoneNumber' => $fetch['PhoneNumber'],
			'Email' => $fetch['Email'],
			'Address' => $fetch['Address'],
		);
		
		echo json_encode($array);
		*/
	echo json_encode($result);
?>