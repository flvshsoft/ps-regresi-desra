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
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>"> BERANDA </a></li>
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
                                <a class="btn btn-gradient-success btn-xs btn-icon-text my-1" href="<?= base_url('/akk/partner') ?>">
                                    <i class="mdi mdi-database-plus icon-sm"></i> Input Salesman</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> No </th>
                                        <th style="font-size: 11px;"> Kode Salesman </th>
                                        <th style="font-size: 11px;"> N.I.K </th>
                                        <th style="font-size: 11px;"> Nama Lengkap </th>
                                        <th style="font-size: 11px;"> Alamat </th>
                                        <th style="font-size: 11px;"> Telp </th>
                                        <th style="font-size: 11px;"> Action</th>
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
                                                    <a style="text-decoration:none" href="<?= base_url('/akk/form_partner/' . $value['id_partner']) ?>">
                                                        <?= $value['id_partner'] ?>
                                                    </a>
                                                </b>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['nik'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['nama_lengkap'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['alamat'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['no_hp'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <a onclick="return confirm('Anda Yakin Ingin Menghapusnya?')" href="<?= base_url('/akk/del_partner/' . $value['id_partner']) ?>"> <i class="mdi mdi-delete-circle text-default icon-md"></i> </a>
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