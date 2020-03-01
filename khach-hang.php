<?php
    ob_start();
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
                  <?php
                  $conn = mysqli_connect('localhost', 'root', '', 'bookmanagement');
                  if (isset($_POST['INSERT'])){
                      $name_customer_insert = $_POST['name_customer_insert'];
                      $phone_customer_insert = $_POST['phone_customer_insert'];
                      $email_customer_insert = $_POST['email_customer_insert'];
                      $address_customer_insert = $_POST['address_customer_insert'];
                      $insert = mysqli_query($conn,"INSERT INTO customer(ID_CUSTOMER,NAME_CUSTOMER,PHONE_CUSTOMER,EMAIL_CUSTOMER,ADDRESS_CUSTOMER) VALUE ('',N'$name_customer_insert',N'$phone_customer_insert',N'$email_customer_insert',N'$address_customer_insert')");
                      if($insert){
                          header('location:khach-hang.php');
                          ob_end_flush();
                      }
                  }
                  ?>
                <div class="modal-body">
                  <form class=" row" method="post" >

                      <label class="col-sm-4 avc" for="name" style="font-weight: bold">Họ và Tên</label>
                      <input class="col-sm-8 avc" type="text" name="name_customer_insert" id="name" class="form-control" placeholder="Nhập họ và tên" aria-describedby="helpId">

                      <label class="col-sm-4 avc" for="phone" style="font-weight: bold">Số Điện Thoại</label>
                      <input class="col-sm-8 avc" type="text" name="phone_customer_insert" id="phone" class="form-control" placeholder="Nhập số điện thoại" aria-describedby="helpId">

                      <label class="col-sm-4 avc" for="email" style="font-weight:bold ">Email</label>
                      <input class="col-sm-8 avc" type="email" name="email_customer_insert" id="email" class="form-control" placeholder="Nhập email" aria-describedby="helpId">

                      <label class="col-sm-4 avc" for="address" style="font-weight: bold">Địa Chỉ</label>
                      <input class="col-sm-8 avc" type="text" name="address_customer_insert" id="address" class="form-control" placeholder="Nhập địa chỉ" aria-describedby="helpId">

                      <div class="modal-footer">
                          <input type="submit" name="INSERT" value="SAVE" style="background-color: #9afff5 ; margin-right: 10px">
                      </div>
                  </form>

                </div>

              </div>
            </div>
          </div>
          <!-- DataTales Example -->

            <?php
            // PHẦN XỬ LÝ PHP
            // BƯỚC 1: KẾT NỐI CSDL
            $conn = mysqli_connect('localhost', 'root', '', 'bookmanagement');

            // BƯỚC 2: TÌM TỔNG SỐ RECORDS
            $result = mysqli_query($conn, 'select count(ID_CUSTOMER) as total from customer');
            $row = mysqli_fetch_assoc($result);
            $total_records = $row['total'];

            // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 10;


            // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);

            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }

            // Tìm Start
            $start = ($current_page - 1) * $limit;

            // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
            $result = mysqli_query($conn, "SELECT * FROM customer LIMIT $start, $limit");

            ?>
            <div>
                <table width="100%" border="1px" cellspacing="0px" cellpadding="20px">
                    <tr>

                        <th width="20%">Name</th>
                        <th width="10%">Phone</th>
                        <th width="30%">Email</th>
                        <th width="30%">Address</th>
                        <th colspan="2" width="10%">Option</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>

                            <td><?php echo $row["NAME_CUSTOMER"] ?></td>
                            <td><?php echo $row["PHONE_CUSTOMER"] ?></td>
                            <td><?php echo $row["EMAIL_CUSTOMER"] ?></td>
                            <td><?php echo $row["ADDRESS_CUSTOMER"] ?></td>
                            <td><a href="update_customer.php?ID_CUSTOMER=<?php echo $row['ID_CUSTOMER'] ?>">Update</a></td>

                            <td><a href="delete_customer.php?ID_CUSTOMER=<?php echo $row['ID_CUSTOMER']?>" onclick="if(confirm('Do you Sure ?')) return true; else return false">Delete</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div  style="text-align: center; margin: auto">
                <?php
                // PHẦN HIỂN THỊ PHÂN TRANG
                // BƯỚC 7: HIỂN THỊ PHÂN TRANG

                // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                if ($current_page > 1 && $total_page > 1){
                    echo '<a href="khach-hang.php?page='.($current_page-1).'">Prev</a> | ';
                }

                // Lặp khoảng giữa
                for ($i = 1; $i <= $total_page; $i++){
                    // Nếu là trang hiện tại thì hiển thị thẻ span
                    // ngược lại hiển thị thẻ a
                    if ($i == $current_page){
                        echo '<span>'.$i.'</span> | ';
                    }
                    else{
                        echo '<a href="khach-hang.php?page='.$i.'">'.$i.'</a> | ';
                    }
                }

                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                if ($current_page < $total_page && $total_page > 1){
                    echo '<a href="khach-hang.php?page='.($current_page+1).'">Next</a> | ';
                }
                ?>
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