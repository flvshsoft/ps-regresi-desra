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
                                <a class="tip-top" data-original-title="Create Employee" data-togle="tooltip"
                                    href="<?= base_url('/general')?>">
                                    <i class="mdi mdi-database-plus icon-md"></i> </a>
                                <a class="tip-top" data-original-title="Export Employee" data-togle="tooltip"
                                    href="<?= base_url('/export_data_karyawan')?>">
                                    <i class="mdi mdi-file-excel icon-md text-success"></i> </a>
                                <a class="tip-top" data-original-title="PDF Employee" data-togle="tooltip"
                                    href="<?= base_url('/report_data_karyawan')?>">
                                    <i class="mdi mdi-file-pdf icon-md text-danger"></i> </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO INDUK KARYAWAN </th>
                                        <th style="font-size: 11px;"> NAMA LENGKAP </th>
                                        <th style="font-size: 11px;"> PHONE </th>
                                        <th style="font-size: 11px;"> POSISI </th>
                                        <th style="font-size: 11px;"> JABATAN </th>
                                        <th style="font-size: 11px;"> STATUS </th>
                                        <th style="font-size: 11px;"> SALDO CUTI </th>
                                        <th style="font-size: 11px;"> TGL MULAI KERJA</th>
                                        <th style="font-size: 11px;"> CREATED BY </th>
                                        <th style="font-size: 11px;"> CREATED DATE </th>
                                        <th style="font-size: 11px;"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            002.311022.025
                                        </td>
                                        <td style="font-size: 11px;">
                                            RINA FITRIA ULFA
                                        </td>
                                        <td style="font-size: 11px;">
                                            082276657703
                                        </td>
                                        <td style="font-size: 11px;">
                                            ADMIN
                                        </td>
                                        <td style="font-size: 11px;">
                                            STAFF
                                        </td>
                                        <td style="font-size: 11px;">
                                            OUTSTATION
                                        </td>
                                        <td style="font-size: 11px;">
                                            12
                                        </td>
                                        <td style="font-size: 11px;">
                                            2022-10-31
                                        </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            2022-11-04 16:31:19
                                        </td>
                                        <td style="font-size: 11px;">
                                            <a href="#">
                                                <i class="mdi mdi-pencil-circle icon-md"></i>
                                            </a>
                                            <a href=""
                                                onclick="return confirm('Apakah Karyawan Anda yakin Menghapus Data Karyawan ?')">
                                                <i class="mdi mdi-close-circle icon-md text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            002.310123.027
                                        </td>
                                        <td style="font-size: 11px;">
                                            ARAF
                                        </td>
                                        <td style="font-size: 11px;">
                                            0
                                        </td>
                                        <td style="font-size: 11px;">
                                            DRIVER
                                        </td>
                                        <td style="font-size: 11px;">
                                            STAFF
                                        </td>
                                        <td style="font-size: 11px;">
                                            OUTSTATION
                                        </td>
                                        <td style="font-size: 11px;">
                                            12
                                        </td>
                                        <td style="font-size: 11px;">
                                            2022-10-30
                                        </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-02-11 14:05:46
                                        </td>
                                        <td style="font-size: 11px;">
                                            <a href="#">
                                                <i class="mdi mdi-pencil-circle icon-md"></i>
                                            </a>
                                            <a href=""
                                                onclick="return confirm('Apakah Karyawan Anda yakin Menghapus Data Karyawan ?')">
                                                <i class="mdi mdi-close-circle icon-md text-danger"></i>
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