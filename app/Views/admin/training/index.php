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
            <div class="col-12 stretch-card bg-white p-4 rounded-3">
                <div class="row col-12">
                    <div class="col-5">
                        <h4 class="card-title">Tabel Kecamatan</h4>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-danger">
                                <tr>
                                    <th style="font-size: 11px;">Kecamatan</th>
                                    <th style="font-size: 11px;">X (Tahun)</th>
                                    <th style="font-size: 11px;">Y (Kepadatan)</th>
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
                                    $kepadatan_penduduk = $value['kepadatan_penduduk'];
                                    $kecList[$kode_kecamatan] = $value['nama_kecamatan'];
                                    if (!isset($groupedData[$kode_kecamatan])) {
                                        $groupedData[$kode_kecamatan] = array_fill(2010, 9, 0);
                                    }
                                    $tahun = (int)$value['tahun'];
                                    $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan_penduduk, 3);
                                    // tahun
                                    $groupedDataTahun[$kode_kecamatan][$tahun] = $tahun;;
                                    // 1
                                    $meanY[$kode_kecamatan] =  array_sum($groupedData[$kode_kecamatan]) / count($groupedData[$kode_kecamatan]);
                                    // tahun
                                    $meanX[$kode_kecamatan] =  array_sum($groupedDataTahun[$kode_kecamatan]) / count($groupedDataTahun[$kode_kecamatan]);
                                }
                                foreach ($groupedData as $kode_kecamatan => $tahun_data) { ?>
                                <tr>
                                    <td class="text-center" rowspan="<?php echo count($tahun_data) + 1; ?>">
                                        <?php echo $kecList[$kode_kecamatan]; ?>
                                    </td>
                                </tr>
                                <?php foreach ($tahun_data as $tahun => $kepadatan_penduduk) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $tahun; ?></td>
                                    <td class="text-center"><?php echo $kepadatan_penduduk; ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td class="text-center table-danger">Mean</td>
                                    <td class="text-center table-danger">
                                        <?= number_format($meanX[$kode_kecamatan], 1) ?>
                                    </td>
                                    <td class="text-center table-danger">
                                        <?= number_format($meanY[$kode_kecamatan], 3) ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-5">
                        <h4 class="card-title">Sigma</h4>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-warning">
                                <tr>
                                    <th style="font-size: 11px;">x - mean X</th>
                                    <th style="font-size: 11px;">y - mean Y</th>
                                    <th style="font-size: 11px;">(x - mean x) * (y - mean y)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php // Inisialisasi variabel untuk total Sigma
                                $totalSigmaXMean = 0;
                                $totalSigmaYMean = 0;
                                $totalSigmaXY = 0;
                                foreach ($groupedData as $kode_kecamatan => $tahun_data) {
                                ?>
                                <?php
                                    foreach ($tahun_data as $tahun => $kepadatan_penduduk) {
                                        // Hitung (x - mean X) dan (y - mean Y)
                                        $diffXMean = $tahun - $meanX[$kode_kecamatan];
                                        $diffYMean = number_format($kepadatan_penduduk - $meanY[$kode_kecamatan], 3);

                                        // Hitung (x - mean X) * (y - mean Y)
                                        $sigmaXY = $diffXMean * $diffYMean;

                                        $totalSigmaXMean += $diffXMean;
                                        $totalSigmaXY += $sigmaXY;
                                        $kuadrat = $diffXMean * $diffXMean;
                                    ?>
                                <tr>
                                    <td class="text-center"><?php echo $diffXMean; ?></td>
                                    <td class="text-center"><?php echo $diffYMean; ?></td>
                                    <td class="text-center"><?php echo $sigmaXY; ?></td>
                                </tr>
                                <?php
                                    }
                                    ?>
                                <tr>
                                    <td class="text-center table-warning" colspan="2">Jumlah Sigma</td>
                                    <td class="text-center table-warning"><?= $totalSigmaXY ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                                <!-- <tr>
                                    <td class="text-center"><?= $diffXMean ?></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="col-2">
                        <h4 class="card-title">Kuadra</h4>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-success">
                                <tr>
                                    <th style="font-size: 11px;">(x - mean x) ^ 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $totalSigmaKuadrat = 0;
                                foreach ($groupedData as $kode_kecamatan => $tahun_data) {
                                    foreach ($tahun_data as $tahun => $kepadatan_penduduk) {
                                        // Hitung (x - mean X) ^ 2
                                        $diffXMean = $tahun - $meanX[$kode_kecamatan];
                                        $kuadrat = pow($diffXMean, 2);
                                        $totalSigmaKuadrat += $kuadrat;
                                        $slope = $totalSigmaXY / $totalSigmaKuadrat;
                                        $intercept = $meanY[$kode_kecamatan] - ($slope * $meanX[$kode_kecamatan]);
                                        $regresi = (number_format($slope, 3)) . 'x ' . (number_format($intercept, 3, '.', ','));
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $kuadrat; ?></td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                                <tr>
                                    <td class="text-center table-success"><?= $totalSigmaKuadrat ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 stretch-card bg-white p-4 rounded-3">
                <div class="row col-12">
                    <div class="col-5">
                        <h6 class="card-title">Slope </h6>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-warning">
                                <tr>
                                    <th style="font-size: 11px;">(Koefisien Kemiringan) (m) : </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">m = Σ((x - mean_x) * (y - mean_y))
                                        / Σ((x - mean_x)^2)
                                    </td>
                                <tr>
                                    <td class="text-center table-warning">m = <?= number_format($slope, 3) ?> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-5">
                        <h6 class="card-title">Intercept (b): </h6>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-success">
                                <tr>
                                    <th style="font-size: 11px;">(Koefisien Kemiringan) (m) : </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">b = b = mean_y - (m * mean_x)</td>
                                <tr>
                                    <td class="text-center table-success">b =
                                        <?= number_format($intercept, 3, '.', ',') ?> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-2">
                        <h6 class="card-title">Persamaan</h6>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-primary">
                                <tr>
                                    <th style="font-size: 11px;">Regresi Linear </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">y = mx + b</td>
                                </tr>
                                <tr>
                                    <td class="table-primary text-center">y =
                                        <?= $regresi ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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