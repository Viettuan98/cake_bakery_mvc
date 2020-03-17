<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
     <!-- Bootstrap 3.3.7 -->
   <!--  <link rel="stylesheet" href="Assets/Backend/Admin/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="Assets/Backend/Admin/vendors/mdi/css/materialdesignicons.min.css">
    
    <link rel="stylesheet" href="Assets/Backend/Admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
   
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="Assets/Backend/Admin/css/style.css">
    <!-- load ckeditor -->
    <script type="text/javascript" src="Assets/Backend/ckeditor/ckeditor.js"></script>

    <!-- End layout styles -->
    <link rel="shortcut icon" href="Assets/Backend/Admin/images/favicon.png" />
 
    
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.php?area=Backend"><img src="Assets/Backend/Admin/images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="Assets/Backend/Admin/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="Assets/Backend/Admin/images/faces/face1.jpg" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black"></p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?area=Backend&controller=Logout">
                                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </nav>
                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                    <!-- partial:partials/_sidebar.html -->
                    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                        <ul class="nav">
                            <li class="nav-item nav-profile">
                                <a href="#" class="nav-link">
                                    <div class="nav-profile-image">
                                        <img src="Assets/Backend/Admin/images/faces/face1.jpg" alt="profile">
                                        <span class="login-status online"></span>
                                        <!--change to offline or busy as needed-->
                                    </div>
                                    <div class="nav-profile-text d-flex flex-column">
                                        <span class="font-weight-bold mb-2">Việt Tuấn</span>
                                        <span class="text-secondary text-small">Project Manager</span>
                                    </div>
                                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?area=Backend">
                                    <span class="menu-title">Trang Chủ</span>
                                    <i class="mdi mdi-home menu-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?area=Backend&controller=Order">
                                    <span class="menu-title">Đơn Hàng</span>
                                    <i class="mdi mdi-cart menu-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?area=Backend&controller=Category">
                                    <span class="menu-title">Danh Mục Sản Phẩm</span>
                                    <i class="mdi mdi-wallet-giftcard menu-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
                                    <span class="menu-title">Quản Lý Sản Phẩm</span>
                                    <i class="menu-arrow"></i>
                                    <i class="mdi mdi-cart-plus menu-icon"></i>
                                </a>
                                <div class="collapse" id="ui-product">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link" href="index.php?area=Backend&controller=Products&action=add">Thêm Sản Phẩm</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="index.php?area=Backend&controller=Products">Danh Sách Sản Phẩm</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?area=Backend&controller=News">
                                    <span class="menu-title">Quản Lý Tin Tức</span>
                                    <i class="mdi mdi-table-large menu-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?area=Backend&controller=User">
                                    <span class="menu-title">Quản Lý User</span>
                                    <i class="mdi mdi-account-box menu-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- partial -->
                    <div class="main-panel">
                        <div class="content-wrapper">
                            
                                <div class="content">
                                    <?php echo $this->view; ?>
                                </div>
                            </div>
                            <!-- content-wrapper ends -->
                            <!-- partial:partials/_footer.html -->
                            <footer class="footer">
                                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                                </div>
                            </footer>
                            <!-- partial -->
                        </div>
                        <!-- main-panel ends -->
                    </div>
                    <!-- page-body-wrapper ends -->
                </div>
                <!-- container-scroller -->

                <!-- plugins:js -->
                
                <script src="Assets/Backend/Admin/vendors/js/vendor.bundle.base.js"></script>
                <!-- endinject -->

                <!-- Plugin js for this page -->
                <script src="Assets/Backend/Admin/vendors/chart.js/Chart.min.js"></script>
                <!-- End plugin js for this page -->

                <!-- inject:js -->
                <script src="Assets/Backend/Admin/js/off-canvas.js"></script>
                <script src="Assets/Backend/Admin/js/hoverable-collapse.js"></script>
                <!-- Bootstrap 3.3.7 -->
                <!-- <script src="Assets/Backend/Admin/js/bootstrap.min.js"></script> -->
                <script src="Assets/Backend/Admin/js/misc.js"></script>
                <!-- endinject -->
                
                <!-- Custom js for this page -->
                <script src="Assets/Backend/Admin/js/dashboard.js"></script>
                <script src="Assets/Backend/Admin/js/todolist.js"></script>
                <!-- End custom js for this page -->
            </body>

            </html>