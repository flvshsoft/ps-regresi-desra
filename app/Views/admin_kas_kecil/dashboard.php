<?= $this->extend('layout/admin_kas_kecil'); ?>
<?= $this->section('content'); ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper" style="background-color: white;">

        <!-- Content Wrapper -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

        <div class="col-4 col-lg-12 mb-4">
            <h5 style="color:#85586F" class="mb-2">Provinsi Riau</h5>
            <div id="map" style="width: 100%; height: 180px;border:3px solid #EDC988;" class="card shadow"></div>
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



        <div class="col-md-12 grid-margin stretch-card">
            <div class="row">
                <!-- Content Column -->
                <div class="col-lg-6 mb-4">
                    <!-- Color System -->
                    <h5 style="color:#fd79b3">Infografis</h5>
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <div class="card text-white shadow" style="background: #b7e5fc;">
                                <div class="card-body d-flex p-0">
                                    <div class="col-6 p-3 text-white-90">
                                        <h5>Rumah</h5>
                                        <h2 class="mb-0">50</h2>
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
                                        <h5>Pegawai</h5>
                                        <h2 class="mb-0">50</h2>
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
                                        <h6>Inventaris</h6>
                                        <h2 class="mb-0">50</h2>
                                    </div>
                                    <div class="col-6 p-0">
                                        <img src="https://i.pinimg.com/564x/c3/d6/d5/c3d6d5874c5147ae9617138d384fef32.jpg" alt="Foto" width="100%" class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="card text-white shadow" style="background: #fd79b3;">
                                <div class="card-body d-flex p-0">
                                    <div class="col-6 p-3 text-white-90">
                                        <h6>User</h6>
                                        <h2 class="mb-0">50</h2>
                                    </div>
                                    <div class="col-6 p-0">
                                        <img src="https://i.pinimg.com/564x/a0/ec/b0/a0ecb07bb90c12dcf046e476db0fe7c4.jpg" alt="Foto" width="100%" class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Content Column -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body shadow-lg">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table table-primary">
                                        <tr>
                                            <th style="font-size: 11px;"> DATA KARYAWAN YANG BELUM MASUK
                                                HARI INI </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="font-size: 11px;">
                                            <td>Jacob</td>
                                        </tr>
                                        <tr style="font-size: 11px;">
                                            <td>Messsy</td>
                                        </tr>
                                        <tr style="font-size: 11px;">
                                            <td>John</td>
                                        </tr>
                                        <tr style="font-size: 11px;">
                                            <td>Peter</td>
                                        </tr>
                                        <tr style="font-size: 11px;">
                                            <td>Dave</td>
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