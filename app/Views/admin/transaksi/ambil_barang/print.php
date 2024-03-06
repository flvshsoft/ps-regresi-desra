<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
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

    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    .flex-container {
        display: flex;
        justify-content: space-between;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .left-column {
        flex: 1;
    }

    .right-column {
        flex: 1;
    }

    .details {
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        /* margin-bottom: 20px; */
    }

    table,
    th,
    td {
        /* border: 1px solid black; */
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    tbody td {
        vertical-align: top;
    }

    .payment {
        margin-top: 20px;
    }

    .footer {
        margin-top: 20px;
    }
    </style>
    <title>Laporan Kwitansi</title>
</head>


<body>
    <div class="container">
        <table border="0">
            <thead>
                <tr>
                    <th style="width: 50px;">
                        <img src="<?= base_url() ?>/public/assets/images/logo.png" alt="logo"
                            style="width: 100px;height:auto;">
                    </th>
                    <th style="text-align: center;">
                        <h4><?= $judul ?></h4>
                        <h5><?= $judul1 ?></h5>
                        <h6>Cabang : Kota Pekanbaru</h6>
                    </th>
                    <th style="width: 100px;">

                    </th>
                </tr>
            </thead>
        </table>
        <hr>
        <table border="0">
            <thead>
                <tr>
                    <th>
                        <p style="font-size: 13px;">
                            No DO : <?= $info['id_sales'] ?>
                        </p>
                    </th>
                    <th style="font-size: 13px;margin-left:300px;text-align:right">
                        <p>
                            Print By : <?= SESSION('userData')['nama_user'] ?>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p style="font-size: 13px;">
                            Area : <?= $info['nama_area'] ?>
                        </p>
                    </th>
                    <th style="font-size: 13px;margin-left:300px;text-align:right">
                        <p>

                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p style="font-size: 13px;">
                            Salesman : <?= $info['nama_lengkap'] ?>
                        </p>
                    </th>
                    <th style="font-size: 13px;margin-left:300px;text-align:right">
                        <p>
                            TGL DO : <?= $info['tgl_do'] ?>
                        </p>
                    </th>
                </tr>
            </thead>
        </table>
        <br>
        <table border="1">
            <thead>
                <tr style="font-size:11px ;">
                    <th align="center">No.</th>
                    <th align="center">No Tagihan</th>
                    <th align="center">Konsumen</th>
                    <th align="center">Kredit</th>
                    <th align="center">Cash</th>
                    <th align="center">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $bayar_kredit = 0;
                $bayar_cash = 0;
                foreach ($model1 as $value) {
                ?>
                <tr style="font-size:11px ;" align="center">
                    <td align="center"><?= $no ?> </td>
                    <td align="center"><?= $value['no_nota'] ?> </td>
                    <td align="center"><?= $value['nama_customer'] ?> </td>
                    <td align="center">
                        <?php
                            if ($value['payment_method'] == 'KREDIT') {
                                $total_kredit = $value['total_beli'];
                                echo 'Rp. ' . number_format($total_kredit, 0, ',', '.');
                                $bayar_kredit += $total_kredit;
                            } else {
                                echo 'Rp. 0';
                            }
                            ?>
                    </td>
                    <td align="center">
                        <?php
                            if ($value['payment_method'] == 'CASH') {
                                $total_cash = $value['total_beli']; // Tidak perlu format ke 'Rp.'
                                echo 'Rp. ' . number_format($total_cash, 0, ',', '.');
                                $bayar_cash += $total_cash;
                            } else {
                                echo 'Rp. 0';
                            }
                            ?>
                    </td>
                    <td align="center"><?= 'Rp. ' . number_format($value['total_beli'], 0, ',', '.'); ?></td>
                </tr>
                <?php $no++;
                } ?>
            </tbody>
            <tfoot>
                <tr style="font-size:11px ;">
                    <td colspan="3" align="center"><b>Grand Total </b></td>
                    <td align="center"><?= 'Rp. ' . number_format($bayar_kredit, 0, ',', '.') ?></td>
                    <td align="center"><?= 'Rp. ' . number_format($bayar_cash, 0, ',', '.') ?></td>
                    <td align="center"><?= 'Rp. ' . number_format($bayar_kredit + $bayar_cash, 0, ',', '.') ?></td>
                </tr>
            </tfoot>
        </table>
        <br>
        <table border="1">
            <thead>
                <tr style="font-size:11px ;">
                    <th align="center">No.</th>
                    <th align="center">Kode Barang</th>
                    <th align="center">Nama Barang</th>
                    <th align="center">Satuan</th>
                    <th align="center">QTY</th>
                    <th align="center">TOTAL KONTAN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($model2 as $value){
                ?>
                <tr style="font-size:11px ;" align="center">
                    <td align="center"><?= $no ?> </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                </tr>
                <?php }; $no++;
                ?>
            </tbody>
            <tfoot>
                <tr style="font-size:11px ;">
                    <td colspan="3" align="center"><b>Grand Total Omset</b></td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                </tr>
            </tfoot>
        </table>
        <br>
        <table border="1">
            <thead>
                <tr style="font-size:11px ;">
                    <th align="center">No.</th>
                    <th align="center">Kode Barang</th>
                    <th align="center">Nama Barang</th>
                    <th align="center">Satuan</th>
                    <th align="center">QTY</th>
                    <th align="center">TOTAL KREDIT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;

                ?>
                <tr style="font-size:11px ;" align="center">
                    <td align="center"><?= $no ?> </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                </tr>
                <?php $no++;
                ?>
            </tbody>
            <tfoot>
                <tr style="font-size:11px ;">
                    <td colspan="3" align="center"><b>Grand Total Omset</b></td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                    <td align="center">

                    </td>
                </tr>
            </tfoot>
        </table>
        <br>

</body>

</html>