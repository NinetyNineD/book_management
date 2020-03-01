<?php
global $conn;
//Connect database
function Connect(){
    global $conn;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "bookmanagement";
// Create connection
    if (!$conn) {
        $conn = mysqli_connect($servername,$username,$password,$databaseName);
        mysqli_query($conn,'set names "utf8"');
        mysqli_set_charset($conn,'utf8');
    }
}
// Disconnect
function Disconnect (){
    global $conn;
    if ($conn){
        mysqli_close($conn);
    }
}