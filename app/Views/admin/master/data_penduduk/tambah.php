<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h6 class="page-title">
                Tambah <?= $judul1 ?>
            </h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-size: 11px;">
                    <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>"> Beranda </a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/admin/data_penduduk') ?>"> Data Kecamatan </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Tambah </li>
                </ol>
            </nav>
        </div>
        <?php if (session()->getFlashdata("error")) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?= session()->getFlashdata("error") ?>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST"
                            action="<?= base_url('/admin/data_penduduk/tambah') ?>">
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode
                                    Kecamatan</label>
                                <div class="col-sm-9">
                                    <select name="kode_kecamatan" id="kode_kecamatan" class="form-control">
                                        <option> Pilih Kecamatan </option>
                                        <?php foreach ($model as $value) { ?>
                                        <option value="<?= $value['kode_kecamatan'] ?>">
                                            <?= $value['nama_kecamatan'] ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tahun
                                </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control form-control-sm" name="tahun"
                                        placeholder="Tahun">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Luas Wilayah
                                </label>
                                <div class="col-sm-9">
                                    <input type="number" step="any" class="form-control form-control-sm"
                                        name="luas_wilayah" placeholder="Luas Wilayah">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jumlah Penduduk
                                </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control form-control-sm" name="jumlah_penduduk"
                                        placeholder="Jumlah Penduduk">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kepadaan Penduduk
                                </label>
                                <div class="col-sm-9">
                                    <input type="int" class="form-control form-control-sm" name="kepadatan_penduduk"
                                        placeholder="Kepadatan Penduduk">
                                </div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <button type="submit" class="btn btn-success btn-xs"><i
                                        class="mdi mdi-content-save-all icon-sm"></i></button>
                                <a class="btn btn-light btn-xs" href="<?= base_url('/admin/data_penduduk') ?>"><i
                                        class="mdi mdi-backburger icon-sm"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>