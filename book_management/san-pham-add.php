<?php
require_once "DAO/DBConnect.php";
//lấy data từ data  file js gửi
//$_POST['truyền key trong data(data{key:value})']
$txtTitle = $_POST['txtTitle'];
$txtCategory = $_POST['txtCategory'];
$txtPublisher = $_POST['txtPublisher'];
$txtYear = $_POST['txtYear'];
//function add product truyền tham số
addProduct($txtTitle, $txtCategory, $txtPublisher, $txtYear);
//gọi hàm getAllList('tên bảng') để đổ dữ liệu
$result = getAllList('product');
//dữ liệu cần đổ ajax sẽ lấy dữ liệu mà file này echo ra rồi đổi lại html
$ouput = '';
if (count($result) > 0) {
    $ouput .= '<div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Publisher</th>
                                    <th>Year of publish</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Publisher</th>
                                    <th>Year of publish</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>';
    foreach ($result as $item) {
        $ouput .= '
                   <tr>
                    <td>' . $item['id'] . '</td>
                    <td>' . $item['title'] . '</td>
                    <td >' . $item['category'] . '</td>
                    <td >' . $item['publisher'] . '</td>
                    <td >' . $item['yearofpublish'] . '</td>
                    
                    <td>
                        <button data-id = "' . $item['id'] . '" class="btn-click-edit-product btn btn-warning"
                                                data-toggle="modal" data-target="#modelIdUpdate">
                                            <i class="fa fa-pencil-alt"></i>Sửa
                                        </button>


                                        <button data-id = "' . $item['id'] . '" class="btn-click-delete-product btn btn-danger"
                                                >
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