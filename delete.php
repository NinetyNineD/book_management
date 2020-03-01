<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete</title>
</head>
<body>
<?php
	include "connect.php";
	$id = $_GET['id'];
	$sql_delete = "delete from admin where Id = '$id'";
	$query = mysqli_query($connect,$sql_delete);
	if($query){
		header("location:Admin.php");
		}
?>
</body>
</html>