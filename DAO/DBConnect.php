<?php
global $conn;
//connect database
function connect()
{
    global $conn;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "bookmanagement";
// Create connection
    if (!$conn) {
        $conn = mysqli_connect($servername, $username, $password, $databaseName);
        mysqli_set_charset($conn, 'utf8');
    }
}

// disconnect
function disconnect()
{
    global $conn;
    if ($conn) {
        mysqli_close($conn);
    }
}

// add product
function addProduct($title, $category, $publisher, $year)
{
    global $conn;
    connect();
    $sql = "insert into product( title, category , publisher, yearofpublish ) 
              values ('$title', '$category', '$publisher' , '$year')";
    $query = mysqli_query($conn, $sql);
    return $query;
    disconnect();
}

//get All data
function getAllList($table)
{
    global $conn;
    connect();
    $sql = "select * from $table order by id limit 0,10";
    $query = mysqli_query($conn, $sql);
    $result = array();
    while ($row = mysqli_fetch_assoc($query)) {
        array_push($result, $row);
    }
    return $result;
}

//
function countListProduct()
{
    global $conn;
    connect();
    $sql = "select count(*) as count from product ";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $total = $result['count'];
    return $total;

}

function pageProduct($page)
{
    global $conn;
    connect();
    settype($page, 'int');
    $from = ($page - 1) * 10;
    $sql = "select * from product order by id asc limit $from ,10";
    $query = mysqli_query($conn, $sql);
    $result = array();
    while ($row = mysqli_fetch_assoc($query)) {
        array_push($result, $row);
    }
    return $result;

}

//search element
function searchProduct($table, $search)
{
    global $conn;
    connect();
    $sql = "select * from $table 
        where title like '%" . $search . "%' or category like'%" . $search . "%' 
        or publisher like'%" . $search . "%'
        or yearofpublish like'%" . $search . "%'
        order by id";
    $query = mysqli_query($conn, $sql);
    $result = array();
    while ($row = mysqli_fetch_assoc($query)) {
        array_push($result, $row);
    }
    return $result;
}

function updateProductById($id, $title, $category, $publisher, $year)
{
    global $conn;
    connect();
    $sql = "update product set title = '$title',category = '$category' ,publisher = '$publisher', yearofpublish = '$year'
                where id = '$id' ";
    $query = mysqli_query($conn, $sql);
    return $query;
}

function deleteProductById($id)
{
    global $conn;
    connect();
    $sql = "delete from product where id = '$id' ";
    $query = mysqli_query($conn, $sql);
    return $query;
}

function getElemetnbyId($table, $id)
{
    global $conn;
    connect();
    $sql = "select * from $table where id = $id";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}