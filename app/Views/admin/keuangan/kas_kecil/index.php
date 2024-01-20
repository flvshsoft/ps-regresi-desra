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
                    <li class="breadcrumb-item active" aria-current="page">
                        <?= $judul1?>
                    </li>
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
                                        <th style="font-size: 11px;"> NO </th>
                                        <th style="font-size: 11px;"> REMARK </th>
                                        <th style="font-size: 11px;"> NILAI </th>
                                        <th style="font-size: 11px;"> CREATED DATE</th>
                                        <th style="font-size: 11px;"> CREATED BY </th>
                                        <th style="font-size: 11px;"> UPDATED DATE</th>
                                        <th style="font-size: 11px;"> UPDATED BY </th>
                                        <th style="font-size: 11px;"> ACTION </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            1
                                        </td>
                                        <td style="font-size: 11px;">
                                            KAS KECIL
                                        </td>
                                        <td style="font-size: 11px;">
                                            <input type="text" class="form-control" value="500.000.000">
                                        </td>
                                        <td style="font-size: 11px;">
                                            GIRO
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-03-07 16:54:48
                                        </td>
                                        <td style="font-size: 11px;">
                                            system
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-03-07 16:54:56
                                        </td>
                                        <td style="font-size: 11px;">
                                            <button type="text" class="btn btn-primary btn-xs" name="btn_s">S</button>
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