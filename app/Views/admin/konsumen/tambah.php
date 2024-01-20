<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h6 class="page-title">
                <?= $judul1 ?>
            </h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-size: 11px;">
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>"> BERANDA </a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/konsumen') ?>"> KOSUMEN</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">
                                Kode Konsumen
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm " value="002.051220.017"
                                    placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" id="exampleInputMobile" required
                                    placeholder="Nama Lengkap" name="nama_lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control form-control-sm" id="exampleInputPassword2" required
                                    placeholder="Alamat" name="no_hp" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Tempat
                                Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm"
                                    id="exampleInputConfirmPassword2" required placeholder="Tempat Lahir"
                                    name="tempat_lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">
                                HP / Telp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm"
                                    id="exampleInputConfirmPassword2" required name="tanggal_lahir">
                            </div>
                        </div>
                        <a href="<?= base_url('/konsumen')?>" class="btn btn-primary"><i
                                class="mdi mdi mdi-backburger icon-sm"></i></a>
                        <button type="submit" class="btn btn-gradient-success me-2"><i
                                class="mdi mdi-content-save-all icon-sm"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>