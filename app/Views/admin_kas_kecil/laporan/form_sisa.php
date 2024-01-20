<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"><?= $judul1 ?></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">BERANDA</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('/laporan') ?>">LAPORAN</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul1 ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">USAHA PER AREA</h4>
                        <form class="forms-sample">
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Id Area</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm">
                                        <option></option>
                                        <option>BGNBTU - BAGANBATU</option>
                                        <option>BGOEXC - MA BUNGO</option>
                                        <option>BKL - BENGKULU UTARA</option>
                                        <option>BLSDRP - BELILAS DROP</option>
                                        <option>DRDKVS -DURI DUMAI KANVAS</option>
                                        <option>DUMAI - DUMAI</option>
                                        <option>FBYDRP - FLAMBOYAN DROP</option>
                                        <option>GRSK - GRESIK</option>
                                        <option>JMB - JMABI</option>
                                        <option>MEDAN - MEDAN</option>
                                        <option>KUDUS - KUDUS</option>
                                        <option>PDG - PADANG</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Salesman</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm">
                                        <option></option>
                                        <option>ADE</option>
                                        <option>ADMIN</option>
                                        <option>ANDANI</option>
                                        <option>BENGKULU</option>
                                        <option>BAMBANG</option>
                                        <option>BOBY</option>
                                        <option>DUMAI</option>
                                        <option>FAISAL</option>
                                        <option>FIRMAN</option>
                                        <option>GRESIK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Start
                                    Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">End
                                    Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <a href="<?= base_url('/laporan') ?>" class="btn btn-primary btn-sm">
                                    <i class="mdi mdi-backburger icon-sm"></i>
                                </a>
                                <button class="btn btn-dark btn-sm"><i class="mdi mdi-printer icon-sm"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">USAHA ALL SALESMAN
                        </h4>
                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Start
                                    Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">End
                                    Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <a href="<?= base_url('/laporan') ?>" class="btn btn-primary btn-sm">
                                    <i class="mdi mdi-backburger icon-sm"></i>
                                </a>
                                <button class="btn btn-dark btn-sm"><i class="mdi mdi-printer icon-sm"></i></button>
                                <button class="btn btn-success btn-sm"><i
                                        class="mdi mdi-file-excel icon-sm"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">KARYAWAN
                        </h4>
                        <form class="forms-sample">
                            <div class="form-group row mb-0">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Start
                                    Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">End
                                    Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <a href="<?= base_url('/laporan') ?>" class="btn btn-primary btn-sm">
                                    <i class="mdi mdi-backburger icon-sm"></i>
                                </a>
                                <button class="btn btn-dark btn-sm"><i class="mdi mdi-printer icon-sm"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">INTERNAL
                        </h4>
                        <form class="forms-sample">
                            <div class="form-group row mb-0">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Start
                                    Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">End
                                    Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <a href="<?= base_url('/laporan') ?>" class="btn btn-primary btn-sm">
                                    <i class="mdi mdi-backburger icon-sm"></i>
                                </a>
                                <button class="btn btn-dark btn-sm"><i class="mdi mdi-printer icon-sm"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</style>

<?= $this->endSection() ?>