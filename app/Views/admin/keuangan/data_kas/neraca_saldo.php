<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <?= $judul1?>
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">BERANDA</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/keuangan') ?>">KEUANGAN</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/master_cash_receipt') ?>">DATA KAS</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?= $judul1?>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class=" table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"><b> NAMA BANK</b> </th>
                                        <th style="font-size: 11px;"><b> SALDO AKHIR</b> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style=" font-size: 11px;">
                                            BANK BRI
                                        </td>
                                        <td style="font-size: 11px;">
                                            188,606,540
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=" font-size: 11px;">
                                            BANK MANDIRI
                                        </td>
                                        <td style="font-size: 11px;">
                                            4,884,839
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=" font-size: 11px;">
                                            BRANKAS </td>
                                        <td style="font-size: 11px;">
                                            528,038,844
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=" font-size: 11px;">
                                            GIRO
                                        </td>
                                        <td style="font-size: 11px;">
                                            1,161,000,000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=" font-size: 11px;">
                                            KAS KECIL
                                        </td>
                                        <td style="font-size: 11px;">
                                            124,210,472
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style=" font-size: 11px;">
                                            <b>TOTAL SALDO</b>
                                        </td>
                                        <td class="text-center" style="font-size: 11px;">
                                            <b>2,006,737,701
                                            </b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group text-center mb-0">
                            <a href="<?= base_url('/master_cash_receipt')?>" class="btn btn-warning btn-xs"><i
                                    class="mdi mdi-backburger icon-sm"></i></a>
                            <!-- <button type="submit" class="btn btn-warning btn-xs"><i
                                    class="mdi mdi-content-save-all icon-sm"></i></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.menu-item {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
}

.menu-item a {
    display: flex;
    align-items: start;
    text-decoration: none;
    color: black;
}

.menu-item i {
    margin-right: 10px;
}
</style>

<?= $this->endSection() ?>