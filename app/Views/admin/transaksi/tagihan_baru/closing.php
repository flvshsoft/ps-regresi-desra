<?= $this->extend('layout/admin_kas_kecil'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?= $judul ?>
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>"> BERANDA </a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/transaksi/tagihan_baru/nota') ?>"> TAGIHAN
                            BARU
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('/akk/transaksi/tagihan_baru/nota') ?>" method="POST">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-form-label">MINGGU KE - <?= $model['week'] ?>
                                        </label>

                                    </div>
                                </div>
                                <div class="col-md-3 preview-list">
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="<?= base_url() ?>/public/assets/images/faces/face4.jpg"
                                                alt="image" class="profile-pic rounded">
                                        </div>
                                        <div
                                            class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="preview-subject ellipsis mb-0 font-weight-normal">
                                                NO DO : <?= $model['id_sales'] ?>
                                                <input type="hidden" name="id_sales" class="form-control"
                                                    value="<?= $model['id_sales'] ?>">
                                                <input type="hidden" name="id_partner" class="form-control"
                                                    value="<?= $model['id_partner'] ?>">
                                            </h6>
                                            <p class="text-gray mb-0"> Area : <?= $model['nama_area'] ?> </p>
                                            <input type="hidden" name="id_area" class="form-control"
                                                value="<?= $model['id_area'] ?>">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 justify-content-center">
                                    <div class="col-md-12">
                                        <div class="row form-group">
                                            <label class="col-3 col-form-label">Metode Bayar</label>
                                            <div class="col-3">
                                                <select class="form-control" name="payment_method">
                                                    <option> Pilih Metode </option>
                                                    <option> CASH</option>
                                                    <option> KREDIT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex mt-4">
                                        <label class="col-sm-3 col-form-label">FAKTUR NO :
                                            99 -
                                        </label>
                                        <div class="col-sm-3 justify-content-start">
                                            <!-- <input type="text" class="form-control" name="id_nota" value="<?//= $lastIdNota + 1 ?? 1 ?>" disabled> -->
                                            <input type="text" class="form-control" name="no_nota">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 mb-0">
                                        <div class="form-group d-flex">
                                            <label class="col-5 col-form-label">TANGGAL</label>
                                            <div class="col-7">
                                                <input type="date" name="tgl_bayar" class="form-control"
                                                    value="<?= date('Y-m-d'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group d-flex">
                                            <label class="col-5 col-form-label">TOKO</label>
                                            <div class="col-7">
                                                <select class="form-control select2" name="id_customer">
                                                    <option> Pilih Customer</option>
                                                    <?php foreach ($customer as $value) { ?>
                                                    <option name="id_customer" value="<?= $value['id_customer'] ?>">
                                                        <?= $value['id_customer'] ?>
                                                        -
                                                        <?= $value['nama_customer'] ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row justify-content-right mb-1">
                                            <div class="col-md-6">
                                                <button class="btn btn-gradient-warning btn-rounded btn-fw">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped" width="100%" height="88%" cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style=" font-size: 11px;"> NO </th>
                                        <th style=" font-size: 11px;"> ITEM - NAMA BARANG </th>
                                        <th style=" font-size: 11px;"> STOK </th>
                                        <th style=" font-size: 11px;"> SATUAN </th>
                                        <th style=" font-size: 11px;"> DISKON </th>
                                        <th style=" font-size: 11px;"> JUMLAH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td style=" font-size: 11px;">
                                            <select class="form-control" disabled>
                                                <option> Pilih Produk</option>
                                                <?php foreach ($sales_detail as $value) { ?>
                                                <option name="id_product" value="<?= $value['id_product'] ?>">
                                                    <?= $value['id_product'] ?>
                                                    -
                                                    <?= $value['nama_product'] ?>
                                                    -
                                                    <?= $value['satuan_sales_detail'] ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td style=" font-size: 11px;">

                                        </td>
                                        <td>
                                            <input disabled type="text" class="form-control form-control-sm">
                                        </td>

                                        <td style=" font-size: 11px;">
                                            <input disabled type="text" class="form-control">
                                        </td>
                                        <td style=" font-size: 11px;">
                                            <button disabled type="submit" class="btn btn-primary btn-xs"><i
                                                    class="mdi mdi-content-save-all icon-xs"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-info">
                                    <tr>
                                        <td style=" font-size: 11px;" colspan="4">
                                            <b>Total Rp:</b>
                                        </td>
                                        <td style=" font-size: 11px;" colspan="2">
                                            <b><?= "" ?></b>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><br>
                        <div class="row justify-content-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($cek_nota as $value) { ?>
            <div class="col">
                <div class="card h-100">
                    <div class="card-header">
                        <small class="text-muted"><?= tgl_indo($value['created_at']) ?></small>
                    </div>
                    <div class="card-bodyx" style="padding:5%">
                        <h5 class="card-title text-center">No Invoice : <?= $value['id_nota'] ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Area : <?= $value['nama_area'] ?> </li>
                        <li class="list-group-item">Salesman : <?= $value['nama_lengkap'] ?></li>
                        <li class="list-group-item">Konsumen : <?= $value['nama_customer'] ?></li>
                    </ul>
                    <div class="" style="padding:5%">
                        <a href="<?= base_url('/akk/transaksi/tagihan_baru/nota/detail/' . $value['id_nota']) ?>"
                            class="d-flex justify-content-center align-items-center btn btn-primary btn-sm btn-rounded">Cek
                            Detail Nota</a>
                    </div>
                </div>
            </div>
            <?php }; ?>
        </div>
    </div>
</div>



<!-- <div class="col-md-6">
                                <a href="#" class="btn btn-gradient-warning btn-rounded btn-fw">
                                    Save
                                </a>
                            </div> -->


<?php
function tgl_indo($tanggal)
{
    $hari = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );

    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );

    // $pecahkan = explode('-', $tanggal);
    // $nama_hari = date('w', strtotime($tanggal));
    // $nama_hari = $hari[$nama_hari];
    // return $nama_hari . ', ' . $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];

    $pecahkan = explode(' ', $tanggal);
    $tanggal = $pecahkan[0];
    $waktu = isset($pecahkan[1]) ? $pecahkan[1] : null;

    $pecahkanTanggal = explode('-', $tanggal);
    $nama_hari = date('w', strtotime($tanggal));
    $nama_hari = $hari[$nama_hari];

    $result = $nama_hari . ', ' . $pecahkanTanggal[2] . ' ' . $bulan[(int)$pecahkanTanggal[1]] . ' ' . $pecahkanTanggal[0];

    if ($waktu !== null) {
        $result .= ' ' . $waktu;
    }

    return $result;
}
?>
<?= $this->endSection() ?>