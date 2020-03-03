<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookmanagement');
$id = $_GET['ID_CUSTOMER'];
$sql = mysqli_query($conn,"DELETE FROM customer WHERE ID_CUSTOMER='$id'");
if($sql){
    header('location:khach-hang.php');
}

?>
</body>
</html>