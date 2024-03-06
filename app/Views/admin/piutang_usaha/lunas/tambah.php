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
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/piutang_usaha') ?>"> RIWAYAT PIUTANG </a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/piutang_usaha/input') ?>"> CASH </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row mb-0">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No. DO</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" disabled
                                    value="<?= $info['id_sales'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Salesman</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" disabled
                                    value="<?= $info['nama_lengkap'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Area / Tujuan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" disabled
                                    value="<?= $info['nama_area'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Minggu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" disabled
                                    value="<?= $info['week'] ?>">
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO. Tagihan </th>
                                        <th style="font-size: 11px;"> No Nota </th>
                                        <th style="font-size: 11px;"> Salesman </th>
                                        <th style="font-size: 11px;"> Area</th>
                                        <th style="font-size: 11px;"> Konsumen </th>
                                        <th style="font-size: 11px;"> Total Tagihan </th>
                                        <th style="font-size: 11px;"> Tgl J Tempo </th>
                                        <th style="font-size: 11px;"> Top</th>
                                        <th style="font-size: 11px;" width="190px"> Tunai <input type="checkbox"
                                                id="checkall" class="form-check-input"></th>
                                        <th style="font-size: 11px;"> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($model as $value) {
                                        $total = 0;
                                        $tot_bay = $value['harga'] * $value['satuan_penjualan'];
                                        $total += $tot_bay;
                                    ?>
                                    <tr>
                                        <form method="POST" action="<?= base_url('/akk/piutang_usaha/input/add') ?>">
                                            <td style="font-size: 11px;">
                                                <?= $value['id_nota'] ?>
                                                <input value="<?= $value['id_nota'] ?>" name="id_nota" type="hidden">
                                                <input value="<?= $value['id_sales'] ?>" name="id_sales" type="hidden">
                                            </td>
                                            <td style="font-size: 11px;">

                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['nama_lengkap'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['nama_area'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= $value['nama_customer'] ?>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <?= 'Rp. ' . number_format($value['total_beli'], 0, ',', '.'); ?>
                                            </td>
                                            <td style="font-size: 11px;">

                                            </td>
                                            <td style="font-size: 11px;">

                                            </td>
                                            <td style="font-size: 11px;" width="190px" class="text-center">
                                                <input type="checkbox" name="myCheckbox" id="myCheckbox"
                                                    class="form-check-input">
                                                </label>
                                            </td>
                                            <td style="font-size: 11px;">
                                                <div class="justify-content-center text-center">
                                                    <button type="submit" id="submitButton"
                                                        class="btn btn-success btn-xs">
                                                        S
                                                    </button>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <?php }; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    // Ketika checkbox di th diubah
    $('#checkall').change(function() {
        // Ambil status centang
        var isChecked = $(this).is(':checked');

        // Atur status centang pada semua checkbox di tbody
        $('tbody input[type="checkbox"]').prop('checked', isChecked);
    });

    // Ketika salah satu checkbox di tbody diubah
    $('tbody input[type="checkbox"]').change(function() {
        // Periksa apakah semua checkbox di tbody sudah tercentang
        var allChecked = $('tbody input[type="checkbox"]:checked').length === $(
            'tbody input[type="checkbox"]').length;

        // Atur status centang pada checkbox di th sesuai dengan kondisi di tbody
        $('#checkall').prop('checked', allChecked);
    });
});

document.getElementById('submitButton').addEventListener('click', function(event) {
    var checkbox = document.getElementById('myCheckbox');
    if (checkbox.checked) {
        document.getElementById('myForm').submit();
    } else {
        event.preventDefault(); // Mencegah submit formulir
        alert('Centang checkbox terlebih dahulu sebelum mengirimkan formulir.');
    }
});
</script>


<style>
.table-bordered-custom {
    border: 1px solid #000;
    /* Ganti dengan warna dan ketebalan sesuai preferensi Anda */
}

/* Tambahkan class ini pada tabel Anda */
</style>

<?= $this->endSection() ?>