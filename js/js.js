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
                //Đổ dữ liệu
                $('#list-employee').html(data);
                //đóng modal
                $('#modelId-add-employee').modal('hide');
            }
        });
    });
    //
    
});