<?= $this->extend('layout/admin_kas_kecil'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h6 class="page-title">
                <?=$judul1?>
            </h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-size: 11px;">
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/dashboard')?>"> BERANDA </a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/akk/piutang_usaha')?>"> RIWAYAT DATA PELUNASAN
                            PIUTANG
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1?></li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">BUKTI PELUNASAN PIUTANG USAHA</h4>
                    <div class="row">
                        <div class="col-4">
                            <p>ID Repayment</p>
                            <p>No. Tagihan</p>
                            <p>No. DO</p>
                            <p>Salesman</p>
                            <p>Nama Konsumen</p>
                            <p>Metode Pembayaran</p>
                            <p>Type Pembayaran</p>
                            <p>Bayar Tagihan</p>
                            <p>Sisa Tagihan</p>
                            <p>Tgl. Tagihan Berikutnya</p>
                            <p>Pengguna</p>
                        </div>
                        <div class="col-4">
                            <p>: 27064</p>
                            <p>: 180028556</p>
                            <p>: 160009906</p>
                            <p>: OKTA</p>
                            <p>: NABABAN</p>
                            <p>: KONTAN</p>
                            <p>: KAS</p>
                            <p>: 2,220,000</p>
                            <p>: 0</p>
                            <p>: 30-09-2023</p>
                            <p>: ALDO</p>
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