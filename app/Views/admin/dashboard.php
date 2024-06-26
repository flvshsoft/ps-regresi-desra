<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper" style="background-color: white;">

        <!-- Content Wrapper -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-12 mb-4">
                    <h5 style="color:#85586F" class="mb-2">Provinsi Riau</h5>
                    <div id="map" style="width: 100%; height: 200px;border:3px solid #EDC988;" class="card shadow">
                    </div>
                    <script>
                        const map = L.map('map').setView([0.485561, 101.3800101], 13);

                        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                        }).addTo(map);

                        function onMapClick(e) {
                            popup
                                .setLatLng(e.latlng)
                                .setContent(`You clicked the map at ${e.latlng.toString()}`)
                                .openOn(map);
                        }

                        map.on('click', onMapClick);
                    </script>
                </div>

                <!-- Content Column -->
                <div class="col-lg-12 mb-4">
                    <!-- Color System -->
                    <h5 style="color:#fd79b3">Infografis</h5>
                    <div class="row mt-2">
                        <div class="col-lg-6 mb-2">
                            <div class="card text-white shadow" style="background: #b7e5fc;">
                                <div class="card-body d-flex p-0">
                                    <div class="col-6 p-3 text-white-90">
                                        <h5>Data Penduduk</h5>
                                        <h2 class="mb-0"><?= count($penduduk) ?></h2>
                                    </div>
                                    <div class="col-6 p-0">
                                        <img src="https://i.pinimg.com/564x/c0/c1/2d/c0c12d0054ac3fa10430f561bf26bcc0.jpg" alt="Foto" width="100%" class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="card text-white shadow" style="background: #eebf35;">
                                <div class="card-body d-flex p-0">
                                    <div class="col-6 p-3 text-white-90">
                                        <h5>Data Kecamatan</h5>
                                        <h2 class="mb-0"><?= count($kecamatan) ?></h2>
                                    </div>
                                    <div class="col-6 p-0">
                                        <img src="https://i.pinimg.com/564x/59/26/74/592674493a167bddfdcb6972d9e19d77.jpg" alt="Foto" width="100%" class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="card text-white shadow" style="background: #7cddb2;">
                                <div class="card-body d-flex p-0">
                                    <div class="col-6 p-3 text-white-90">
                                        <h6>Data User</h6>
                                        <h2 class="mb-0"><?= count($user) ?></h2>
                                    </div>
                                    <div class="col-6 p-0">
                                        <img src="https://i.pinimg.com/564x/c3/d6/d5/c3d6d5874c5147ae9617138d384fef32.jpg" alt="Foto" width="100%" class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <a href="https://rohulkab.bps.go.id/" target="_blank" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #fd79b3;">
                                    <div class="card-body d-flex p-0">
                                        <div class="col-6 p-3 text-white-90">
                                            <h6>Rokan Hulu</h6>
                                            <h2 class="mb-0">BPS</h2>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="https://rohulkab.bps.go.id/images/bps.ico" alt="Foto" width="80%" class="mt-2">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Content Column -->
            <div class="col-lg-4">
                <div class="col-12 mb-4">
                    <h5 style="color:#85586F" class="mb-2">Tahapan / Flow</h5>
                    <!-- Color System -->
                    <div class="row p-2">
                        <?php $no = 1; ?>
                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/data_kecamatan') ?>" class="text-decoration-none">
                                <div class="card text-black shadow" style="background: #FFE6E6;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">Data Kecamatan</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/data_penduduk') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #E1AFD1;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">Data Penduduk</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/mean') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #AD88C6;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">Mean</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/bagi_data') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #7469B6;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">Bagi Data</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/training') ?>" class="text-decoration-none">
                                <div class="card text-black shadow" style="background: #DCF2F1;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">Regresi - Training</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/testing') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #7FC7D9;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">Regresi - Testing</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/testing-ses') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #365486;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">Single Exponential S.</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/user_testing/regresi') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #0F1035;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">User Testing - Regresi</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/user_testing/ses') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #add2e9;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">User Testing - Single E. S.</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/admin/hasil') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #C683D7;">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="col-1 p-2 text-center">
                                            <!-- <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif" alt="Foto" width="100%" class="mt-0"> -->
                                            <p class="bg-white text-black p-1" style="border-radius:30px;width:30px;"><?= $no++ ?></p>
                                        </div>
                                        <div class="col-11 p-3 text-white-90">
                                            <h5 class="ms-2">Hasil</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    table {
        width: 100%;
    }

    td {
        width: 50%;
    }
</style>
<?= $this->endSection() ?>