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
                        <div class="form-group col-12">
                            <a href="<?= base_url('/spending')?>">
                                <button type="button" class="btn btn-success btn-xs">
                                    <i class="mdi mdi-database-plus icon-sm"> </i>
                                    Tambah
                                </button>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> TRANS CODE </th>
                                        <th style="font-size: 11px;"> GROUP BIAYA </th>
                                        <th style="font-size: 11px;"> REMARK </th>
                                        <th style="font-size: 11px;"> WEEK </th>
                                        <th style="font-size: 11px;"> VALUE </th>
                                        <th style="font-size: 11px;"> CREATE BY </th>
                                        <th style="font-size: 11px;"> CREATED DATE </th>
                                        <th style="font-size: 11px;"> APPROVE BY </th>
                                        <th style="font-size: 11px;"> APPROVE DATE </th>
                                        <th style="font-size: 11px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            23022631
                                        </td>
                                        <td style="font-size: 11px;">
                                            OFFICE
                                        </td>
                                        <td style="font-size: 11px;">
                                            GPS
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            900.000
                                        </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 14:31:41
                                        </td>
                                        <td>
                                            <a href="<?= base_url('/edit_spending')?>">
                                                <i class="mdi mdi-pencil-circle icon-md">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            2302263O
                                        </td>
                                        <td style="font-size: 11px;">
                                            OFFICE
                                        </td>
                                        <td style="font-size: 11px;">
                                            PENGELUARAN MADISTRO WEEK 39
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            865.000
                                        </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 14:31:23
                                        </td>
                                        <td>
                                            <a href="<?= base_url('/edit_spending')?>">
                                                <i class="mdi mdi-pencil-circle icon-md">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            23022629
                                        </td>
                                        <td style="font-size: 11px;">
                                            OFFICE
                                        </td>
                                        <td style="font-size: 11px;">
                                            MAKAN SIANG SABTU
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            288.000
                                        </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 </td>
                                        <td style="font-size: 11px;">
                                            ALDO
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 14:31:00
                                        </td>
                                        <td>
                                            <a href="<?= base_url('/edit_spending')?>">
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