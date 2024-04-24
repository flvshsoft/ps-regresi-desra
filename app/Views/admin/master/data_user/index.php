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
                    <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>"> Beranda </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <a class="btn btn-gradient-success btn-xs btn-icon-text my-1" href="<?= base_url('/admin/data_user/tambah') ?>">
                                    <i class="mdi mdi-database-plus icon-sm"></i> Input </a>
                            </div>
                        </div>
                        <?php if (session()->getFlashdata("tambah")) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <?= session()->getFlashdata("tambah") ?>
                            </div>
                        <?php } ?>
                        <?php if (session()->getFlashdata("edit")) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <?= session()->getFlashdata("edit") ?>
                            </div>
                        <?php } ?>
                        <?php if (session()->getFlashdata("hapus")) { ?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <?= session()->getFlashdata("hapus") ?>
                            </div>
                        <?php } ?>
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> No </th>
                                        <th style="font-size: 11px;"> Id User </th>
                                        <th style="font-size: 11px;"> Nama User</th>
                                        <th style="font-size: 11px;"> Username</th>
                                        <th style="font-size: 11px;"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($model as $value) { ?>
                                        <tr>
                                            <td style="font-size: 11px;">
                                                <?= $no ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <b>
                                                    <a style="text-decoration:none" href="<?= base_url('/admin/data_user/edit/' . $value['id_user']) ?>">
                                                        <?= $value['id_user'] ?>
                                                    </a>
                                                </b>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['nama_user'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['username'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <a onclick="return confirm('Anda Yakin Ingin Menghapusnya?')" href="<?= base_url('/admin/data_user/hapus/' . $value['id_user']) ?>">
                                                    <i class="mdi mdi-delete-circle text-default icon-md"></i> </a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
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