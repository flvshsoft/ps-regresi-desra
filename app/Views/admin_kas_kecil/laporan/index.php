<?= $this->extend('layout/admin_kas_kecil'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Laporan</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/dashboard') ?>">BERANDA</a></li>
                    <li class="breadcrumb-item active" aria-current="page">LAPORAN</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase"><b>All Laporan</b></h4>
                        <hr>
                        <div class="template-demo">
                            <div class="menu-item">
                                <a href="<?= base_url('/akk/laporan/form_report_assets') ?>"> <i
                                        class="mdi mdi-car-back menu-icons"></i>
                                    <h6>Assets</h6>
                                </a>
                            </div>
                            <hr>
                            <div class="menu-item">
                                <a href="<?= base_url('/akk/laporan/form_closing') ?>">
                                    <i class="mdi mdi-close-box menu-icons"></i>
                                    <h6>Closing</h6>
                                </a>
                            </div>
                            <hr>
                            <div class="menu-item">
                                <a href="<?= base_url('/akk/laporan/deposit') ?>">
                                    <i class="mdi mdi-book menu-icons"></i>
                                    <h6>Laporan Kas Kecil</h6>
                                </a>
                            </div>
                            <hr>
                            <div class="menu-item">
                                <a href="<?= base_url('/akk/laporan/form_tertagih') ?>">
                                    <i class="mdi mdi-file-document menu-icons"></i>
                                    <h6>Laporan Nota Tertagih</h6>
                                </a>
                            </div>
                            <hr>
                            <div class="menu-item">
                                <a href="<?= base_url('/akk/laporan/form_cetak_labarugi') ?>">
                                    <i class="mdi mdi-file-chart menu-icons"></i>
                                    <h6>Laporan Pelunasan Hutang</h6>
                                </a>
                            </div>
                            <hr>
                            <div class="menu-item">
                                <a href="<?= base_url('/akk/laporan/form_print_pengeluaran') ?>">
                                    <i class="mdi mdi-cash-100 menu-icons"></i>
                                    <h6>Laporan Pengeluaran Kantor & Operasional</h6>
                                </a>
                            </div>
                            <hr>
                            <div class="menu-item">
                                <a href="<?= base_url('/akk/laporan/form_report_sales') ?>">
                                    <i class="mdi mdi-file-document menu-icons"></i>
                                    <h6>Laporan Penjualan</h6>
                                </a>
                            </div>
                            <hr>
                            <div class="menu-item">
                                <a href="<?= base_url('/akk/laporan/form_sisa') ?>">
                                    <i class="mdi mdi-camera-metering-matrix menu-icons"></i>
                                    <h6>Laporan Piutang Usaha</h6>
                                </a>
                            </div>
                            <hr>
                            <div class="menu-item">
                                <a href="<?= base_url('/akk/laporan/form_cost_ratio') ?>">
                                    <i class="mdi mdi-sale menu-icons"></i>
                                    <h6>Setoran Salesman & Cost Rasio</h6>
                                </a>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.menu-item {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
}

.menu-item a {
    display: flex;
    align-items: start;
    text-decoration: none;
    color: black;
}

.menu-item i {
    margin-right: 10px;
}
</style>


<?= $this->endSection() ?>