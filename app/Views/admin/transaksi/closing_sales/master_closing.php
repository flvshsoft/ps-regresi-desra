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
                    <li class="breadcrumb-item"><a href="<?= base_url('/closing_sales') ?>"> SALES</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group col-12">
                            <a href="#"><i class="mdi mdi-file-excel icon-md text-success"></i></a>
                            <a href=#><i class="mdi mdi-file-pdf icon-md text-danger"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO INVOICE </th>
                                        <th style=" font-size: 11px;"> NO DO </th>
                                        <th style=" font-size: 11px;"> SALESMAN </th>
                                        <th style=" font-size: 11px;"> WEEK </th>
                                        <th style=" font-size: 11px;"> PAYMENT METHOD </th>
                                        <th style=" font-size: 11px;"> CUSTOMER </th>
                                        <th style=" font-size: 11px;"> AREA </th>
                                        <th style=" font-size: 11px;"> CREATED BY </th>
                                        <th style=" font-size: 11px;"> CREATED AT </th>
                                        <th style=" font-size: 11px;"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            180032093
                                        </td>
                                        <td style=" font-size: 11px;">
                                            160011047
                                        </td>
                                        <td style="font-size: 11px;">
                                            ANDANI
                                        </td>
                                        <td style=" font-size: 11px;">
                                            48
                                        </td>
                                        <td style="font-size: 11px;">
                                            KONTAN
                                        </td>
                                        <td style=" font-size: 11px;">
                                            RETAIL-PKU
                                        </td>
                                        <td style="font-size: 11px;">
                                            PKUKVS
                                        </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style=" font-size: 11px;">
                                            2023-12-02 13:53:26
                                        </td>
                                        <td style=" font-size: 11px;">
                                            <a href="<?= base_url('/detail_closing') ?>"><i class="mdi mdi-pencil-circle icon-md"></i></a>
                                            <a href="#"><i class="mdi mdi-file-pdf text-info icon-md"></i></a>
                                            <a href="#"><i class="mdi mdi-book-open-page-variant text-success icon-md"></i></a>
                                            <a href="#"><i class="mdi mdi-printer text-black icon-md"></i></a>
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