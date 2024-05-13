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
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-danger">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Input Tahun</th>
                                    <th>Pilih Kecamatan</th>
                                    <th>Regresi</th>
                                    <th>Slope</th>
                                    <th>Intercept</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <form method="POST" action="<?= base_url('/admin/user_testing/regresi') ?>">
                                        <td></td>
                                        <td>
                                            <input type="number" name="input_tahun" required class="form-control form-control-sm" value="2024">
                                        </td>
                                        <td>
                                            <select required class="form-control" id="kode_kecamatan" name="kode_kecamatan">
                                                <option>Pilih Kecamatan</option>
                                                <?php foreach ($model as $value) { ?>
                                                    <option value="<?= $value['kode_kecamatan'] ?>">
                                                        <?= $value['nama_kecamatan'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td><input type="text" readonly class="form-control form-control-sm" name="y" id="y">
                                        </td>
                                        <td><input type="text" readonly class="form-control form-control-sm" name="m" id="m">
                                        </td>
                                        <td><input type="text" readonly class="form-control form-control-sm" name="b" id="b">
                                        </td>
                                        <td> <button type="submit" class="btn btn-gradient-primary btn-sm">Ok</button>
                                        </td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Hasil Testing</h4>
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
                                    <!-- <th> </th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($riwayat as  $value) { ?>
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
                                        <!-- <td></td> -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $('#kode_kecamatan').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "<?= base_url('/user_testing/regresi'); ?>",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                str = data.split(';');
                var x = document.getElementById("y").value = str[0];
                var y = document.getElementById("m").value = str[1];
                var z = document.getElementById("b").value = str[2];
            }
        });
        return false;
    });
</script>
<?= $this->endSection() ?>