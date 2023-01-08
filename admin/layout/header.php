<?php
if (!isset($_SESSION)) {

    session_start();
    require_once '../config.php';
    require_once '../functions.php';
}

if (isset($_SESSION["email"])) {
    $activeUser = getOneByEmail('users', $_SESSION["email"]);
    $user_id = $activeUser['id'];
}
// $userCart = getCartDetails($user_id);

?>



<body id="page-top" style="background-color: #033702;">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #033702;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html"
                style="background-color: #033702;">
                <div class="sidebar-brand-icon">
                    <img src="../Logo.png" style="width: 40px; background-color: #033702; border:none; ">
                </div>
                <div class="sidebar-brand-text mx-2" style="font-size:20px">Circassian</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-keyboard"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Products
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="AllProducts.php">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Products</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Category
            </div>

            <li class="nav-item">
                <a class="nav-link" href="AddCategories.php">
                    <i class="fas fa-store"></i>
                    <span>Add New Category</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                New Product
            </div>

            <li class="nav-item">
                <a class="nav-link" href="Addproduct.php">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Add New Product</span></a>
            </li>





            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Users
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="allusers.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
                    <span>All Users</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Orders
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="Orders.php">
                <i class="fas fa-barcode"></i>
                    <span>All Orders</span></a>
            </li>


            <!-- Nav Item - Tables -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #D3D3D3;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow"
                    style="background-color: #033702;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto" style="background-color: #033702;">










                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow" style="background-color: #033702;">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-light-600 "><?= $activeUser['f_name'] . " " . $activeUser['l_name'] ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in  bg-secondary"
                                aria-labelledby="userDropdown ">
                                <a class="dropdown-item " href="../profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider  bg-gradient"></div>
                                <a class="dropdown-item " href="../register/includes/logout.inc.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 "></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->