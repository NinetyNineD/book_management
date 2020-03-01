<?php
require_once "DAO/DBConnect.php";
//Lấy data từ data  file js gửi
//$_POST['truyền key trong data(data{key:value})']

$Name = $_POST['Name-add-employee'];
$DateOfBirth = $_POST['DateOfBirth-add-employee'];
$Gender = $_POST['Gender-add-employee'];
$Position = $_POST['Position-add-employee'];
$PhoneNumber = $_POST['PhoneNumber-add-employee'];
$Email = $_POST['Email-add-employee'];
$Address = $_POST['Address-add-employee'];

//Function add employee truyền tham số
addEmployee($Name, $DateOfBirth, $Gender, $Position, $PhoneNumber, $Email, $Address);

//Gọi hàm getAllList('tên bảng','khóa id') để đổ dữ liệu
$result = getAllList('employee','Code');
//Dữ liệu cần đổ ajax sẽ lấy dữ liệu mà file này echo ra rồi đổi lại html
$ouput = '';
if (count($result) > 0) {
    $ouput .= '<div class="table-responsive">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Chức vụ</th>
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Mã</th>
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Chức vụ</th>
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                </tr>
                                </tfoot>
                                <tbody>';
    foreach ($result as $item) {
        $ouput .= '
                   <tr>
                    <td>'.$item['Code'].'</td>
                    <td>'.$item['Name'].'</td>
                    <td>'.$item['DateOfBirth'].'</td>
                    <td>'.$item['Gender'].'</td>
                    <td>'.$item['Position'].'</td>
                    <td>'.$item['PhoneNumber'].'</td>
                    <td>'.$item['Email'].'</td>
                    <td>'.$item['Address'].'</td>
                    
                    <td>
                        <button name="'.$item['Code'].'" id="btn-click-update-emloyee" class="btn btn-warning" href="#"
                                role="button">
                            <i class="fa fa-pencil-alt"></i> Sửa
                        </button>
                        <button name="'.$item['Code'].'" id="btn-click-delete-employee" class="btn btn-danger" href="#"
                                role="button">
                            <i class="fa fa-trash"></i>Xóa
                        </button>
                    </td>
                   
                </tr>
                                ';
    }
    $ouput .= '</tbody>
                            </table>
                        </div>';


    echo $ouput;
} else {
    false;
}