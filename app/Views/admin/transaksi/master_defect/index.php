<?= $this->extend('layout/admin'); ?>
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
                    <li class="breadcrumb-item"><a href="<?= base_url('/transaksi') ?>"> TRANSAKSI</a></li>
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
                                <a class="btn btn-success btn-xs" href="<?= base_url('/defect') ?>">
                                    <i class="mdi mdi-database-plus btn-icon-prepend"></i> Proses</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO </th>
                                        <th style=" font-size: 11px;"> SAMPLE CODE </th>
                                        <th style=" font-size: 11px;"> UNIT </th>
                                        <th style=" font-size: 11px;"> NILAI </th>
                                        <th style=" font-size: 11px;"> REMARK </th>
                                        <th style=" font-size: 11px;"> CREATED BY </th>
                                        <th style=" font-size: 11px;"> CREATED AT </th>
                                        <th style=" font-size: 11px;"> PRINT </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            1
                                        </td>
                                        <td style=" font-size: 11px;">
                                            240000004
                                        </td>
                                        <td style="font-size: 11px;">
                                            PKU
                                        </td>
                                        <td style=" font-size: 11px;">
                                            28137500
                                        </td>
                                        <td style="font-size: 11px;">
                                            Barang Deffect priode 1 tahun
                                        </td>
                                        <td style=" font-size: 11px;">
                                            mukmin
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-12-24
                                        </td>
                                        <td style=" font-size: 11px;">
                                            <a href="#"><i class="mdi mdi-file-pdf icon-md"></i></a>
                                        </td>
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


<?= $this->endSection() ?>