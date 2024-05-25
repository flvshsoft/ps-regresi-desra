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
                href="<?= base_url('/admin/testing/generate-ses') ?>">
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
        $groupedDataTesting = [];
        $groupedDataAF = [];
        $nilai_ses_per_kecamatan = []; // Array untuk menyimpan nilai SES per kecamatan

        foreach ($model as $key => $value) {
            $kode_kecamatan = $value['kode_kecamatan'];
            $kepadatan_penduduk = $value['kepadatan_penduduk'];
            $kecList[$kode_kecamatan] = $value['nama_kecamatan'];

            if (!isset($groupedData[$kode_kecamatan])) {
                $groupedData[$kode_kecamatan] = [];
            }

            $tahun = (int) $value['tahun'];
            $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan_penduduk, 3);

            if (!isset($nilai_ses_per_kecamatan[$kode_kecamatan])) {
                $nilai_ses_per_kecamatan[$kode_kecamatan] = [];
            }

            if (isset($nilai_ses_per_kecamatan[$kode_kecamatan]) && count($nilai_ses_per_kecamatan[$kode_kecamatan]) > 0) {
                $nilai_ses_end = end($nilai_ses_per_kecamatan[$kode_kecamatan]);
                $testing = $nilai_ses_end;
                $testing2 = ($alpha * $kepadatan_penduduk) + ((1 - $alpha) * $nilai_ses_end);
                $nilai_ses_per_kecamatan[$kode_kecamatan][] = $testing2;
            } else {
                $testing = $kepadatan_penduduk;
                $nilai_ses_per_kecamatan[$kode_kecamatan][] = $testing;
            }

            $groupedDataTesting[$kode_kecamatan][$tahun] = number_format($testing, 3, ',', '.');

            if ($groupedData[$kode_kecamatan][$tahun] != 0) {
                $temp = (float) $groupedData[$kode_kecamatan][$tahun];
                $af = ($temp - (float) $testing) / $temp;
                $af = (float) $af;
            } else {
                $af = 0;
            }

            $groupedDataAF[$kode_kecamatan][$tahun] = number_format($af, 3);
        }
        ?>
        <?php foreach ($kecList as $key => $value) :
            $kode_kecamatan = $key;
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
                                    <td class="text-center table-primary">2024</td>
                                    <td class="text-center table-primary"></td>
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
                                    <td class="text-center table-primary">
                                        <?php
                                            $nilai_ses_end = end($nilai_ses_per_kecamatan[$kode_kecamatan]);
                                            $hasil_ses = ($alpha * $nilai_ses_end) + ((1 - $alpha) * $nilai_ses_end);
                                            echo number_format($hasil_ses, 3, ',', ',');
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
                                        <?=
                                                    $actual_forest ?>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                                // $act_for = number_format($actual_forest, 3);
                                                $sum_abs += abs((float) $actual_forest);
                                                // if(is_string($actual_forest)){

                                                // echo ($actual_forest);
                                                // }
                                                echo abs((float) $actual_forest);
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
                                        <?php $satu_n = number_format(1 / ($n), 3);
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
                                            echo number_format($mape, 3, ',', '.'); ?>
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