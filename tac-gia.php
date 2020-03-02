<?php
require_once "DAO/DBConnect.php";
$result = array();
$recordCount = getRecordCount("authors");
if (isset($_GET["PageNumber"]))
	$pageNumber = $_GET["PageNumber"];
else
	$pageNumber = 1;
	
$result = getListOfPageIndex("authors", $pageNumber);
?>
<input type="hidden" id="pageNumber" value="<?php echo $pageNumber; ?>">
<input type="hidden" id="pageCount" value="<?php echo (ceil($recordCount / getLimitRecordCountPerPage())); ?>">
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Book Management</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Book Management</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">



      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="tac-gia.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tác giả</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="san-pham.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Sản phẩm</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="khach-hang.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Khách hàng</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="nhan-vien.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Nhân viên</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" id="tbSearch" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->

            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Author</h1>
          <!-- Button trigger modal -->
          <button type="button" id="btn-click-add" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
            Thêm mới
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="">Author Name</label>
                      <input type="text" name="" id="tbAuthorName" class="form-control" placeholder="" aria-describedby="helpId">
                      <!--small id="helpId" class="text-muted">Help text</small-->
                    </div>
					<div class="form-group">
                      <label for="">More Info</label>
                      <input type="text" name="" id="tbMoreInfo" class="form-control" placeholder="" aria-describedby="helpId">
                      <!--small id="helpId" class="text-muted">Help text</small-->
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button id="btClose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button id="btSave" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Edit Form -->
          <div class="modal fade" id="modelId-update" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Update</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Author Name</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="tbAuthorNameUpdate" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">More Info</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="tbMoreInfoUpdate" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="btUpdate">Update</button>
                </div>
              </div>
            </div>
          </div>
          <!-- END of Edit Form -->
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <!--div class="table-responsive"-->
              <div id="list-author">
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
                  <tbody>
                  <?php foreach ($result as $item){ ?>
                    <tr>
                      <td><?php echo $item['id'] ?></td>
                      <td><?php echo $item['AuthorName'] ?></td>
                      <td><?php echo $item['MoreInfo'] ?></td>
                      <td>
                        <!--a name="" id="" class="btn btn-warning" href="#" role="button">Sửa</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">Xóa</a-->
                        <button name="<?php echo $item['id']; ?>" id="btEdit" class="btn btn-warning" href="#" role="button" data-toggle="modal" data-target="#modelId-update">Sửa</button>
                        <!--button name="" id="btn-click-comfirm" class="btn-click-comfirm btn btn-info" href="#" role="button"></button-->
                        <button name="<?php echo $item['id']; ?>" id="btDelete" class="btn btn-danger" href="#" role="button">Xóa</button>
                      </td>
                  <?php } ?>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--/div-->
            </div>
		
        <div class="row">
             <div class="col-sm-12 col-md-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                	<!--Previous Button-->
                                    <li class="paginate_button page-item previous <?php if ($pageNumber == 1) echo 'disabled';
																						else echo '';?>" id="dataTable_previous">
                                        <a href="tac-gia.php?PageNumber=<?php echo ($pageNumber - 1);?>" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
                                           class="page-link">Previous</a></li>
                                    <?php
										// How many page in total
										$pageCount = ceil($recordCount / getLimitRecordCountPerPage());
										// Calculate left pivot
										$left = $pageNumber - floor(getLimitPaginationButtonCount() / 2);
										// Clamp left = 1
										if ($left < 1)
											$left = 1;
										// Calculate right pivot
										$right = $left + getLimitPaginationButtonCount() - 1;
										
										// Calculate redundant offset
										$temp = $pageNumber + floor(getLimitPaginationButtonCount() / 2) - $pageCount;
										// If redundant offset > 0 => compensate left
										if ($temp > 0){
											$left -= $temp;
											if ($left < 1)	// Clamp left
												$left = 1;
										}
										
										// Clamp right = $pageCount
										if ($right > $pageCount)
											$right = $pageCount;
											
										// Loop to create Pagination buttons
										for ($i = $left; $i <= $right; $i++) {
									?>
                                    	 <li class="paginate_button page-item <?php if ($pageNumber == $i) echo 'active';?>"><a href="tac-gia.php?PageNumber=<?php echo $i;?>"
                                                                                  aria-controls="dataTable"
                                                                                  data-dt-idx="1" tabindex="0"
                                                                                  class="page-link"><?php echo $i;?></a></li>
                                    <?php
										}
									?>
                                    <!--Next Button-->
                                    <li class="paginate_button page-item next <?php if ($pageNumber == $pageCount) echo 'disabled';
																					else echo '';?>" id="dataTable_next"><a href="tac-gia.php?PageNumber=<?php echo ($pageNumber + 1);?>"
                                                                                                      aria-controls="dataTable"
                                                                                                      data-dt-idx="7"
                                                                                                      tabindex="0"
                                                                                                      class="page-link">Next</a>
                                    </li>
                                </ul>
                  </div>
             </div>
        </div>
        
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Page Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">

          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/js.js"></script>
</body>

</html>