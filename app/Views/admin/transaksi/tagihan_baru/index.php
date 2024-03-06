<?= $this->extend('layout/admin_kas_kecil'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?= $judul1 ?>
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>"> BERANDA </a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/transaksi') ?>"> TRANSAKSI</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <a class="btn btn-success btn-xs" href="<?= base_url('/akk/transaksi/tagihan_baru/riwayat_penjualan') ?>">
                                    <i class="mdi mdi-book-multiple-variant icon-sm"></i> Proses</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO </th>
                                        <th style=" font-size: 11px;"> NO DO </th>
                                        <th style=" font-size: 11px;"> Salesman </th>
                                        <th style=" font-size: 11px;"> ID Area </th>
                                        <th style=" font-size: 11px;"> Week </th>
                                        <th style=" font-size: 11px;"> Keterangan </th>
                                        <th style=" font-size: 11px;"> Created By </th>
                                        <th style=" font-size: 11px;"> Created At </th>
                                        <th style=" font-size: 11px;"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($model as $value) {
                                    ?>
                                        <tr>
                                            <td style="font-size: 11px;">
                                                <?= $no ?>
                                            </td>
                                            <td style=" font-size: 11px;">
                                                <?= $value['id_sales'] ?>
                                            </td>
                                            <td style=" font-size: 11px;">
                                                <?= $value['nama_lengkap'] ?>
                                            </td>
                                            <td style=" font-size: 11px;">
                                                <?= $value['nama_area'] ?>
                                            </td>
                                            <td style=" font-size: 11px;">
                                                <?= $value['week'] ?>
                                            </td>
                                            <td style=" font-size: 11px;">
                                                <?= $value['keterangan'] ?>
                                            </td>
                                            <td style=" font-size: 11px;">

                                            </td>
                                            <td style=" font-size: 11px;">
                                                <?= $value['tgl_do'] ?>
                                            </td>

                                            <td>
                                                <a class="btn btn-success btn-xs" href="<?= base_url('/akk/transaksi/tagihan_baru/nota/' . $value['id_sales']) ?>">
                                                    <i class="mdi mdi-database-plus icon-sm"></i> </a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>