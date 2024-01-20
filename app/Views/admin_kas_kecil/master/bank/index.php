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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> ID </th>
                                        <th style="font-size: 11px;"> BANK NAME </th>
                                        <th style="font-size: 11px;"> PAYMENT CODE</th>
                                        <th style="font-size: 11px;"> CREATED DATE </th>
                                        <th style="font-size: 11px;"> CREATED BY </th>
                                        <th style="font-size: 11px;"> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="<?= base_url('/akk/input_bank') ?>" method="post">
                                            <td style="font-size: 11px;">

                                            </td>
                                            <td style="font-size: 11px;" class="form-group">
                                                <input type="text" name="nama_bank" class="form-control">
                                            </td>
                                            <td style="font-size: 11px;">
                                                <!-- <input type="text" name="payment_code"
                                                    class="form-control form-control-sm"> -->
                                            </td>
                                            <td style="font-size: 11px;">

                                            </td>
                                            <td style="font-size: 11px;">

                                            </td>
                                            <td style="font-size: 11px;">
                                                <div class="justify-content-center">
                                                    <button type="text" class="btn btn-primary btn-xs tip-top"
                                                        data-toggle="tooltip" data-original-title="Simpan Data"
                                                        type="submit">S</button>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <?php foreach ($model as $value) { ?>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            <?= $value['id_bank'] ?>
                                        </td>
                                        <td style="font-size: 11px;">
                                            <?= $value['nama_bank'] ?>
                                        </td>
                                        <td style="font-size: 11px;">
                                            <?= $value['payment_code'] ?>
                                        </td>
                                        <td style="font-size: 11px;">
                                            <?= $value['created_at'] ?>
                                        </td>
                                        <td style="font-size: 11px;">
                                            <?= $value['nama_user'] ?>
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center">
                                                <a onclick="return confirm('Anda Yakin Ingin Menghapusnya?')"
                                                    href="<?= base_url('/akk/del_bank/' . $value['id_bank']) ?>">
                                                    <i class="mdi mdi-delete-circle icon-md text-default"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
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