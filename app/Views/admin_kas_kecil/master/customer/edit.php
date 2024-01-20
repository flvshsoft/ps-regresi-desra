<?= $this->extend('layout/admin_kas_kecil'); ?>
<?= $this->section('content'); ?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h6 class="page-title">
                <?= $judul1 ?>
            </h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-size: 11px;">
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/dashboard') ?>"> BERANDA </a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/master_customer') ?>"> Konsumen </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="<?= base_url('/akk/update_customer') ?>">
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Konsumen</label>
                                <div class="col-sm-9">
                                    <input type="hidden" class="form-control form-control-sm" name="id_customer"
                                        value="<?= $model['id_customer'] ?>">
                                    <input type="text" class="form-control form-control-sm" name="nama_customer"
                                        value="<?= $model['nama_customer'] ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">HP / Telp</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="no_hp_customer"
                                        value="<?= $model['no_hp_customer'] ?>">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control form-control-sm"
                                        name="alamat_customer"> <?= $model['alamat_customer'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <button type="submit" class="btn btn-success btn-xs"><i
                                        class="mdi mdi-content-save-all icon-sm"></i></button>
                                <a class="btn btn-light btn-xs" href="<?= base_url('/akk/master_customer') ?>"><i
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