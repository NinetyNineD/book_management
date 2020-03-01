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
// Get All Data
function getAllList($Table,$ID){
    global $conn;
    connect();
    $sql = "Select * From $Table order by ".$ID;
    $query = mysqli_query($conn, $sql);
    $result = array();
    while ($row = mysqli_fetch_assoc($query)){
        array_push($result, $row);
    }
    return $result;
}