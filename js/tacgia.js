$(document).ready(function () {

	// Thêm mới
	$('#btSave').click(function () {
        // khai báo biến dùng từ khóa : let,var,const
        //$('#txt-title'): gọi đến phần tử trong DOM(file html)
        // dùng hàm val() để lấy giá trị
		var pageNumber = $('#pageNumber').val();
		var pageCount = $('#pageCount').val();
        var tbAuthorName = $('#tbAuthorName').val();
        var tbMoreInfo = $('#tbMoreInfo').val();
        //
        $.ajax({
            // đường dẫn đến file xử lý
            url: "tac-gia-add.php",
            //phương thức gửi
            method: "post",
            //dữ liệu gửi theo kiểu json {key:value}
            data: {
                tbAuthorName: tbAuthorName,
                tbMoreInfo: tbMoreInfo,
				pageNumber: pageNumber
            },
            success: function (data) {
				// Nếu đang ở trang cuối cùng
				if (pageNumber == pageCount) {
                	//đổ dữ liệu
                	$('#list-author').html(data);
				}
                //đóng modal
                $('#modelId').modal('hide');
            }
        });
    });	
	// Tìm kiếm
	$('#tbSearch').keyup(function () {
        let search = $(this).val();
		var pageNumber = $('#pageNumber').val();
		 
        if (search !== ''){
            $.ajax({
                url:"tac-gia-search.php",
                method:"post",
                data:{
					search:search,
					pageNumber: pageNumber				
				},
                success: function (data) {
                    $('#list-author').html(data);
                }
            })
        }
    });
	
	// Xóa
	$(document).on('click', '#btDelete', function(){
      let id = $(this).attr('name');
	  var pageNumber = $('#pageNumber').val();
      var pageCount = $('#pageCount').val();

      $.ajax({
        url: 'tac-gia-delete.php',
        type: 'POST',
        data: {
          id: id,
		  pageNumber: pageNumber 
        },
        success: function(data){
          //đổ dữ liệu
          $('#list-author').html(data);
        }
      });
    })
	
	// Sửa: đổ dữ liệu ra form
	var idUpdate;
    $(document).on('click', '#btEdit', function(){
		//alert('response');
        let name = $(this).attr('name');
        $.ajax({
            url: 'tac-gia-edit.php',
            type: 'POST',
            data: {
                name: name
            },

            contenttype: "application/json; charset=utf-8",
            datatype: "json",
            
            success: function(response){
				//alert(response);
                let getArray = jQuery.parseJSON(response);
                idUpdate = getArray.id;
                $('#tbAuthorNameUpdate').val(getArray.AuthorName); //alert(getArray.AuthorName);
                $('#tbMoreInfoUpdate').val(getArray.MoreInfo);    //alert(getArray.MoreInfo);             
            }
        })
    });
	
	// Cập nhật Sửa
    $('#btUpdate').on('click', function(){
        let tbAuthorNameUpdate = $('#tbAuthorNameUpdate').val();
        let tbMoreInfoUpdate = $('#tbMoreInfoUpdate').val();
		var pageNumber = $('#pageNumber').val();

        $.ajax({
            url: 'tac-gia-update.php',
            type: 'POST',
            data: {
                id: idUpdate,
                tbAuthorNameUpdate: tbAuthorNameUpdate,
                tbMoreInfoUpdate: tbMoreInfoUpdate,
		  	    pageNumber: pageNumber 
            },
            success: function(data){   
                alert('Cập nhật thành công!');
                $('#list-author').html(data);
                $('#modelId-update').modal('hide');
                idUpdate = "";
            }
        });
    });
});