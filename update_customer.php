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
$query = mysqli_query($conn,"SELECT * FROM customer WHERE ID_CUSTOMER='$id'   ");
$row = mysqli_fetch_assoc($query);

if (isset($_POST['UPDATE'])){

    $name_customer_update = $_POST['name_customer_update'];
    $phone_customer_update = $_POST['phone_customer_update'];
    $email_customer_update = $_POST['email_customer_update'];
    $address_customer_update = $_POST['address_customer_update'];


    $update = mysqli_query($conn,"UPDATE customer SET NAME_CUSTOMER='$name_customer_update',PHONE_CUSTOMER='$phone_customer_update',EMAIL_CUSTOMER='$email_customer_update', ADDRESS_CUSTOMER='$address_customer_update' WHERE ID_CUSTOMER='$id'");
    if($update){
        header('location:khach-hang.php');
    }
}

?>
<form method="post">
    <table style="margin: auto;font-weight: bold" width="30%" border="1px solid" cellpadding="10px" >
        <tr>
            <td width="10%">Họ và Tên</td>
            <td width="20%"><input size="30%" type="text" name="name_customer_update" value="<?php echo $row['NAME_CUSTOMER']; ?>"></td>
        </tr>
        <tr>
            <td>Số Điện Thoại</td>
            <td><input type="text" name="phone_customer_update"  value="<?php echo $row['PHONE_CUSTOMER']; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input  size="30%"type="email" name="email_customer_update"  value="<?php echo $row['EMAIL_CUSTOMER']; ?>"></td>
        </tr>
        <tr>
            <td>Địa Chỉ</td>
            <td><input size="30%" type="text" name="address_customer_update"  value="<?php echo $row['ADDRESS_CUSTOMER']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update" name="UPDATE"></td>
        </tr>

    </table>
</form>
</body>
</html>


