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
function getAllList($Table, $ID){
    global $conn;
    Connect();
    $sql = "Select * From ".$Table." order by ".$ID;
    $query = mysqli_query($conn, $sql);
    $result = array();
    while ($row = mysqli_fetch_assoc($query)){
        array_push($result, $row);
    }
    return $result;
}
// FUNCTION ADD
// Add employee
function addEmployee($Name, $DateOfBirth, $Gender, $Position, $PhoneNumber, $Email, $Address){
    global $conn;
    Connect();
    $sql = "Insert Into employee( Name, DateOfBirth, Gender, Position, PhoneNumber, Email, Address ) 
              Values ('$Name', '$DateOfBirth', '$Gender', '$Position', '$PhoneNumber', '$Email', '$Address')";
    $query = mysqli_query($conn, $sql);
    return $query;
    Disconnect();
}
//Search
//Search employee
function searchEmployee($Table,$Search,$ID){
    global $conn;
    Connect();
    $sql = "Select * From ".$Table." 
        Where Name like '%".$Search."%' 
        or DateOfBirth like'%".$Search."%' 
        or Gender like'%".$Search."%' 
        or Position like'%".$Search."%'
        or PhoneNumber like'%".$Search."%'
        or Email like'%".$Search."%'
        or Address like'%".$Search."%'
        order by ".$ID;
    $query = mysqli_query($conn,$sql);
    $result = array();
    while ($row = mysqli_fetch_assoc($query)){
        array_push($result,$row);
    }
    return $result;
}