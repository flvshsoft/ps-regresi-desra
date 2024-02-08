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
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/master_price') ?>"> Price </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="<?= base_url('/akk/save_price') ?>">
                            <!-- <div class="form-group row mb-0">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Barang
                                </label>
                                <div class="col-sm-9">
                                    <select name="id_product" class="form-control">
                                        <option> Pilih Barang </option>
                                        <?//php foreach ($product as $value) { ?>
                                            <option value="<?//= $value['id_product'] ?>">
                                                <?//= $value['id_product'] ?> - <?//= $value['nama_product'] ?>
                                            </option>
                                        <?//php } ?>
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Keterangan
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="keterangan_price" placeholder="Keterangan">
                                </div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <button type="submit" class="btn btn-success btn-xs"><i class="mdi mdi-content-save-all icon-sm"></i></button>
                                <a class="btn btn-light btn-xs" href="<?= base_url('/akk/master_price') ?>"><i class="mdi mdi-backburger icon-sm"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>