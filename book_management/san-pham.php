<?php
require_once "DAO/DBConnect.php";
$result = array();
$result = getAllList("product");
$count = countListProduct();
$pages = ceil($count/10);
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
    <link href="css/css.css" rel="stylesheet">


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
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-4 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" id="txt-search-product" class="form-control bg-light border-info small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown"
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
                <h1 class="h3 mb-2 text-gray-800">Product</h1>

                <!-- Button trigger modal -->
                <button type="button" id="btn-click-add" class="btn btn-primary btn-lg" data-toggle="modal"
                        data-target="#modelId">
                    <i class="fa fa-plus-circle"></i> Thêm mới
                </button>

                <!-- Modal add -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-group">
                                    <div class="form-group">
                                        <label for="txt-title">Title</label>
                                        <input type="text" name="" id="txt-title" class="form-control" placeholder=""
                                               aria-describedby="helpId" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-category">Category</label>
                                        <input type="text" name="" id="txt-category" class="form-control" placeholder=""
                                               aria-describedby="helpId" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-publisher">Publisher</label>
                                        <input type="text" name="" id="txt-publisher" class="form-control"
                                               placeholder=""
                                               aria-describedby="helpId" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-year">Year of publish</label>
                                        <input type="number" name="" id="txt-year" class="form-control" placeholder=""
                                               aria-describedby="helpId" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="btn-click-save-product" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal update -->
                <div class="modal fade" id="modelIdUpdate" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-group">
                                    <div class="form-group">
                                        <span id="id-up"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-title-up">Title</label>
                                        <input type="text" name="" id="txt-title-up" class="form-control" placeholder=""
                                               aria-describedby="helpId" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-category-up">Category</label>
                                        <input type="text" name="" id="txt-category-up" class="form-control" placeholder=""
                                               aria-describedby="helpId" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-publisher-up">Publisher</label>
                                        <input type="text" name="" id="txt-publisher-up" class="form-control"
                                               placeholder=""
                                               aria-describedby="helpId" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-year-up">Year of publish</label>
                                        <input type="number" name="" id="txt-year-up" class="form-control" placeholder=""
                                               aria-describedby="helpId" value="" required/>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button id="btn-click-save-update-product" class="btn btn-primary">Save</button>
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
                        <div id="list-product">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Publisher</th>
                                    <th>Year of publish</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Publisher</th>
                                    <th>Year of publish</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach ($result

                                as $item){ ?>
                                <tr >
                                    <td ><?php echo $item['id']; ?></td>
                                    <td ><?php echo $item['title']; ?></td>
                                    <td ><?php echo $item['category']; ?></td>
                                    <td ><?php echo $item['publisher']; ?></td>
                                    <td ><?php echo $item['yearofpublish']; ?></td>
                                    <td>

                                        <button data-id = "<?php echo $item['id']; ?>" class="btn-click-edit-product btn btn-warning"
                                                data-toggle="modal" data-target="#modelIdUpdate">
                                            <i class="fa fa-pencil-alt"></i>Sửa
                                        </button>


                                        <button data-id = "<?php echo $item['id']; ?>" class="btn-click-delete-product btn btn-danger"
                                                >
                                            <i class="fa fa-trash"></i>Xóa
                                        </button>
                                    </td>
                                    <?php } ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    <?php for ($i = 1; $i < $pages + 1;$i++){?>
                                    <li class="paginate_button page-item active"><a href="#"
                                                                                    aria-controls="dataTable"
                                                                                    data-dt-idx="<?php echo $i;?>" tabindex="0"
                                                                                    class="page page-link"><?php echo $i;?></a></li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
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
</div>
<!-- End of Content Wrapper -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script src="js/js.js"></script>
</body>

</html>