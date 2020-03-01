$(document).ready(function () {
    //Sự kiện nút thêm trong form thêm mới
    $('#btn-click-add-employee').click(function () {

        //Khai báo biến dùng từ khóa : let,var,const
        //$('#id'): gọi đến phần tử trong DOM(file html)
        //Dùng hàm val() để lấy giá trị
        let Name = $('#Name-add-employee').val();
        let DateOfBirth = $('#DateOfBirth-add-employee').val();
        let Gender = $('#Gender-add-employee').val();
        let Position = $('#Position-add-employee').val();
        let PhoneNumber = $('#PhoneNumber-add-employee').val();
        let Email = $('#Email-add-employee').val();
        let Address = $('#Address-add-employee').val();

        $.ajax({
            //Đường dẫn đến file xử lý
            url: "nhan-vien-add.php",
            //Phương thức gửi
            method: "POST",
            //Dữ liệu gửi theo kiểu json {key:value}
            data: {
                Name: Name,
                DateOfBirth: DateOfBirth,
                Gender: Gender,
                Position: Position,
                PhoneNumber: PhoneNumber,
                Email: Email,
                Address: Address
            },
            success: function (data) {
                alert("Thêm nhân viên thành công !");
                //Đổ dữ liệu
                $('#list-employee').html(data);
                //đóng modal
                $('#modelId-add-employee').modal('hide');
            }
        });
    });
    //EDIT
    var Code_Edit_Update;
    var Gender_update_employee;
    $(document).on('click', '#btn-click-edit-employee', function(){
        let name = $(this).attr('name');
        $.ajax({
            url: 'nhan-vien-edit.php',
            type: 'POST',
            data: {
                name: name
            },

            contenttype: "application/json; charset=utf-8",
            datatype: "json",
            
            success: function(response){

                let getArray = jQuery.parseJSON(response);
                Code_Edit_Update = getArray.Code;
                $('#Name-update-employee').val(getArray.Name);
                $('#DateOfBirth-update-employee').val(getArray.DateOfBirth);
                if(getArray.Gender=='Nam'){
                    document.getElementById("Gender-Nam-update-employee").checked='checked';
                    $('#Gender-Nam-update-employee').val(getArray.Gender);
                } else if(getArray.Gender=='Nữ'){
                    document.getElementById("Gender-Nu-update-employee").checked='checked';
                    $('#Gender-Nu-update-employee').val(getArray.Gender);
                }
                Gender_update_employee = getArray.Gender;
                $('#Position-update-employee').val(getArray.Position);
                $('#PhoneNumber-update-employee').val(getArray.PhoneNumber);
                $('#Email-update-employee').val(getArray.Email);
                $('#Address-update-employee').val(getArray.Address);
                
            }
        })
    });
    //Update
    $('#btn-click-update-employee').on('click', function(){
        let Name = $('#Name-update-employee').val();
        let DateOfBirth = $('#DateOfBirth-update-employee').val();

        let Gender = $('input[name=Gender]:checked').val();
        
        let Position = $('#Position-update-employee').val();
        let PhoneNumber = $('#PhoneNumber-update-employee').val();
        let Email = $('#Email-update-employee').val();
        let Address = $('#Address-update-employee').val(); 

        $.ajax({
            url: 'nhan-vien-update.php',
            type: 'POST',
            data: {
                Code: Code_Edit_Update,
                Name: Name,
                DateOfBirth: DateOfBirth,
                Gender: Gender,
                Position: Position,
                PhoneNumber: PhoneNumber,
                Email: Email,
                Address: Address
            },
            success: function(data){   

                alert('Cập nhật thành công!');

                $('#list-employee').html(data);
                
                $('#modelId-update-employee').modal('hide');

                Code_Edit_Update = Gender_update_employee = "";
            }
        });
    });
    $(document).on('click', '#btn-click-delete-employee', function(){

      let Code = $(this).attr('name');

      $.ajax({
        url: 'nhan-vien-delete.php',
        type: 'POST',
        data: {
          Code: Code
        },
        success: function(data){
          alert("Xóa nhân viên thành công !");
          //đổ dữ liệu
          $('#list-employee').html(data);

        }
      });
    })
    //Search prolet search = $(thisu.val
    //Search keyup() khi nhập bàn sẽ gọi ajax luôn
    $('#Search').keyup(function () {
        let Search = $(this).val();
        if (Search !== ''){
            $.ajax({
                url:"nhan-vien-search.php",
                method:"POST",
                data:{Search:Search},
                success: function (data) {
                    $('#list-employee').html(data);
                }
            })
        }
    });
});