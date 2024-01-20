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
                                <a class="btn btn-success btn-xs" href="<?= base_url('/master_closing') ?>">
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
                                    <!-- <tr>
                                        <td style="font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td style="font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td style="font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td style="font-size: 11px;">

                                        </td>
                                        <td style="font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">
                                            <a href="#"><i class="mdi mdi-file-pdf icon-md"></i></a> 
                                        </td>
                                    </tr> -->
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