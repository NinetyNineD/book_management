<?php
	require_once("DAO/DBConnect.php");



	$sql = "SELECT * from employee";

function showData($sql){

	$perPage = new PerPage();
	$paginationlink = "getresult.php?page=";	
					
	$page = 1;
	if(!empty($_GET["page"])) {
	$page = $_GET["page"];
	}

	$start = ($page-1)*$perPage->perpage;
	if($start < 0) $start = 0;

	$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
	$faq = runQuery($query);

	if(empty($_GET["rowcount"])) {
	$_GET["rowcount"] = numRows($sql);
	}


	$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink);	
	return $faq;
}
function showPage($sql){

	$perPage = new PerPage();
	$paginationlink = "getresult.php?page=";	
					
	$page = 1;
	if(!empty($_GET["page"])) {
	$page = $_GET["page"];
	}

	$start = ($page-1)*$perPage->perpage;
	if($start < 0) $start = 0;

	$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
	$faq = runQuery($query);

	if(empty($_GET["rowcount"])) {
	$_GET["rowcount"] = numRows($sql);
	}


	$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink);

	return $perpageresult;
}
	$faq = array();
	$faq = showData($sql);

	$output = '';
	if (count($faq) > 0) {
	    $output .= '<div class="table-responsive">
	                            <table class="table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
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
	    foreach ($faq as $item) {
	        $output .= '
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
	                        <button name="'.$item['Code'].'" id="btn-click-edit-employee" class="btn btn-warning" href="#"
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
	    $output .= '</tbody>
	                            </table>
	                        </div>';


	} else {
	    false;
	}
	$perpageresult = showPage($sql);
	if(!empty($perpageresult)) {
		$output .= '<div id="pagination">' . $perpageresult . '</div>';
	}
	echo $output;
	/*
	return $output;
}
	echo showData($sql);


*/
?>
