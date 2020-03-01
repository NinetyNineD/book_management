<?php
require_once "DAO/DBConnect.php";
$Search = $_POST['Search'];
$result = searchEmployee('employee', $Search, 'Code');
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
                                role="button" data-toggle="modal" data-target="#modelId-update-employee">
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
    getAllList('employee', 'Code');
}