<?php
require_once "DAO/DBConnect.php";
$tbAuthorName = $_POST['tbAuthorName'];
$tbMoreInfo = $_POST['tbMoreInfo'];
$pageNumber = $_POST['pageNumber'];
addAuthor($tbAuthorName, $tbMoreInfo);
$result = getListOfPageIndex('authors', $pageNumber);
$output = '';
if (count($result) > 0) {
    $output .= '<div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                      				<th>Author Name</th>
									<th>More Info</th>
									<th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
								    <th>Author Name</th>
								    <th>More Info</th>
								    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>';
    foreach ($result as $item) {
        $output .= '
                <tr>
                    <td>'.$item['id'].'</td>
                    <td>'.$item['AuthorName'].'</td>
                    <td>'.$item['MoreInfo'].'</td>
                    
                    <td>
                        <button name="'.$item['id'].'" id="btEdit" class="btn btn-warning" href="#" role="button" data-toggle="modal" data-target="#modelId-update">Sửa</button>
                        <button name="'.$item['id'].'" id="btDelete" class="btn btn-danger" href="#" role="button">Xóa</button>
                    </td>  
                </tr>
         ';
    }
	
    $output .= '</tbody>
             </table>
          </div>';
		  
    echo $output;
	echo '<script>alert("Added successfully!")</script>';
} else {
	echo '<script>alert("Added failed!")</script>';
    false;
}