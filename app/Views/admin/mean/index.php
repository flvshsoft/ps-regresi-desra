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
                                <a class="btn btn-gradient-success btn-xs btn-icon-text my-1" href="<?= base_url('/admin/mean/generate') ?>">
                                    <i class="mdi mdi-database-plus icon-sm"></i> Generate </a>
                            </div>
                        </div>
                        <?php if (session()->getFlashdata("berhasil")) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <?= session()->getFlashdata("berhasil") ?>
                            </div>
                        <?php } ?>
                        <?php if (session()->getFlashdata("gagal")) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <?= session()->getFlashdata("gagal") ?>
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
                                        <th style="font-size: 11px;" rowspan="2">Kecamatan</th>
                                        <th style="font-size: 11px;" rowspan="2">Kode Kecamatan</th>
                                        <th style="font-size: 11px;" colspan="14" class="text-center">Tahun</th>
                                        <th class="table-warning" style="font-size: 11px;" rowspan="2">X Mean</th>
                                        <th class="table-warning" style="font-size: 11px;" rowspan="2">Y Mean</th>
                                    </tr>
                                    <tr>
                                        <?php
                                        $tahun_awal = 2010;
                                        $tahun_akhir = 2023;
                                        for ($tahun = $tahun_awal; $tahun <= $tahun_akhir; $tahun++) {
                                        ?>
                                            <th style="font-size: 11px;"><?= $tahun ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $groupedData = [];
                                    $kecList = [];
                                    $kecIdList = [];
                                    $jumlah_penduduk = [];
                                    $luas_kecamatan = [];
                                    $rata_rata_kepadatan = [];
                                    foreach ($model as $value) {
                                        $kode_kecamatan = $value['kode_kecamatan'];
                                        $kecList[$kode_kecamatan] = $value['nama_kecamatan'];
                                        $jumlah_penduduk[$kode_kecamatan] = $value['jumlah_penduduk'];
                                        $luas_wilayah[$kode_kecamatan] = $value['luas_wilayah'];
                                        if (!isset($groupedData[$kode_kecamatan])) {
                                            $groupedData[$kode_kecamatan] = array_fill(2010, 14, 0);
                                        }
                                        $tahun = (int)$value['tahun'];
                                        $kepadatan = $jumlah_penduduk[$kode_kecamatan] / $luas_wilayah[$kode_kecamatan];
                                        $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan, 3, ',', '.');
                                        // tahun
                                        $groupedDataTahun[$kode_kecamatan][$tahun] = $tahun;;
                                        // 1
                                        $meanY[$kode_kecamatan] =  array_sum($groupedData[$kode_kecamatan]) / count($groupedData[$kode_kecamatan]);
                                        // tahun
                                        $meanX[$kode_kecamatan] =  array_sum($groupedDataTahun[$kode_kecamatan]) / count($groupedDataTahun[$kode_kecamatan]);
                                        // 1
                                        $kecIdList[$kode_kecamatan][$tahun] = $value['id_penduduk'];
                                    }
                                    // print_r($meanY);
                                    // exit;


                                    foreach ($groupedData as $kode_kecamatan => $tahun_data) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $kecList[$kode_kecamatan] ?>
                                            </td>
                                            <td><?= $kode_kecamatan ?></td>
                                            <?php foreach ($tahun_data as $key => $kepadatan_penduduk) { ?>
                                                <td>
                                                    <?= $kepadatan_penduduk ?>
                                                </td>
                                            <?php } ?>
                                            <td rowspan="1">
                                                <?= number_format($meanX[$kode_kecamatan], 1, ',', '.') ?>
                                            </td>
                                            <td colspan="2">
                                                <?= number_format($meanY[$kode_kecamatan], 3, ',', '.') ?>
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