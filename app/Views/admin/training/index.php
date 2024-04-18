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
                    <!-- <div class="card-bodyx" style="padding: 2%;"> -->
                    <div class="col-4">
                        <h4 class="card-title">Tabel Kecamatan</h4>
                        <!-- <div class="table-responsive"> -->
                            <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table table-primary">
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
                                        // $jumlah_penduduk[$kode_kecamatan] = $value['jumlah_penduduk'];
                                        // $luas_wilayah[$kode_kecamatan] = $value['luas_wilayah'];
                                        if (!isset($groupedData[$kode_kecamatan])) {
                                            $groupedData[$kode_kecamatan] = array_fill(2010, 9, 0);
                                        }
                                        $tahun = (int)$value['tahun'];
                                        // $kepadatan = $jumlah_penduduk[$kode_kecamatan] / $luas_wilayah[$kode_kecamatan];
                                        $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan_penduduk, 3);
                                        // tahun
                                        $groupedDataTahun[$kode_kecamatan][$tahun] = $tahun;;
                                        // 1
                                        $meanY[$kode_kecamatan] =  array_sum($groupedData[$kode_kecamatan]) / count($groupedData[$kode_kecamatan]);
                                        // tahun
                                        $meanX[$kode_kecamatan] =  array_sum($groupedDataTahun[$kode_kecamatan]) / count($groupedDataTahun[$kode_kecamatan]);
                                        // 1
                                        // $kecIdList[$kode_kecamatan][$tahun] = $value['id_penduduk'];
                                    }
                                    foreach ($groupedData as $kode_kecamatan => $tahun_data) { ?>
                                        <tr>
                                            <td rowspan="<?php echo count($tahun_data) + 1; ?>">
                                                <?php echo $kecList[$kode_kecamatan]; ?>
                                            </td>
                                        </tr>
                                        <?php foreach ($tahun_data as $tahun => $kepadatan_penduduk) { ?>
                                            <tr>
                                                <td><?php echo $tahun; ?></td>
                                                <td><?php echo $kepadatan_penduduk; ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td class="table-warning">Mean</td>
                                            <td class="table-warning">
                                                <?= number_format($meanX[$kode_kecamatan], 1) ?>
                                            </td>
                                            <td class="table-warning">
                                                <?= number_format($meanY[$kode_kecamatan], 3) ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <!-- </div> -->
                    </div>
                    <div class="col-5">
                        <h4 class="card-title">Sigma</h4>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%" cellspacing="0">
                            <thead class="table table-primary">
                                <tr>
                                    <!-- <th>Kecamatan</th> -->
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
                                // $meanX = array_sum($groupedDataTahun[$kode_kecamatan]) / count($groupedDataTahun[$kode_kecamatan]);
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
                                        //$totalSigmaYMean += $diffYMean;
                                        $totalSigmaXY += $sigmaXY;
                                    ?>
                                        <tr>
                                            <td><?php echo $diffXMean; ?></td>
                                            <td><?php echo $diffYMean; ?></td>
                                            <td><?php echo $sigmaXY; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="2" class="table-warning">Jumlah Sigma</td>
                                        <td class="table-warning"><?= $totalSigmaXY ?></td>
                                    </tr>
                                <?php
                                }

                                // Menampilkan hasil ke layar
                                // echo $totalSigmaXMean;
                                // echo $totalSigmaYMean;
                                // echo $totalSigmaXY;
                                ?>
                                <!-- <tr>
                                    <td><?= $diffXMean ?></td>
                                    <td></td>
                                    <td></td>
                                </tr> -->

                            </tbody>
                        </table>
                    </div>
                    <div class="col-3">
                        lorem ipsum dolor sit amet
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-1 grid-margin stretch-card">
                <div class="card">
                    <div class="card-bodyx" style="padding: 2%;">
                        <div class="card-body">
                            <h4 class="card-title">Kuadra</h4>
                            <table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th>(x - mean x) ^ 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="table-warning">Jumlah Sigma</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
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