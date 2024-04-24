<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h6 class="page-title">
                Edit <?= $judul1 ?>
            </h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-size: 11px;">
                    <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>"> Beranda </a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/admin/data_user') ?>"> Data User </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Edit </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="<?= base_url('/admin/data_user/edit') ?>">
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username
                                </label>
                                <div class="col-sm-9">
                                    <input type="hidden" class="form-control form-control-sm" name="id_user"
                                        value="<?= $model['id_user'] ?>">
                                    <input type="text" class="form-control form-control-sm" name="username"
                                        value="<?= $model['username'] ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Password
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="password">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Lengkap
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="nama_user"
                                        value="<?= $model['nama_user'] ?>">
                                </div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <button type="submit" class="btn btn-success btn-xs"><i
                                        class="mdi mdi-content-save-all icon-sm"></i></button>
                                <a class="btn btn-light btn-xs" href="<?= base_url('/admin/data_user') ?>"><i
                                        class="mdi mdi-backburger icon-sm"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>