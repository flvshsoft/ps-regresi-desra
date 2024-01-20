<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"><?= $judul1?></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">BERANDA</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/keuangan') ?>">DATA KEUANGAN</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul1?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> Trans Code </th>
                                        <th style="font-size: 11px;"> Keterangan </th>
                                        <th style="font-size: 11px;"> Biaya </th>
                                        <th style="font-size: 11px;"> TypeBiaya </th>
                                        <th style="font-size: 11px;"> Week </th>
                                        <th style="font-size: 11px;"> Remark </th>
                                        <th style="font-size: 11px;"> Approved By</th>
                                        <th style="font-size: 11px;"> Date </th>
                                        <th style="font-size: 11px;"> User </th>
                                        <th style="font-size: 11px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            150014422
                                        </td>
                                        <td style="font-size: 11px;">
                                            KAS
                                        </td>
                                        <td style="font-size: 11px;">
                                            17,000,000
                                        </td>
                                        <td style="font-size: 11px;">
                                            UANG KELUAR
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            TRANSFERAN SALESMAN
                                        </td>
                                        <td style="font-size: 11px;">
                                            maya
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30
                                        </td>
                                        <td style="font-size: 11px;">
                                            ADE
                                        </td>
                                        <td>
                                            <a href="<?= base_url('/edit_mutasi_bank')?>">
                                                <i class="mdi mdi-pencil-circle icon-md">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            150014421
                                        </td>
                                        <td style="font-size: 11px;">
                                            KAS
                                        </td>
                                        <td style="font-size: 11px;">
                                            8,000,000
                                        </td>
                                        <td style="font-size: 11px;">
                                            UANG KELUAR
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            TRANSFERAN SALESMAN
                                        </td>
                                        <td style="font-size: 11px;">
                                            maya
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30
                                        </td>
                                        <td style="font-size: 11px;">
                                            ADE
                                        </td>
                                        <td>
                                            <a href="<?= base_url('/edit_mutasi_bank')?>">
                                                <i class="mdi mdi-pencil-circle icon-md">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            150014420
                                        </td>
                                        <td style="font-size: 11px;">
                                            BANK MANDIRI 2
                                        </td>
                                        <td style="font-size: 11px;">
                                            76,512,541
                                        </td>
                                        <td style="font-size: 11px;">
                                            MUTASI KAS PENGEMBANGAN
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            MUTASI HO PENGEMBANGAN SEPT
                                        </td>
                                        <td style="font-size: 11px;">
                                            maya
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30
                                        </td>
                                        <td style="font-size: 11px;">
                                            ADE
                                        </td>
                                        <td>
                                            <a href="<?= base_url('/edit_mutasi_bank')?>">
                                                <i class="mdi mdi-pencil-circle icon-md">
                                                </i>
                                            </a>
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
</div>

<?= $this->endSection() ?>