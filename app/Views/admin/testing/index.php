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
        <div class="form-group col-12">
            <a class="btn btn-gradient-success btn-xs btn-icon-text my-1"
                href="<?= base_url('/admin/training/generate') ?>">
                <i class="mdi mdi-database-plus icon-sm"></i> Generate </a>
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
        <?php
        $groupedData = [];
        $kecList = [];
        foreach ($model as $value) {
            $kode_kecamatan = $value['kode_kecamatan'];
            $y[$kode_kecamatan] = $value['y'];
            $m[$kode_kecamatan] = $value['m'];
            $b[$kode_kecamatan] = $value['b'];

            $kepadatan_penduduk = $value['kepadatan_penduduk'];
            $kecList[$kode_kecamatan] = $value['nama_kecamatan'];
            if (!isset($groupedData[$kode_kecamatan])) {
                $groupedData[$kode_kecamatan] = array_fill(2010, 0, 0);
            }
            $tahun = (int)$value['tahun'];
            $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan_penduduk, 3);
            $testing = ($m[$kode_kecamatan] * $tahun) - $b[$kode_kecamatan];
            $groupedDataTesting[$kode_kecamatan][$tahun] = number_format($testing, 3, ',', '.');
            $af = ($groupedData[$kode_kecamatan][$tahun] - $testing) * $groupedData[$kode_kecamatan][$tahun];
            $groupedDataAF[$kode_kecamatan][$tahun] = number_format($af, 3, ',', '.');

            // print_r($af);
            // exit;
        }
        ?>
        <?php foreach ($kecList as $key => $value) :
            $kode_kecamatan = $key;
            // $y = '0,669x -1322,917';
        ?>
        <div class="row mb-2">
            <div class="col-12 stretch-card bg-white p-4 rounded-3">
                <div class="row col-12">
                    <div class="col-6">
                        <h4 class="card-title">Tabel Kecamatan <?= $kode_kecamatan; ?></h4>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-success">
                                <tr>
                                    <th style="font-size: 11px;">Kecamatan</th>
                                    <th style="font-size: 11px;">X (Tahun)</th>
                                    <th style="font-size: 11px;">Y (Kepadatan)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center" rowspan="<?= count($groupedData[$kode_kecamatan]) + 2; ?>">
                                        <?= $kecList[$kode_kecamatan]; ?>
                                    </td>
                                </tr>
                                <?php foreach ($groupedData[$kode_kecamatan] as $tahun => $kepadatan_penduduk) { ?>
                                <tr>
                                    <td class="text-center"><?= $tahun; ?></td>
                                    <td class="text-center"><?= $kepadatan_penduduk; ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td class="text-center table-primary">
                                        2024
                                    </td>
                                    <!-- <td class="text-center table-primary">

                                    </td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-3">
                        <h6 class="card-title">Prediksi</h6>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-danger">
                                <tr>
                                    <th style="font-size: 11px;">Testing </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($groupedDataTesting[$kode_kecamatan] as $tahun => $testing) { ?>
                                <tr>
                                    <td class="text-center"><?= $testing ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td class="table-primary text-center">
                                        <?php $prediksi = ($m[$kode_kecamatan] * 2024) - $b[$kode_kecamatan];
                                            echo number_format($prediksi, 3, ',', '.')
                                            ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-3">
                        <h6 class="card-title">AF</h6>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-warning">
                                <tr>
                                    <th style="font-size: 11px;"> (actual - forecast) / actual </th>
                                    <th style="font-size: 11px;"> absolute </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sum_abs = 0;
                                    foreach ($groupedDataAF[$kode_kecamatan] as $tahun => $actual_forest) {
                                        $n = count($groupedDataAF[$kode_kecamatan]);
                                    ?>
                                <tr>
                                    <td class="text-center">
                                        <?= $actual_forest ?>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                                $sum_abs += abs($actual_forest);
                                                echo abs($actual_forest)
                                                ?>
                                    </td>
                                </tr>
                                <?php  } ?>
                                <tr>
                                    <td class="table-warning text-center">
                                        Jumlah
                                    </td>
                                    <td class="table-warning text-center">
                                        <?= $sum_abs ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 stretch-card bg-white p-4 rounded-3">
                <div class="row col-12 justify-content-center">
                    <div class="col-3">
                        <h6 class="card-title">Hasil</h6>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table table-info">
                                <tr>
                                    <th style="font-size: 11px;"> result terakhir </th>
                                    <th style="font-size: 11px;"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        1/n
                                    </td>
                                    <td class="text-center">
                                        <?php $satu_n = 1 / $n;
                                            echo $satu_n ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        AF
                                    </td>
                                    <td class="text-center">
                                        <?= $sum_abs ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        MAPE = 1/n * AF * 100 %
                                    </td>
                                    <td class="text-center">
                                        <?php $mape = $satu_n * $sum_abs * 100;
                                            echo number_format($mape, 2, ',', '.'); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>