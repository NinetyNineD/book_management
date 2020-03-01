<?php
	require_once "DAO/DBConnect.php";
	$Code = $_POST['id'];
	$result = array();
  	$result = getAllList("employee", $Code);
  	foreach ($result as $item) {
  		$Code = $item['Code'];
  		$Name = $item['Name'];
  		$DataOfBirth = $item['DataOfBirth'];

  	}
	
?>