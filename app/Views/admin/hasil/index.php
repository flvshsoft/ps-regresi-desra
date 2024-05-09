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

        <div class="row mb-2">
            <div class="col-12 stretch-card bg-white p-4 rounded-3">
                <div class="row col-12 justify-content-center">
                    <div class="col-12">
                        <h6 class="card-title">Hasil</h6>
                        <table class="table table-sm table-bordered table-striped m-2" id="dataTable" width="100%" cellspacing="0">
                            <thead class="table table-info">
                                <tr>
                                    <th class="text-center" style="font-size: 11px;"> No </th>
                                    <th class="text-center" style="font-size: 11px;"> Kode Kecamatan </th>
                                    <th class="text-center" style="font-size: 11px;"> Nama Kecamatan</th>
                                    <th class="text-center" style="font-size: 11px;"> MAPE Regresi</th>
                                    <th class="text-center" style="font-size: 11px;"> MAPE SES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $regresi_list = [];
                                $ses_list = [];
                                foreach ($model as $value) :
                                    $regresi_list[] = $value['mape'];
                                    $ses_list[] = $value['mape_ses'];
                                ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $no++; ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $value['kode_kecamatan'] ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $value['nama_kecamatan'] ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $value['mape'] ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $value['mape_ses'] ?>
                                        </td>
                                    </tr>
                                <?php endforeach;
                                ?>
                            </tbody>
                            <tfoot class="bg-warning">
                                <tr>
                                    <td class="text-center">

                                    </td>
                                    <td class="text-center">

                                    </td>
                                    <td class="text-center">
                                        Jumlah
                                    </td>
                                    <td class="text-center">
                                        <?= array_sum($regresi_list) ?>
                                    </td>
                                    <td class="text-center">
                                        <?= array_sum($ses_list) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">

                                    </td>
                                    <td class="text-center">

                                    </td>
                                    <td class="text-center">
                                        Rerata
                                    </td>
                                    <td class="text-center">
                                        <?= number_format(array_sum($regresi_list) / count($regresi_list), 3) ?>
                                    </td>
                                    <td class="text-center">
                                        <?= number_format(array_sum($ses_list) / count($ses_list), 3) ?>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>