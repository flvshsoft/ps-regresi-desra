<?php

use CodeIgniter\Session\Session;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?= $judul ?>
    </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url() ?>/public/assets/images/favicon1.ico" />
    <link href="<?= base_url() ?>/public/assets/vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: 0;
    }
    </style>
</head>

<body>
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
            style="background-color:#20A2A0 ;">
            <a class="navbar-brand brand-logo text-white" href="#"> Bintang</a>
            <!-- <a class="navbar-brand brand-logo-mini" href=""><img src="<?//= base_url('') ?>/public/assets/images/logo-mini.png" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize"
                id="sidebarToggle">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                        data-bs-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count-symbol bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-calendar"></i>
                                </div>
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-link-variant"></i>
                                </div>
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black">
                                Hai, <?= Session('userData')['nama_user'] ?> , PKU
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached me-2 text-success"></i> Ganti Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('/logout') ?>">
                            <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" id="sidebarToggle"
                type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#20A2A0 ">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/akk/dashboard">
                        <span class="menu-title">Beranda</span>
                        <i class="mdi mdi-compass menu-icon text-white text-shadow"></i>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-title">Master</span>
                        <i class="menu-arrow text-white"></i>
                        <i class="menu-icon mdi mdi-server-network text-white text-shadow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_area') ?>"> Area</a> </li>
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_asset') ?>">Asset</a></li>
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_bank') ?>">Bank</a></li>
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_product') ?>">Barang</a></li>
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_price') ?>">Harga</a></li>
                            <!-- <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_jenis_cuti') ?>">Jenis Cuti</a></li> -->
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_jenis_harga') ?>">Jenis Harga</a></li>
                            <!-- <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_jenis_izin') ?>">Jenis Izin</a></li> -->
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_customer') ?>">Konsumen</a></li>
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_lokasi') ?>">Lokasi</a></li>
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_partner') ?>">Salesman</a></li>
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/master_supplier') ?>">Supplier</a></li>
                            <li class="nav-item"> <a class="nav-link text-black"
                                    href="<?= base_url('/akk/stock') ?>">Stock</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/akk/transaksi">
                        <span class="menu-title">Transaksi</span>
                        <i class="mdi mdi-cart menu-icon text-white text-shadow"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/akk/penjualan">
                        <span class="menu-title">Penjualan</span>
                        <i class="mdi mdi-file-pdf-box menu-icon text-white text-shadow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/akk/laporan">
                        <span class="menu-title">Laporan</span>
                        <i class="mdi mdi-file-pdf-box menu-icon text-white text-shadow"></i>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/akk/keuangan">
                        <span class="menu-title">Keuangan</span>
                        <i class="mdi mdi-book-open menu-icon text-white text-shadow"></i>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/akk/piutang_usaha">
                        <span class="menu-title">Piutang Usaha</span>
                        <i class="mdi mdi-calendar-check menu-icon text-white text-shadow"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/akk/konsumen">
                        <span class="menu-title">Konsumen</span>
                        <i class="mdi mdi-book-open menu-icon text-white text-shadow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/akk/sdm">
                        <span class="menu-title">SDM</span>
                        <i class="mdi mdi mdi-comment-account-outline menu-icon text-white text-shadow"></i>
                    </a>
                </li>  -->
            </ul>
        </nav>
        <!-- partial -->
        <?= $this->renderSection('content'); ?>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>/public/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url() ?>/public/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>/public/assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url() ?>/public/assets/js/dashboard.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/todolist.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- End custom js for this page -->
    <script src="<?= base_url() ?>/public/assets/vendors/datatables/jquery.dataTables.min.js">
    </script>
    <script src="<?= base_url() ?>/public/assets/vendors/datatables/dataTables.bootstrap4.min.js">
    </script>

    <script>
    $(document).ready(function() {
        $('#sidebar').addClass('hidden');
        $('#sidebarToggle').on('click', function() {
            $('#sidebar').toggleClass('hidden');
        });
    });
    </script>


    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>/public/assets/js/demo/datatables-demo.js"></script>
</body>

</html>