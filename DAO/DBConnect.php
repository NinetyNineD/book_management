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
// Edit employee,...
function Edit($Table, $Id_Database, $ID){
    global $conn;
    Connect();
    $sql = "Select * From ".$Table." Where ".$Id_Database." = ".$ID;
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}
// Update employee
function updateEmployee($Code, $Name, $DateOfBirth, $Gender, $Position, $PhoneNumber, $Email, $Address){
    global $conn;
    Connect();
    $sql = "Update employee Set Name='$Name', DateOfBirth='$DateOfBirth', Gender='$Gender', Position='$Position', PhoneNumber='$PhoneNumber', Email='$Email', Address='$Address' Where Code=".$Code;
    $query = mysqli_query($conn, $sql);
    return $query;
    Disconnect();
}
// FUNCTION DELETE
// Delete employee,...
function Delete($Table, $Id_Database, $ID){
    // $Table: bảng 
    // $Id_Database: Tên cột khóa chính trong csdl
    // $Name: là nơi mình đặt $item['$Id_Database'] ở nút Xóa khi hiện thị hay ajax - ID gắn với dữ liệu khi hiện thị
    //
    global $conn;
    Connect();
    $sql = "Delete From ".$Table." Where ".$Id_Database." =".$ID;
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
    function runQuery($query) {
        global $conn;
        Connect();
        $result = mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }       
        if(!empty($resultset))
            return $resultset;
    }
    
    function numRows($query) {
        global $conn;
        Connect();
        $result  = mysqli_query($conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;   
    }
//
class PerPage {
    public $perpage;
    
    function __construct() {
        $this->perpage = 5;
    }
    
    function getAllPageLinks($count,$href) {
        $output = '';
        if(!isset($_GET["page"])) $_GET["page"] = 1;
        if($this->perpage != 0)
            $pages  = ceil($count/$this->perpage);
        if($pages>1) {
            if($_GET["page"] == 1) 
                $output = $output . '<span class="link first disabled">Trang Đầu</span><span class="link disabled">Trước</span>';
            else    
                $output = $output . '<a class="link first" onclick="getresult(\'' . $href . (1) . '\')" >Trang Đầu</a><a class="link" onclick="getresult(\'' . $href . ($_GET["page"]-1) . '\')" >Trước</a>';
            
            
            if(($_GET["page"]-3)>0) {
                if($_GET["page"] == 1)
                    $output = $output . '<span id=1 class="link current">1</span>';
                else                
                    $output = $output . '<a class="link" onclick="getresult(\'' . $href . '1\')" >1</a>';
            }
            if(($_GET["page"]-3)>1) {
                    $output = $output . '<span class="dot">...</span>';
            }
            
            for($i=($_GET["page"]-2); $i<=($_GET["page"]+2); $i++)  {
                if($i<1) continue;
                if($i>$pages) break;
                if($_GET["page"] == $i)
                    $output = $output . '<span id='.$i.' class="link current">'.$i.'</span>';
                else                
                    $output = $output . '<a class="link" onclick="getresult(\'' . $href . $i . '\')" >'.$i.'</a>';
            }
            
            if(($pages-($_GET["page"]+2))>1) {
                $output = $output . '<span class="dot">...</span>';
            }
            if(($pages-($_GET["page"]+2))>0) {
                if($_GET["page"] == $pages)
                    $output = $output . '<span id=' . ($pages) .' class="link current">' . ($pages) .'</span>';
                else                
                    $output = $output . '<a class="link" onclick="getresult(\'' . $href .  ($pages) .'\')" >' . ($pages) .'</a>';
            }
            
            if($_GET["page"] < $pages)
                $output = $output . '<a  class="link" onclick="getresult(\'' . $href . ($_GET["page"]+1) . '\')" >Tiếp</a><a  class="link" onclick="getresult(\'' . $href . ($pages) . '\')" >Trang Cuối</a>';
            else                
                $output = $output . '<span class="link disabled">Tiếp</span><span class="link disabled">Trang Cuối</span>';
            
            
        }
        return $output;
        //Trang Cuối: &#8811;            Trang Đầu: &#8810;          Tiếp: >              Trước: &#60;
    }
}
?>