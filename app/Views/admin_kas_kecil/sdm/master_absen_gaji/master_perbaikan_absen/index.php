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
                    <li class="breadcrumb-item"><a href="<?= base_url('/master_absen_gaji')?>">
                            REKAP DATA ABSENSI KARYAWAN</a></li>
                    <li class="breadcrumb-item active">
                        <?= $judul1?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> ID</th>
                                        <th style="font-size: 11px;"> ID LOG </th>
                                        <th style="font-size: 11px;"> TYPE ABSEN </th>
                                        <th style="font-size: 11px;"> TGL </th>
                                        <th style="font-size: 11px;"> JAM JAM PERBAIKAN </th>
                                        <th style="font-size: 11px;"> JAM SEBELUMNYA </th>
                                        <th style="font-size: 11px;"> NAMA KARYAWAN </th>
                                        <th style="font-size: 11px;"> CREATED BY </th>
                                        <th style="font-size: 11px;"> REASON</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                        </td>
                                        <td style="font-size: 11px;">
                                        </td>
                                        <td style="font-size: 11px;">
                                        </td>
                                        <td style="font-size: 11px;">
                                        </td>
                                        <td style="font-size: 11px;">
                                        </td>
                                        <td style="font-size: 11px;">
                                        </td>
                                        <td style="font-size: 11px;">
                                        </td>
                                        <td style="font-size: 11px;">
                                        </td>
                                        <td style="font-size: 11px;">
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