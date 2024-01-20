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
                    <li class="breadcrumb-item"><a href="<?= base_url('/input_piutang_kredit')?>"> KREDIT </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> <?= $judul1?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row mb-0">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No. DO</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" disabled value="160009959">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Salesman</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" disabled value="HIDAYAT">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Area / Tujuan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" disabled value="SIAKDRP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Minggu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" disabled value="39">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead class="table table-primary">
                                    <tr>
                                        <th style="font-size: 11px;"> NO. Tagihan </th>
                                        <th style="font-size: 11px;"> No Nota </th>
                                        <th style="font-size: 11px;"> Salesman </th>
                                        <th style="font-size: 11px;"> Area</th>
                                        <th style="font-size: 11px;"> Konsumen </th>
                                        <th style="font-size: 11px;"> Total Tagihan </th>
                                        <th style="font-size: 11px;"> Tgl J Tempo </th>
                                        <th style="font-size: 11px;"> Top</th>
                                        <th style="font-size: 11px;" width="190px"> Tunai</th>
                                        <th style="font-size: 11px;"> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            180020867
                                        </td>
                                        <td style="font-size: 11px;">
                                            PIUTANG INTERNAL
                                        </td>
                                        <td style="font-size: 11px;">
                                            ADMIN
                                        </td>
                                        <td style="font-size: 11px;">
                                            -
                                        </td>
                                        <td style="font-size: 11px;">
                                            MDPKU
                                        </td>
                                        <td style="font-size: 11px;">
                                            86,813,580
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-02-21
                                        </td>
                                        <td style="font-size: 11px;">
                                            JATUH TEMPO
                                        </td>
                                        <td style="font-size: 11px;" width="190px">
                                            <input type="text" placeholder="Payment"
                                                class="form-control form-control-sm">
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center text-center">
                                                <a href="#" class="btn btn-success btn-xs">
                                                    S
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            180026408
                                        </td>
                                        <td style="font-size: 11px;">
                                            2064
                                        </td>
                                        <td style="font-size: 11px;">
                                            RIDHO
                                        </td>
                                        <td style="font-size: 11px;">
                                            DRDKVS
                                        </td>
                                        <td style="font-size: 11px;">
                                            REGAR
                                        </td>
                                        <td style="font-size: 11px;">
                                            3,960,000
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-07-29
                                        </td>
                                        <td style="font-size: 11px;">
                                            JATUH TEMPO
                                        </td>
                                        <td style="font-size: 11px;" width="190px">
                                            <input type="text" placeholder="Payment"
                                                class="form-control form-control-sm">
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center text-center">
                                                <a href="#" class="btn btn-success btn-xs">
                                                    S
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">
                                            180026593
                                        </td>
                                        <td style="font-size: 11px;">
                                            2074
                                        </td>
                                        <td style="font-size: 11px;">
                                            RIDHO
                                        </td>
                                        <td style="font-size: 11px;">
                                            DRDKVS
                                        </td>
                                        <td style="font-size: 11px;">
                                            SAMIROTO
                                        </td>
                                        <td style="font-size: 11px;">
                                            5,070,000
                                        </td>
                                        <td style="font-size: 11px;">
                                            2023-08-04
                                        </td>
                                        <td style="font-size: 11px;">
                                            JATUH TEMPO
                                        </td>
                                        <td width="190px" style="font-size: 11px;">
                                            <input type="text" placeholder="Payment"
                                                class="form-control form-control-sm">
                                        </td>
                                        <td style="font-size: 11px;">
                                            <div class="justify-content-center text-center">
                                                <a href="#" class="btn btn-success btn-xs">
                                                    S
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