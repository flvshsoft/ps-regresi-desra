<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper" style="background-color: white;">

        <!-- Content Wrapper -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

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
                                        <img src="https://i.pinimg.com/564x/c0/c1/2d/c0c12d0054ac3fa10430f561bf26bcc0.jpg"
                                            alt="Foto" width="100%" class="mt-2">
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
                                        <img src="https://i.pinimg.com/564x/59/26/74/592674493a167bddfdcb6972d9e19d77.jpg"
                                            alt="Foto" width="100%" class="mt-2">
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
                                        <img src="https://i.pinimg.com/564x/c3/d6/d5/c3d6d5874c5147ae9617138d384fef32.jpg"
                                            alt="Foto" width="100%" class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="card text-white shadow" style="background: #fd79b3;">
                                <div class="card-body d-flex p-0">
                                    <div class="col-6 p-3 text-white-90">
                                        <h6>Product</h6>
                                        <h2 class="mb-0">50</h2>
                                    </div>
                                    <div class="col-6 p-0">
                                        <img src="https://i.pinimg.com/564x/a0/ec/b0/a0ecb07bb90c12dcf046e476db0fe7c4.jpg"
                                            alt="Foto" width="100%" class="mt-2">
                                    </div>
                                </div>
                            </div>
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

                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/akk/transaksi/ambil_barang') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #add2e9;">
                                    <div class="card-body d-flex p-0">
                                        <div class="col-6 p-3 text-white-90">
                                            <h5>Pengambilan Barang</h5>
                                            <h2 class="mb-0">DO</h2>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="https://i.pinimg.com/originals/49/37/d4/4937d4d54a3d92d7eaa30fc0e3a1e8e8.gif"
                                                alt="Foto" width="100%" class="mt-0">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/akk/transaksi/tagihan_baru') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #888acd;">
                                    <div class="card-body d-flex p-0">
                                        <div class="col-6 p-3 text-white-90">
                                            <h5>Input Tagihan Baru</h5>
                                            <h2 class="mb-0">Nota</h2>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="https://i.pinimg.com/originals/79/f9/7e/79f97e91f965b8a000d09244c1d9332e.gif"
                                                alt="Foto" width="100%" class="mt-0">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/akk/laporan/form_sisa') ?>" class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #643a9b;">
                                    <div class="card-body d-flex p-0">
                                        <div class="col-6 p-3 text-white-90">
                                            <h6>Rekap Nota Putih</h6>
                                            <h2 class="mb-0">-</h2>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="https://i.pinimg.com/originals/92/5d/0f/925d0f283ce4c206f23f207a8b4ecfd7.gif"
                                                alt="Foto" width="100%" class="mt-0">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 mb-3 px-2">
                            <a href="<?= base_url('/akk/piutang_usaha/input_pembayaran') ?>"
                                class="text-decoration-none">
                                <div class="card text-white shadow" style="background: #49c2ff;">
                                    <div class="card-body d-flex p-0">
                                        <div class="col-6 p-3 text-white-90">
                                            <h6>Piutang Usaha</h6>
                                            <h2 class="mb-0">-</h2>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="https://i.pinimg.com/originals/f4/8b/4e/f48b4e58c8dd32ccdc36c30ceebfd179.gif"
                                                alt="Foto" width="100%" class="mt-0">
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