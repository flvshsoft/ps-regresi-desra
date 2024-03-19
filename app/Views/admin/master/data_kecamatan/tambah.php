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
                    <li class="breadcrumb-item"><a href="<?= base_url('/admin/data_kecamatan') ?>"> Data Kecamatan </a>
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
                        <form class="forms-sample" method="POST" action="<?= base_url('/admin/data_kecamatan/tambah') ?>">


                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode Kecamatan
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="kode_kecamatan" placeholder="Kode Kecamatan">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Kecamatan
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="nama_kecamatan" placeholder="Nama Kecamatan">
                                </div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <button type="submit" class="btn btn-success btn-xs"><i class="mdi mdi-content-save-all icon-sm"></i></button>
                                <a class="btn btn-light btn-xs" href="<?= base_url('/admin/data_kecamatan') ?>"><i class="mdi mdi-backburger icon-sm"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>