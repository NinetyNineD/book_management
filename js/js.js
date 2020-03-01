$(document).ready(function () {
    //Sự kiện nút thêm trong form thêm mới
    $('#btn-click-add-employee').click(function () {

        //Khai báo biến dùng từ khóa : let,var,const
        //$('#id'): gọi đến phần tử trong DOM(file html)
        //Dùng hàm val() để lấy giá trị
        let Name = $('#Name').val();
        let DateOfBirth = $('#DateOfBirth').val();
        let Gender = $('#Gender').val();
        let Position = $('#Position').val();
        let PhoneNumber = $('#PhoneNumber').val();
        let Email = $('#Email').val();
        let Address = $('#Address').val();

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