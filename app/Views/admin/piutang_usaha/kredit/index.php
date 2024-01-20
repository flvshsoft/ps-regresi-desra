<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h6 class="page-title">
                <?=$judul1?>
            </h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-size: 11px;">
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard')?>"> BERANDA </a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/piutang_usaha')?>"> RIWAYAT PIUTANG </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO. DO </th>
                                        <th style="font-size: 11px;"> SALESMAN </th>
                                        <th style="font-size: 11px;"> WEEK </th>
                                        <th style="font-size: 11px;"> AREA </th>
                                        <th style="font-size: 11px;"> KETERANGAN </th>
                                        <th style="font-size: 11px;"> CREATED DATE </th>
                                        <th style="font-size: 11px;"> CREATED BY </th>
                                        <th style="font-size: 11px;"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            160009959
                                        </td>
                                        <td style="font-size: 11px;">
                                            HIDAYAT
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            SIAKDRP
                                        </td>
                                        <td style="font-size: 11px;">
                                            02861
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 12:27:47
                                        </td>
                                        <td style="font-size: 11px;">
                                            Muhammad
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center text-center">
                                                <a href="<?= base_url('/detail_input_piutang_kredit')?>">
                                                    <i class="mdi mdi-database-plus icon-md"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            160009958
                                        </td>
                                        <td style="font-size: 11px;">
                                            YUNAIDI
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            FBYDRP
                                        </td>
                                        <td style="font-size: 11px;">
                                            02856
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-30 12:22:39
                                        </td>
                                        <td style="font-size: 11px;">
                                            Muhammad
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center text-center">
                                                <a href="<?= base_url('/detail_input_piutang_kredit')?>">
                                                    <i class="mdi mdi-database-plus icon-md"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            160009911
                                        </td>
                                        <td style="font-size: 11px;">
                                            JUNAIDI
                                        </td>
                                        <td style="font-size: 11px;">
                                            39
                                        </td>
                                        <td style="font-size: 11px;">
                                            PKUKVS
                                        </td>
                                        <td style="font-size: 11px;">
                                            02865
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-09-27 11:24:13
                                        </td>
                                        <td style="font-size: 11px;">
                                            Muhammad
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center text-center">
                                                <a href="<?= base_url('/detail_input_piutang_kredit')?>">
                                                    <i class="mdi mdi-database-plus icon-md"></i>
                                                </a>
                                            </div>
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
.table-bordered-custom {
    border: 1px solid #000;
    /* Ganti dengan warna dan ketebalan sesuai preferensi Anda */
}

/* Tambahkan class ini pada tabel Anda */
</style>

<?= $this->endSection() ?>