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
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/master_price') ?>"> Harga</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="background-color: #C0EEEE;">
                    <div class="card-bodyx" style="padding: 1%;">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title text-uppercase text-bold"> Price Detail Barang
                                </h4>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Price Code</h6>
                                        <h6>User</h6>
                                        <h6>Tanggal</h6>
                                        <h6>Remark</h6>
                                    </div>
                                    <div class="col-md-10">
                                        <h6>: <?= $id_price['id_price'] ?></h6>
                                        <h6>: <?= $id_price['nama_user'] ?></h6>
                                        <h6>: <?= $id_price['created_at'] ?></h6>
                                        <h6>: <?= $id_price['keterangan_price'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <a class="btn btn-success btn-xs" href="<?= base_url('/akk/add_detail_price/' . $id_price['id_price']) ?>">
                                    <i class="mdi mdi-database-plus btn-icon-prepend"></i> Tambah</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO </th>
                                        <th style="font-size: 11px;"> Kode Barang </th>
                                        <th style="font-size: 11px;"> Nama Barang</th>
                                        <th style="font-size: 11px;"> Type Harga</th>
                                        <th style="font-size: 11px;"> Harga Jual </th>
                                        <th style="font-size: 11px;"> Satuan</th>
                                        <th style="font-size: 11px;"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($model as $value) { ?>
                                        <tr>
                                            <td style="font-size: 11px;">
                                                <?= $no; ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['id_product'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['nama_product'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['remark_jenis_harga'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['harga'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['satuan_product'] ?>
                                            </td>

                                            <td style="font-size: 11px;">
                                                <a href="<?= base_url('/akk/edit_detail_price/' . $value['id_price_detail']) ?>">
                                                    <i class="mdi mdi-pencil-circle text-default icon-md"></i> </a>
                                                <a onclick="return confirm('Anda Yakin Ingin Menghapusnya?')" href="<?= base_url('/akk/del_price_detail/' . $value['id_price_detail'] . '/' .  $value['id_price']) ?>">
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


<?= $this->endSection() ?>