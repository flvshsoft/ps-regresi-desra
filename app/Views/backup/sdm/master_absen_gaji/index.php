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
                            <div class="form_group col-12">
                                <a class="btn btn-gradient-success btn-xs btn-icon-text my-1" href="#">
                                    <i class="mdi mdi-calendar-clock icon-sm"></i> Clock in Manual </a>
                                <a class="btn btn-gradient-dark btn-xs btn-icon-text my-1"
                                    href="<?= base_url('/master_perbaikan_absen')?>">
                                    <i class="mdi mdi-book-multiple-variant icon-sm"></i> Riwayat Perbaikan Absensi</a>
                                <a class="btn btn-gradient-info btn-xs btn-icon-text my-1" _
                                    href="<?= base_url('/form_absensi')?>">
                                    <i class="mdi mdi-code-equal icon-sm"></i> Cetak Absensi</a>
                                <a class="btn btn-gradient-danger btn-xs btn-icon-text my-1" _ href="#">
                                    <i class="mdi mdi-printer icon-sm"></i> Cetak Slip Gaji</a>
                            </div>
                        </div><br>
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO INDUK KARYAWAN </th>
                                        <th style="font-size: 11px;"> NAMA LENGKAP </th>
                                        <th style="font-size: 11px;"> JAM MASUK </th>
                                        <th style="font-size: 11px;"> TERLAMBAT </th>
                                        <th style="font-size: 11px;"> JAM PULANG </th>
                                        <th style="font-size: 11px;"> JAM KERJA </th>
                                        <th style="font-size: 11px;"> CREATED BY </th>
                                        <th style="font-size: 11px;"> CREATED DATE </th>
                                        <th style="font-size: 11px;"> IN | OUT</th>
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
                                            08:19:22
                                        </td>
                                        <td style="font-size: 11px;">

                                        </td>
                                        <td style="font-size: 11px;">

                                        </td>
                                        <td style="font-size: 11px;">
                                            00:00:00
                                        </td>
                                        <td style="font-size: 11px;">
                                            RINA FITRIA ULFA
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-10-02 08:19:22
                                        </td>
                                        <td style="font-size: 11px;">
                                            <a href="#">
                                                <i class="mdi mdi-calendar-clock icon-md text-success"></i>
                                            </a>
                                            <a href="#">
                                                <i class="mdi mdi-calendar-remove icon-md text-danger"></i>
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
                                            07:50:46
                                        </td>
                                        <td style="font-size: 11px;">

                                        </td>
                                        <td style="font-size: 11px;">

                                        </td>
                                        <td style="font-size: 11px;">
                                            00:00:00
                                        </td>
                                        <td style="font-size: 11px;">
                                            ARAF
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-10-02 07:50:46
                                        </td>
                                        <td style="font-size: 11px;">
                                            <a href="#">
                                                <i class="mdi mdi-calendar-clock icon-md text-success"></i>
                                            </a>
                                            <a href="#">
                                                <i class="mdi mdi-calendar-remove icon-md text-danger"></i>
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