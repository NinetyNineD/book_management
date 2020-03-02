$(document).ready(function () {

    //add product
    $('#btn-click-save-product').click(function () {
        // khai báo biến dùng từ khóa : let,var,const
        //$('#txt-title'): gọi đến phần tử trong DOM(file html)
        // dùng hàm val() để lấy giá trị

        let txtTitle = $('#txt-title').val();
        let txtCategory = $('#txt-category').val();
        let txtPublisher = $('#txt-publisher').val();
        let txtYear = $('#txt-year').val();
        //
        $.ajax({
            // đường dẫn đến file xử lý
            url: "san-pham-add.php",
            //phương thức gửi
            method: "post",
            //dữ liệu gửi theo kiểu json {key:value}
            data: {
                txtTitle: txtTitle,
                txtCategory: txtCategory,
                txtPublisher: txtPublisher,
                txtYear: txtYear
            },
            success: function (data) {
                //đổ dữ liệu
                $('#list-product').html(data);
                //đóng modal
                $('#modelId').modal('hide');
            }
        });
    });
    //search prolet search = $(this).val()
    // search keyup() khi nhập bàn sẽ gọi ajax luôn
    $('#txt-search-product').keyup(function () {
        let search = $(this).val();
        if (search !== '') {
            $.ajax({
                url: "san-pham-search.php",
                method: "post",
                data: {search: search},
                success: function (data) {
                    $('#list-product').html(data);
                }
            })
        }
    });
    //delete product
    $('.btn-click-delete-product').on('click', function () {

        let id = $(this).attr('data-id');

        if (confirm('Bạn có muốn xóa không')) {
            $(this).parent().parent().hide();
            $.ajax({
                url: "san-pham-delete.php",
                method: "get",
                data: {id: id},
                success: function () {
                }
            });
        }
    });
    //update product
    $('.btn-click-edit-product').on('click', function () {
        var id = $(this).attr('data-id');
        //lấy dữ liệu
        let title = $(this).parent().prev().prev().prev().prev().text();
        let category = $(this).parent().prev().prev().prev().text();
        let publisher = $(this).parent().prev().prev().text();
        let year = $(this).parent().prev().text();
        // alert(title);
        //đổ lên modal update
        $('#id-up').val(id);
        $('#txt-title-up').val(title);
        $('#txt-category-up').val(category);
        $('#txt-publisher-up').val(publisher);
        $('#txt-year-up').val(year);
        // alert(txtTitle);


    });
    $('#btn-click-save-update-product').click(function () {
        let id = $('#id-up').val();
        let txtTitle = $('#txt-title-up').val();
        let txtCategory = $('#txt-category-up').val();
        let txtPublisher = $('#txt-publisher-up').val();
        let txtYear = $('#txt-year-up').val();
        $.ajax({
            url: "san-pham-update.php",
            method: "get",
            data: {
                id: id,
                txtTitle: txtTitle,
                txtCategory: txtCategory,
                txtPublisher: txtPublisher,
                txtYear: txtYear
            },
            success: function (data) {
                $('#list-product').html(data);
                $('#modelIdUpdate').modal('hide');
            }
        });
    });
    // page
    $('.page').click(function () {
        let pageNumber = $(this).attr('data-dt-idx');
        $.ajax({
            url:"phan-trang-pro.php",
            method:"post",
            data:{pageNumber:pageNumber},
           success: function (data) {
            $('#list-product').html(data);
           }
        });
    })
});
