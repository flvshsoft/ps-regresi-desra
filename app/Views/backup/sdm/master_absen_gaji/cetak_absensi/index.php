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
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Month :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="exampleSelectGender">
                                        <option></option>
                                        <option>Januari</option>
                                        <option>Februari</option>
                                        <option>Maret</option>
                                        <option>April</option>
                                        <option>Mei</option>
                                        <option>Juni</option>
                                        <option>Juli</option>
                                        <option>Agustus</option>
                                        <option>September</option>
                                        <option>Oktober</option>
                                        <option>November</option>
                                        <option>Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Year :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="exampleSelectGender">
                                        <option></option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-gradient-primary btn-sm me-2"><i
                                        class="mdi mdi-printer icon-xs"></i> Print</button>
                                <a href=" <?= base_url('/master_absen_gaji')?>" class="btn btn-warning btn-sm"><i
                                        class="mdi mdi-skip-backward icon-xs"></i> Back</a>
                            </div>
                        </form>
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