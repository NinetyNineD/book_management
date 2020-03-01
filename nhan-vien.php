<?php
  require_once "DAO/DBConnect.php";
  $result = array();
  $result = getAllList("employee","Code");
?>
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
              <input type="text" class="form-control bg-light border-0 small" id="Search" placeholder="Tìm kiếm ..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <!--
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
                -->
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
          <h1 class="h3 mb-2 text-gray-800">Quản Lý Nhân Viên</h1>
          <p class="mb-4">Nguyễn Tấn Dũng</p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId-add-employee">
          	<i class="fa fa-plus-circle"></i>
            Thêm mới
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modelId-add-employee" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Thêm nhân viên mới</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Họ và tên</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="Name-add-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Ngày sinh</label>
                      <div class="col-sm-7">
                      	<input type="date" name="" id="DateOfBirth-add-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Giới tính</label>
                      <div class="col-sm-7">
                      	<input type="radio" name="" id="Gender-add-employee" value="Nam" placeholder="">Nam
                        <input type="radio" name="" id="Gender-add-employee" value="Nữ" placeholder="">Nữ
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Chức vụ</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="Position-add-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Số điện thoại</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="PhoneNumber-add-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-7">
                      	<input type="email" name="" id="Email-add-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Địa chỉ</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="Address-add-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  <button type="button" class="btn btn-primary" id="btn-click-add-employee">Thêm Mới</button>
                </div>
              </div>
            </div>
          </div>
          <!-- DataTales Example -->
          <!-- Edit Employee -->
          <div class="modal fade" id="modelId-update-employee" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Sửa thông tin nhân viên</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Họ và tên</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="Name-update-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Ngày sinh</label>
                      <div class="col-sm-7">
                      	<input type="date" name="" id="DateOfBirth-update-add-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Giới tính</label>
                      <div class="col-sm-7">
                      	<input type="radio" name="" id="Gender-update-employee" value="Nam" placeholder="">Nam
                        <input type="radio" name="" id="Gender-update-employee" value="Nữ" placeholder="">Nữ
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Chức vụ</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="Position-update-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Số điện thoại</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="PhoneNumber-update-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-7">
                      	<input type="email" name="" id="Email-update-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pwd" class="col-sm-3 col-form-label">Địa chỉ</label>
                      <div class="col-sm-7">
                      	<input type="text" name="" id="Address-update-employee" value="" class="form-control" placeholder="">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  <button type="button" class="btn btn-primary" id="btn-click-update-employee">Sửa</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Edit Employee -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh sách nhân viên</h6>
            </div>
            <div class="card-body">
              <div id="list-employee">
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
                  <tbody>
                    <?php  
                      foreach ($result as $item){
                    ?>
                      <tr>
                        <td><?php echo $item['Code']; ?></td>
                        <td><?php echo $item['Name']; ?></td>
                        <td><?php echo $item['DateOfBirth']; ?></td>
                        <td><?php echo $item['Gender']; ?></td>
                        <td><?php echo $item['Position']; ?></td>
                        <td><?php echo $item['PhoneNumber']; ?></td>
                        <td><?php echo $item['Email']; ?></td>
                        <td><?php echo $item['Address']; ?></td>
                        <td>
                          <button name="<?php echo $item['Code']; ?>" id="btn-click-update-emplyee" class="btn btn-warning" href="#" role="button" data-toggle="modal" data-target="#modelId-update-employee">
                            <i class="fa fa-pencil-alt"></i> Sửa
                          </button>
                          <button name="<?php echo $item['Code']; ?>" id="btn-click-delete-employee" class="btn btn-danger" href="#" role="button">
                            <i class="fa fa-trash"></i>Xóa
                          </button>
                        </td>
                    <?php
                      } 
                    ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

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


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/js.js"></script>
</body>

</html>