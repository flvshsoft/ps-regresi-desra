<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h6 class="page-title">
                <?=$judul1?>
            </h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-size: 11px;">
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard')?>"> BERANDA </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group">
                                <a class="btn btn-success btn-xs" href="<?= base_url('/form_piutang')?>">
                                    <i class="mdi mdi-database-plus icon-sm"></i> Piutang Intern</a>
                                <a class="btn btn-warning btn-xs" href="<?= base_url('/input_piutang')?>">
                                    <i class="mdi mdi-cash-usd icon-sm"></i> Tunai</a>
                                <a class="btn btn-danger btn-xs" href="<?= base_url('/input_piutang_kredit')?>">
                                    <i class="mdi mdi-cash-usd icon-sm"></i> Kredit</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> ID </th>
                                        <th style="font-size: 11px;"> NO TAGIHAN </th>
                                        <th style="font-size: 11px;"> NO. DO </th>
                                        <th style="font-size: 11px;"> SALESMAN </th>
                                        <th style="font-size: 11px;"> COSTUMER </th>
                                        <th style="font-size: 11px;"> PAYMENT </th>
                                        <th style="font-size: 11px;"> WEEK </th>
                                        <th style="font-size: 11px;"> CREATED DATE </th>
                                        <th style="font-size: 11px;"> CREATED BY </th>
                                        <th style="font-size: 11px;"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            27066
                                        </td>
                                        <td style="font-size: 11px;">
                                            180028911
                                        </td>
                                        <td style="font-size: 11px;">
                                            160009906
                                        </td>
                                        <td style="font-size: 11px;">
                                            OKTA
                                        </td>
                                        <td style="font-size: 11px;">
                                            RISWAN
                                        </td>
                                        <td style="font-size: 11px;">
                                            11,160,000
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 12:52:35
                                        </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center">
                                                <a href="#">
                                                    <i class="mdi mdi-pencil-circle icon-md"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            27065
                                        </td>
                                        <td style="font-size: 11px;">
                                            180028559
                                        </td>
                                        <td style="font-size: 11px;">
                                            160009906
                                        </td>
                                        <td style="font-size: 11px;">
                                            OKTA
                                        </td>
                                        <td style="font-size: 11px;">
                                            NASIR
                                        </td>
                                        <td style="font-size: 11px;">
                                            2,280,000
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 12:52:25
                                        </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center">
                                                <a href="#">
                                                    <i class="mdi mdi-pencil-circle icon-md"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            27064
                                        </td>
                                        <td style="font-size: 11px;">
                                            180028556
                                        </td>
                                        <td style="font-size: 11px;">
                                            160009906
                                        </td>
                                        <td style="font-size: 11px;">
                                            OKTA
                                        </td>
                                        <td style="font-size: 11px;">
                                            NABABAN
                                        </td>
                                        <td style="font-size: 11px;">
                                            2,220,000
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 12:52:11
                                        </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center">
                                                <a href="<?= base_url('/repayment_detail')?>">
                                                    <i class="mdi mdi-pencil-circle icon-md"></i>
                                                </a>
                                            </div>
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

<style>
.table-bordered-custom {
    border: 1px solid #000;
    /* Ganti dengan warna dan ketebalan sesuai preferensi Anda */
}

/* Tambahkan class ini pada tabel Anda */
</style>

<?= $this->endSection() ?>