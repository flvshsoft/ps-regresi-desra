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
        $kecIdList = [];
        $jumlah_penduduk = [];
        $luas_kecamatan = [];
        $rata_rata_kepadatan = [];
        foreach ($model as $value) {
            $kode_kecamatan = $value['kode_kecamatan'];
            $kepadatan_penduduk = $value['kepadatan_penduduk'];
            $kecList[$kode_kecamatan] = $value['nama_kecamatan'];
            if (!isset($groupedData[$kode_kecamatan])) {
                $groupedData[$kode_kecamatan] = array_fill(2010, 0, 0);
            }
            $tahun = (int)$value['tahun'];
            $groupedData[$kode_kecamatan][$tahun] = number_format($kepadatan_penduduk, 3);
            // tahun
            $groupedDataTahun[$kode_kecamatan][$tahun] = $tahun;;
        }
        ?>
        <?php foreach ($kecList as $key => $value) :
            $kode_kecamatan = $key;
        ?>
        <div class="row mb-2">
            <div class="col-12 stretch-card bg-white p-4 rounded-3">
                <div class="row col-12">
                    <div class="col-5">
                        <h4 class="card-title">Tabel Kecamatan <?= $kode_kecamatan; ?></h4>
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
                                    <td class="text-center table-danger">
                                        2024
                                    </td>
                                    <td class="text-center table-danger">
                                        ?
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