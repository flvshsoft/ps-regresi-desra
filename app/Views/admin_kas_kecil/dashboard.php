<?= $this->extend('layout/admin_kas_kecil'); ?>
<?= $this->section('content'); ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper" style="background-color: white;">
        <div class="page-header">
            <h3 class="page-title"><?= $judul ?> </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card" style="background-color: #C0EEEE;">
                <div class="card-body">
                    <div class="row">
                        <!-- Bagian Pertama -->
                        <div class="col-md-6">
                            <h4 class="card-title text-uppercase text-bold">Selamat Datang Di CV.Bintang Distributor
                            </h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>Alamat</h6>
                                    <h6>Telp</h6>
                                    <h6>E-mail</h6>
                                    <h6>Version</h6>
                                </div>
                                <div class="col-md-9">
                                    <h6>: PEKANBARU</h6>
                                    <h6>: ,</h6>
                                    <h6>: </h6>
                                    <h6>: 1.1 </h6>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian Kedua -->
                        <div class="col-md-6">
                            <h4 class="card-title text-uppercase text-bold">detail your access client</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>ISP</h6>
                                    <h6>OS</h6>
                                    <h6>Browser</h6>
                                    <h6>Login Time</h6>
                                </div>
                                <div class="col-md-9">
                                    <h6>: <?= $ipAddress ?></h6>
                                    <h6>: <?= $os ?></h6>
                                    <h6>: <?= $browser ?></h6>
                                    <h6>: <?= $loginTime ?> - (Asia/Jakarta)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="row">
                        <div class="col-md-6 mb-0">
                            <div class="cardx p-1" style="background-color: #5CF0A0;">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-4 text-center">
                                            <i class="mdi mdi-truck-delivery icon-lg"></i>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="card-title text-uppercase text-bold">30</h4>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="card-text">Total Transportation Today</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-0">
                            <div class="cardx p-1" style="background-color: #86D3FF;">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-4 text-center">
                                            <i class="mdi mdi-login icon-lg"></i>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="card-title text-uppercase text-bold">30</h4>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="card-text">User Login Apps Total</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-0">
                            <div class="cardx p-1 mb-0" style="background-color: #F894BA;">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-4 text-center">
                                            <i class="mdi mdi-calendar icon-lg"></i>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="card-title text-uppercase text-bold">30</h4>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="card-text">Attendance Today</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cardx p-1" style="background-color: #F0CC5C;">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-4 text-center">
                                            <i class="mdi mdi-account-check icon-lg"></i>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="card-title text-uppercase text-bold">30</h4>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="card-text">Total Employee</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body shadow-lg">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table table-primary">
                                        <tr>
                                            <th style="font-size: 11px;"> DATA KARYAWAN YANG BELUM MASUK
                                                HARI INI </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="font-size: 11px;">
                                            <td>Jacob</td>
                                        </tr>
                                        <tr style="font-size: 11px;">
                                            <td>Messsy</td>
                                        </tr>
                                        <tr style="font-size: 11px;">
                                            <td>John</td>
                                        </tr>
                                        <tr style="font-size: 11px;">
                                            <td>Peter</td>
                                        </tr>
                                        <tr style="font-size: 11px;">
                                            <td>Dave</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    table {
        width: 100%;
    }

    td {
        width: 50%;
    }
</style>
<?= $this->endSection() ?>