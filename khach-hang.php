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
  <style>
    .avc{
      margin-bottom: 15px;
      border-radius: 10px;
      outline: none;
    }
  </style>


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Book Management</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">



      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="tac-gia.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tác giả</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="san-pham.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Sản phẩm</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="khach-hang.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Khách hàng</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="nhan-vien.html">
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
          <h1 class="h3 mb-2 text-gray-800">Customer</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
              DataTables documentation</a>.</p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
            Thêm mới
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color: #1f18ff">Thêm Khách Hàng Mới</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class=" row" >
                      <label class="col-sm-4 avc" for="name" style="font-weight: bold">Họ và Tên</label>
                      <input class="col-sm-8 avc" type="text" name="name_customer" id="name" class="form-control" placeholder="" aria-describedby="helpId">



                      <label class="col-sm-4 avc" for="phone" style="font-weight: bold">Số Điện Thoại</label>
                      <input class="col-sm-8 avc" type="text" name="phone_customer" id="phone" class="form-control" placeholder="" aria-describedby="helpId">



                      <label class="col-sm-4 avc" for="email" style="font-weight:bold ">Email</label>
                      <input class="col-sm-8 avc" type="email" name="email_customer" id="email" class="form-control" placeholder="" aria-describedby="helpId">



                      <label class="col-sm-4 avc" for="address" style="font-weight: bold">Địa Chỉ</label>
                      <input class="col-sm-8 avc" type="text" name="addresss_customer" id="address" class="form-control" placeholder="" aria-describedby="helpId">


                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>
                        <a name="" id="" class="btn btn-warning" href="#" role="button">Sửa</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">Xóa</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
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
</body>

</html>