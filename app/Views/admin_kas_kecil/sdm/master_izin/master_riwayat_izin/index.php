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
                    <li class="breadcrumb-item"><a href="<?= base_url('/master_izin')?>"> WAITING LIST APPROVAL WORK OFF
                            PERMISSION</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1?></li>
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
                                        <th style="font-size: 11px;"> ID </th>
                                        <th style="font-size: 11px;"> NO INDUK KARYAWAN </th>
                                        <th style="font-size: 11px;"> NAMA LENGKAP </th>
                                        <th style="font-size: 11px;"> JENIS IZIN </th>
                                        <th style="font-size: 11px;"> START TIME </th>
                                        <th style="font-size: 11px;"> END TIME </th>
                                        <th style="font-size: 11px;"> START DATE </th>
                                        <th style="font-size: 11px;"> APPROVED DATE </th>
                                        <th style="font-size: 11px;"> APPROVED BY </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
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

<style>
.table-bordered-custom {
    border: 1px solid #000;
    /* Ganti dengan warna dan ketebalan sesuai preferensi Anda */
}

/* Tambahkan class ini pada tabel Anda */
</style>

<?= $this->endSection() ?>