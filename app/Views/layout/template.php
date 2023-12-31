<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts API -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oleo+Script&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-default sidebar accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="sidebar-brand-icon">
                    <img src="/img/logo.svg" alt="">
                    <!-- <h5 class="sidebar-brand-text mx-1">SPP</h5>
                    <sup><i class="fas fa-comment-dollar" aria-hidden="true"></i></sup> -->
                </div>
            </a>
                
                <!-- Heading -->
                <div class="sidebar-heading pt-3">
                    Main Menu
                </div>

                <li class="nav-item">
                    <a class="nav-link text-sidebar" href="/dashboard">
                        <div class="fas fa-fw fa-home mr-1 ml-1"></div>
                        <span>Halaman Utama</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-sidebar" href="/pengiriman">
                        <div class="fas fa-fw fa-box mr-1 ml-1"></div>
                        <span>Pengiriman Barang</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-sidebar" href="/pelacakan">
                        <div class="fas fa-fw fa-map-marker-alt mr-1 ml-1"></div>
                        <span>Pelacakan Barang</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-sidebar" href="/pengambilan">
                        <div class="fas fa-fw fa-clipboard-check mr-1 ml-1"></div>
                        <span>Pengambilan Barang</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-sidebar" href="/pembayaran">
                        <div class="fas fa-fw fa-money-bill-alt mr-1 ml-1"></div>
                        <span>Pembayaran</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-sidebar" href="/pengembalian">
                        <div class="fas fa-fw fa-sync mr-1 ml-1"></div>
                        <span>Pengembalian Barang</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Profile
                </div>

                <!-- Nav Item - Transaksi -->
                <li class="nav-item">
                    <a class="nav-link text-sidebar" href="/profile">
                        <div class="fas fa-fw fa-user mr-1 ml-1"></div>
                        <span>Profile</span>
                    </a>
                </li>

                <!-- Nav Item - History Pembayaran -->
                <li class="nav-item">
                    <a class="nav-link text-sidebar" style="cursor: pointer;" data-toggle="modal" data-target="#logoutModal">
                        <div class="fas fa-fw fa-sign-out-alt mr-1 ml-1"></div>
                        <span>Logout</span>
                    </a>
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
                        <div class="fa fa-bars"></div>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session()->get('nama_petugas'); ?></span>
                                <img class="img-profile rounded-circle" src="/img/undraw_profile_2.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?= $this->renderSection('content'); ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; <?= date('Y'); ?> · PT Cepat Kilat · All rights reserved</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-cancel" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-default" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Sweet Alert 2 -->
    <script src="/vendor/sweetalert/dist/sweetalert2.all.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- My Javascript -->
    <script src="/js/script.js"></script>

</body>

</html>