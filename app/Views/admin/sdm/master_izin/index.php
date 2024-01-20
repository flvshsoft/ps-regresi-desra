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
                    <li class="breadcrumb-item"><a href="<?= base_url('/sdm')?>"> SDM</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <a class="btn btn-gradient-success btn-xs btn-icon-text my-1"
                                    href="<?= base_url('/master_riwayat_izin')?>">
                                    <i class="mdi mdi-book-multiple-variant icon-sm"></i>
                                    Histori Work Off
                                    Permission
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> ID </th>
                                        <th style="font-size: 11px;"> NO INDUK KARYAWAN </th>
                                        <th style="font-size: 11px;"> NAMA LENGKAP </th>
                                        <th style="font-size: 11px;"> JENIS IZIN </th>
                                        <th style="font-size: 11px;"> START TIME </th>
                                        <th style="font-size: 11px;"> END TIME </th>
                                        <th style="font-size: 11px;"> START DATE </th>
                                        <th style="font-size: 11px;"> END DATE </th>
                                        <th style="font-size: 11px;"> CREATED DATE </th>
                                        <th style="font-size: 11px;"> CREATED BY </th>
                                        <th style="font-size: 11px;"> APPROVE | DECLINE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            31
                                        </td>
                                        <td style="font-size: 11px;">
                                            002.261020.014
                                        </td>
                                        <td style="font-size: 11px;">
                                            YOKI ANDIKA
                                        </td>
                                        <td style="font-size: 11px;">
                                            IZIN KELUARGA SAKIT
                                        </td>
                                        <td style="font-size: 11px;">
                                            08:00:00
                                        </td>
                                        <td style="font-size: 11px;">
                                            17:00:00
                                        </td>
                                        <td style="font-size: 11px;">
                                            2022-10-26
                                        </td>
                                        <td style="font-size: 11px;">
                                            2022-10-26
                                        </td>
                                        <td style="font-size: 11px;">
                                            2022-10-26 08:05:11
                                        </td>
                                        <td style="font-size: 11px;">
                                            YOKI ANDIKA
                                        </td>
                                        <td style="font-size: 11px;">
                                            <a href="#">
                                                <i class="mdi mdi-account icon-md text-dark"></i>
                                            </a>
                                            <a href="#">
                                                <i class="mdi mdi-minus-circle icon-md text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            42
                                        </td>
                                        <td style="font-size: 11px;">
                                            002.261020.013
                                        </td>
                                        <td style="font-size: 11px;">
                                            BOBY PRIMA DM
                                        </td>
                                        <td style="font-size: 11px;">
                                            IZIN KELUARGA SAKIT
                                        </td>
                                        <td style="font-size: 11px;">
                                            08:00:00
                                        </td>
                                        <td style="font-size: 11px;">
                                            17:00:00
                                        </td>
                                        <td style="font-size: 11px;">
                                            2022-07-11
                                        </td>
                                        <td style="font-size: 11px;">
                                            2022-07-11
                                        </td>
                                        <td style="font-size: 11px;">
                                            2022-11-07 07:24:54
                                        </td>
                                        <td style="font-size: 11px;">
                                            BOBY PRIMA DM
                                        </td>
                                        <td style="font-size: 11px;">
                                            <a href="#">
                                                <i class="mdi mdi-account icon-md text-dark"></i>
                                            </a>
                                            <a href="#">
                                                <i class="mdi mdi-minus-circle icon-md text-danger"></i>
                                            </a>
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