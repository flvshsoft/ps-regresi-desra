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
                        <h4 class="card-title">Riwayat Testing</h4>
                        <table class="table table-striped" id="dataTable">
                            <thead class="table table-danger">
                                <tr>
                                    <th> No </th>
                                    <th> Input Tahun </th>
                                    <th> Nama Kecamatan </th>
                                    <th> Regresi </th>
                                    <th> Slope </th>
                                    <th> Intercept </th>
                                    <th> Hasil</th>
                                    <th> Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($model as  $value) {
                                    $createdAt = $value['created_at']; // Tanggal dari kolom 'created_at'
                                    $tanggalBaru = date('d F Y', strtotime($createdAt));
                                ?>
                                    <tr>
                                        <td>
                                            <?= $no++; ?>
                                        </td>
                                        <td><?= $value['input_tahun'] ?> </td>
                                        <td>
                                            <?= $value['nama_kecamatan'] ?>
                                        </td>
                                        <td><?= $value['regresi'] ?> </td>
                                        <td><?= $value['slope'] ?></td>
                                        <td><?= $value['intercept'] ?></td>
                                        <td><?= number_format($value['hasil'], 3, ',', ',') ?></td>
                                        <td><?= $tanggalBaru ?></td>
                                    </tr>
                                <?php  };
                                $no++ ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>