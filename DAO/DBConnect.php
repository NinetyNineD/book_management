<?php
global $conn;
function connect(){
    global $conn;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "bookmanagement";
// Create connection
    if (!$conn) {
        $conn = mysqli_connect($servername,$username,$password,$databaseName);
        mysqli_set_charset($conn,'utf8');
    }
}
// disconnect
function disconnect (){
    global $conn;
    if ($conn){
        mysqli_close($conn);
    }
}
function addProduct($title, $category, $publisher, $year){
    global $conn;
    connect();
    $sql = "insert into product( title, category , publisher, yearofpublish ) 
              values ('$title', '$category', '$publisher' , '$year')";
    $query = mysqli_query($conn, $sql);
    return $query;
    disconnect();
}

function addAuthor($authorName, $moreInfo){
    global $conn;
    connect();
    $sql = "INSERT INTO authors(AuthorName, MoreInfo) 
            VALUES ('$authorName', '$moreInfo')";
    $query = mysqli_query($conn, $sql);
    return $query;
    disconnect();
}

function getListOfPageIndex($table, $pageIndex){
	global $conn;
    connect();
	$startFromRecordIndex = ($pageIndex - 1) * getLimitRecordCountPerPage();
	$limitRecord = getLimitRecordCountPerPage();
    $sql = "SELECT * FROM $table LIMIT $startFromRecordIndex, $limitRecord";
    $query = mysqli_query($conn, $sql);
	$result = array();
    while ($row = mysqli_fetch_assoc($query)){
        array_push($result, $row);
    }
    return $result;
}
function getRecordCount($table){
	global $conn;
    connect();
	$sql = "SELECT COUNT(id) AS total 
			FROM $table";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($query);
	return $row['total'];
}

function getLimitPaginationButtonCount() {
	return 5;
}

function getLimitRecordCountPerPage(){
	return 10;
}

function getAllList($table){
    global $conn;
    connect();
    $sql = "select * from $table order by id";
    $query = mysqli_query($conn, $sql);
    $result = array();
    while ($row = mysqli_fetch_assoc($query)){
        array_push($result, $row);
    }
    return $result;
}

//search element
function searchElement($table,$search){
    global $conn;
    connect();
    $sql = "select * from $table 
        where title like '%".$search."%' or category like'%".$search."%' 
        or publisher like'%".$search."%'
        or yearofpublish like'%".$search."%'
        order by id";
    $query = mysqli_query($conn,$sql);
    $result = array();
    while ($row = mysqli_fetch_assoc($query)){
        array_push($result,$row);
    }
    return $result;
}

function searchAuthor($search){
    global $conn;
    connect();
    $sql = "SELECT * FROM authors 
        WHERE AuthorName like '%".$search."%' OR MoreInfo like'%".$search."%' 
        ORDER BY id";
    $query = mysqli_query($conn,$sql);
    $result = array();
    while ($row = mysqli_fetch_assoc($query)){
        array_push($result,$row);
    }
    return $result;
}

function delete($Table, $Id_Database, $ID){
    // $Table: bảng 
    // $Id_Database: Tên cột khóa chính trong csdl
    // $Name: là nơi mình đặt $item['$Id_Database'] ở nút Xóa khi hiện thị hay ajax - ID gắn với dữ liệu khi hiện thị
    //
    global $conn;
    connect();
    $sql = "Delete From ".$Table." Where ".$Id_Database." = ".$ID;
    $query = mysqli_query($conn, $sql);
    return $query;
}

function Edit($Table, $Id_Database, $ID){
    global $conn;
    Connect();
    $sql = "Select * From ".$Table." Where ".$Id_Database." = ".$ID;
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}

function updateAuthor($id, $authorName, $moreInfo){
    global $conn;
    connect();
    $sql = "UPDATE authors 
			SET AuthorName='$authorName', MoreInfo='$moreInfo' 
			WHERE id=".$id;
    $query = mysqli_query($conn, $sql);
    return $query;
}

/*function insert($table, $arrayColumns, $arrayField){
	$sql = "INSERT INTO $table(";
	for ($i = 0; $i < $arrayColumns.Length; $i++) {
		$sql += "$arrayColumns[i]";
		if ($i < $arrayColumns.Length - 1)
			$sql += ",";
	}
	$sql += ") ";
	$sql += "VALUES(";
	for ($i = 0; $i < $arrayField.Length; $i++) {
		$sql += "'$arrayField[i]'";
		if ($i < $arrayField.Length - 1)
			$sql += ", ";
	}
	$sql += ")";
	
	// Query blah blah
}*/

