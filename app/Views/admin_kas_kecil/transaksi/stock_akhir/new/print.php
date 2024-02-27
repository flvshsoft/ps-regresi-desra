<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        .col-lg-8 {
            flex: 0 0 75%;
            padding-left: 20px;
            /* Memberi jarak antara gambar dan teks */
        }

        img {
            max-width: 100%;
            height: 20%;
            width: 30%;
            float: left;
            margin: 20px 0;
            margin-top: 10px;
            /* Atur margin atas dan bawah */
        }

        .text-container {
            width: 75%;
            /* Menentukan lebar teks */
            float: left;
            /* Menggunakan float untuk menempatkan teks di sebelah kanan */
        }

        h2,
        h3,
        h4 {
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-size: 11px;
        }

        .row {
            display: flex;
            align-items: center;
        }

        .col-lg-4 {
            flex: 0 0 25%;
            /* Menentukan lebar gambar */
        }

        tbody td {
            font-size: 11px;
        }
    </style>
    <title><?= $judul1 ?></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="<?= base_url() ?>/public/assets/images/logo.png" alt="logo" class="w-25 h-25">
            </div>
            <div class="col-lg-8 text-container">
                <h2><b><?= $judul ?></b></h2>
                <h3><b><?= $judul1 ?></b></h3>
                <h4>Alamat: PKU</h4>
            </div>
        </div>
        <hr>
        <b>Dicetak Oleh : <?= SESSION('userData')['nama_user'] ?></b><br>
        <b>No DO : <?= $sales['id_sales'] ?></b><br>
        <b>Salesman : <?= $sales['id_sales'] ?></b><br>
        <b>Weeks : <?= $sales['week'] ?></b><br>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped" cellspacing="0">
                        <thead class="table table-primary">
                            <tr>
                                <th style="width: 35%;"> <img src="<?= base_url() ?>/public/assets/images/logo.png" alt="logo">
                                </th>
                            </tr>
                            <tr>
                                <th class=""> NO </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    NO
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead class="table table-primary">
                            <tr>
                                <th style="font-size: 11px;"> NO </th>
                                <th style="font-size: 11px;"> No DO Detail </th>
                                <th style="font-size: 11px;"> NAMA BARANG </th>
                                <th style="font-size: 11px;"> STOK GUDANG </th>
                                <th style="font-size: 11px;"> JUMLAH SALES </th>
                                <th style="font-size: 11px;"> SATUAN</th>
                                <th style="font-size: 11px;"> TANGGAL </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($model as $value) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td>
                                        <b>
                                            <?= $value['id_sales_detail'] ?>
                                        </b>
                                    </td>
                                    <td><?= $value['nama_product'] ?></td>
                                    <td>

                                    </td>
                                    <td><?= $value['jumlah_sales'] ?></td>
                                    <td><?= $value['satuan_sales_detail'] ?></td>
                                    <td><?= $value['created_at'] ?></td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>