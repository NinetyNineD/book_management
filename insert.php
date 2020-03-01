 <?php
	include "connect.php";
	if(isset($_POST['btndy'])){
		$username = $_POST['UserName'];
		$password = $_POST['PassWord'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$phonenumber = $_POST['PhoneNumber'];
		$gender = $_POST['Gender'];
		$address = $_POST['Adress'];
		if(isset($username) && isset($password) && isset($name)){
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
			else{echo "<script>alert('Bạn phải điển đầy đủ thông tin!!!')</script>";}
	}
?>
                  <h5 class="modal-title">Thêm mới admin</h5>
                </div>
                <div class="modal-body">
                  <form class="form-inline" method="post">
                    <div class="form-group">
                      <label for="">UserName</label>
                      <input type="text" name="UserName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">(*)</small>
                    </div>
                    <div class="form-group">
                      <label for="">PassWord</label>
                      <input type="text" name="PassWord" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">(*)</small>
                    </div>
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="Name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">(*)</small>
                    </div>
                     <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" name="Email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="form-group">
                      <label for="">PhoneNumber</label>
                      <input type="text" name="PhoneNumber" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="form-group">
                      <label for="">Gender</label>
                      <input type="text" name="Gender" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" name="Address" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" name="btndy">Đồng ý</button>
                </div>
                  </form>