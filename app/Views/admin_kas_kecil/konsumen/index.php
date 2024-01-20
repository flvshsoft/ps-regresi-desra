<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">MASTER DATA KONSUMEN</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">BERANDA</a></li>
                    <li class="breadcrumb-item active" aria-current="page">KONSUMEN</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 d-block stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group">
                                <a href="<?= base_url('/customer')?>">
                                    <button type="button" class="btn btn-success btn-xs">
                                        <i class="mdi mdi-database-plus icon-sm"></i>
                                        Input Konsumen
                                    </button>
                                </a>
                            </div>
                            <div class="table-responsive-lg">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead class="table table-primary">
                                        <tr>
                                            <th style="font-size: 11px;"> No </th>
                                            <th style="font-size: 11px;"> Kode Konsumen </th>
                                            <th style="font-size: 11px;"> Nama Konsumen </th>
                                            <th style="font-size: 11px;"> Alamat </th>
                                            <th style="font-size: 11px;"> Telp </th>
                                            <th style="font-size: 11px;"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="font-size: 11px;">
                                                1
                                            </td>
                                            <td style="font-size: 11px;">
                                                300605 </td>
                                            <td style="font-size: 11px;">
                                                DEKOR 1
                                            </td>
                                            <td style="font-size: 11px;">
                                                -
                                            </td>
                                            <td style="font-size: 11px;">
                                                0
                                            </td>
                                            <td style="font-size: 11px;">
                                                <a href="#">
                                                    <i class="mdi mdi-delete-circle text-default icon-md"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 11px;">
                                                2
                                            </td>
                                            <td style="font-size: 11px;">
                                                300606 </td>
                                            <td style="font-size: 11px;">
                                                SRIWANGI
                                            </td>
                                            <td style="font-size: 11px;">
                                                -
                                            </td>
                                            <td style="font-size: 11px;">
                                                0
                                            </td>
                                            <td style="font-size: 11px;">
                                                <a href="#">
                                                    <i class="mdi mdi-delete-circle text-default icon-md"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 11px;">
                                                3
                                            </td>
                                            <td style="font-size: 11px;">
                                                300607
                                            </td>
                                            <td style="font-size: 11px;">
                                                ALYA
                                            </td>
                                            <td style="font-size: 11px;">
                                                -
                                            </td>
                                            <td style="font-size: 11px;">
                                                0
                                            </td>
                                            <td style="font-size: 11px;">
                                                <a href="#">
                                                    <i class="mdi mdi-delete-circle text-default icon-md"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!--table-->
            </div>
        </div>
        <?= $this->endSection() ?>