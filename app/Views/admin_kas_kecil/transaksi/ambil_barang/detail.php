<?= $this->extend('layout/admin_kas_kecil'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?= $judul1 ?>
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/dashboard') ?>"> Beranda </a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/transaksi') ?>"> Transaksi</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/transaksi/ambil_barang') ?>"> Sales</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <a class="btn btn-success btn-xs"
                                    href="<?= base_url('/akk/transaksi/ambil_barang/detail/tambah/' . $id_sales['id_sales']) ?>">
                                    <i class="mdi mdi-database-plus btn-icon-prepend"></i> Tambah</a>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO </th>
                                        <th style="font-size: 11px;"> No DO </th>
                                        <th style="font-size: 11px;"> No DO Detail</th>
                                        <th style="font-size: 11px;"> SALESMAN</th>
                                        <th style="font-size: 11px;"> NAMA BARANG </th>
                                        <th style="font-size: 11px;"> SATUAN</th>
                                        <th style="font-size: 11px;"> CREATED DATE </th>
                                        <th style="font-size: 11px;"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($model as $value) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td>
                                            <?= $value['id_sales'] ?>
                                        </td>
                                        <td>
                                            <b>
                                                <a style="text-decoration:none"
                                                    href="<?= base_url('/akk/transaksi/ambil_barang/detail/edit/' .  $value['id_sales_detail']) ?>">
                                                    <?= $value['id_sales_detail'] ?>
                                                </a>
                                            </b>
                                        </td>
                                        <td>
                                            <?= $value['nama_lengkap'] ?>
                                        </td>
                                        <td>
                                            <?= $value['nama_product'] ?>
                                        </td>
                                        <td><?= $value['satuan_sales_detail'] ?></td>
                                        <td><?= $value['created_at'] ?></td>
                                        <td> <a onclick="return confirm('Anda Yakin Ingin Menghapusnya?')"
                                                href="<?= base_url('/akk/transaksi/ambil_barang/detail/hapus/' . $value['id_sales_detail'] . '/' .  $value['id_sales']) ?>">
                                                <i class="mdi mdi-delete-circle text-default icon-md"></i> </a></td>
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


<?= $this->endSection() ?>