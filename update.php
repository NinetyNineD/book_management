  <?php
	include "connect.php";
	$id = $_GET['id'];
	$sql_select = "select * from admin where Id = '$id'";
	$query_select = mysqli_query($connect,$sql_select);
	$array= mysqli_fetch_array($query_select);
	if(isset($_POST['btncn'])){
		$username = $_POST['UserName'];
		$password = $_POST['PassWord'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$phonenumber = $_POST['PhoneNumber'];
		$gender = $_POST['Gender'];
		$address = $_POST['Address'];
		if(!empty($username) && !empty($password) && !empty($name)){
						$update = "update admin set UserName='$username',PassWord='$password',Name='$name',Email='$email',PhoneNumber='$phonenumber',Gender='$gender',Address='$address' where Id='$id'";
						$query_update = mysqli_query($connect,$update);
						if($query_update){
							echo "<script>alert('Update thành công!!!')</script>";
							header("location:index.php");
						}
							else{
								echo "<script>alert('Update Thất Bại!!!')</script>";
								}
					}
			else{echo "<script>alert('Bạn phải điển thông tin vào ô có dấu *!!!')</script>";}
	}
?>
            
                </div>
                <div class="modal-body">
                  <form class="form-inline" method="post">
                    <div class="form-group">
                      <label for="">UserName</label>
                      <input type="text" name="UserName" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[1]; ?>">
                      <small id="helpId" class="text-muted">(*)</small>
                    </div>
                    <div class="form-group">
                      <label for="">PassWord</label>
                      <input type="text" name="PassWord" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[2]; ?>">
                      <small id="helpId" class="text-muted">(*)</small>
                    </div>
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="Name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[3]; ?>">
                      <small id="helpId" class="text-muted">(*)</small>
                    </div>
                     <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" name="Email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[4]; ?>">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="form-group">
                      <label for="">PhoneNumber</label>
                      <input type="text" name="PhoneNumber" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[5]; ?>">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="form-group">
                      <label for="">Gender</label>
                      <input type="text" name="Gender" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[6]; ?>">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" name="Address" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[7]; ?>">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                     <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" name="btncn">Cập nhật</button>
                </div>
                  </form>