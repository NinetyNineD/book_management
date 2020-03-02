<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin</title>
</head>
<body>

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
     
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
      
          </button>

          <!-- Topbar Search -->

          <!-- Topbar Navbar -->
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Admin</h1>
           <?php
	include "connect.php";
	if(isset($_POST['btndy'])){
		$username = $_POST['UserName'];
		$password = $_POST['PassWord'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$phonenumber = $_POST['PhoneNumber'];
		$gender = $_POST['Gender'];
		$address = $_POST['Address'];
		if(!empty($username) && !empty($password) && !empty($name)){
				$sql = "select UserName from admin where UserName = '$username'";
				$query = mysqli_query($connect,$sql);
				$row = mysqli_num_rows($query);
				if($row == 0){
						$sqlinsert = "insert into admin (UserName,PassWord,Name,Email,PhoneNumber,Gender,Address) value('$username','$password',N'$name','$email','$phonenumber','$gender',N'$address')";
						$query_insert = mysqli_query($connect,$sqlinsert);
						if($query_insert){
							echo "<script>alert('Thêm mới thành công!!!')</script>";
							header("location:Admin.php");
						}
							else{
								echo "<script>alert('Tạo Tài Khoản Thất Bại!!!')</script>";
								}
					}
					else {
						echo "<script>alert('Tài khoản đã tồn tại, mời nhập tài khoản khác!!!')</script>";
					}
			}
			else{echo "<script>alert('Bạn phải điển thông tin vào ô có dấu *!!!')</script>";}
	}
?>
                  <h5 class="modal-title">Thêm mới admin :</h5>
                </div>
                <div class="modal-body">
                  <form class="form-inline" method="post">
                    <div class="form-group">
                      <label for="">UserName</label>
                      <input type="text" name="UserName" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(!empty($username)) echo $username; else echo ""; ?>">
                      <small id="helpId" class="text-muted">(*)</small>
                    </div>
                    <div class="form-group">
                      <label for="">PassWord</label>
                      <input type="text" name="PassWord" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(!empty($password)) echo $password; else echo ""; ?>">
                      <small id="helpId" class="text-muted">(*)</small>
                    </div>
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="Name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(!empty($name)) echo $name; else echo ""; ?>">
                      <small id="helpId" class="text-muted">(*)</small>
                    </div>
                     <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" name="Email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(!empty($email)) echo $email; else echo ""; ?>">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="form-group">
                      <label for="">PhoneNumber</label>
                      <input type="text" name="PhoneNumber" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(!empty($phonenumber)) echo $phonenumber; else echo ""; ?>">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="form-group">
                      <label for="">Gender</label>
                      <input type="text" name="Gender" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(!empty($gender)) echo $gender; else echo ""; ?>">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" name="Address" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(!empty($address)) echo $address; else echo ""; ?>">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" name="btndy">Đồng ý</button>
                </div>
                  </form>
          <!-- Button trigger modal -->

          <!-- Modal -->
          <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
               
                </div>
               
              </div>
            </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <?php
			  include "connect.php";
	$sql_select = "select * from admin";
	$query = mysqli_query($connect,$sql_select);
	
?>
                <table border="1px">
    	<tr>
        	<th>Id</th>
            <th>UserName</th>
            <th>PassWord</th>
            <th>Name</th>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>Gender</th>
            <th>Address</th>
         </tr>
<?php 
	while($array = mysqli_fetch_array($query)){?>
		 <tr>
		 	<td><?php echo $array[0]; ?></td>
            <td><?php echo $array[1]; ?></td>
            <td><?php echo $array[2]; ?></td>
            <td><?php echo $array[3]; ?></td>
            <td><?php echo $array[4]; ?></td>
            <td><?php echo $array[5]; ?></td>
            <td><?php echo $array[6]; ?></td>
            <td><?php echo $array[7]; ?></td>
            <td><a href="update.php?id=<?php echo $array[0]; ?>">Update</a></td>
            <td><a href="delete.php?id=<?php echo $array[0]; ?>">Delete</a></td>
         </tr>
<?php } ?>
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
</body>
</html>