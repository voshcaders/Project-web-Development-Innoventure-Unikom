<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Objek Wisata</title>
    <style>
        body,
        table {
            margin: 10px auto;
        }

        table {
            border-collapse: collapse;
            border: 1px solid #f1f1f1;
            font-family: 'Arial', sans-serif;
            font-size: 12px;
            width: 100%;
        }

        table tr,
        th,
        td {
            border: 1px solid #f1f1f1;
            padding: 10px;
        }

        h3,
        h4 {
            text-align: center;
        }

        h4 {
            margin-top: -5px;
        }
    </style>
</head><body>
    <h3>Tiket Objek Wisata Curug Cikondang</h3>
    <h4>Kabupaten PCianjur Telp.0812345678910</h4>
    <?php foreach ($pemesanan as $value) : ?>
    <?php endforeach; ?>

    <table border="0">
        <tr style="border: none;">
            <td>QR CODE</td>
            <td>:</td>
            <td style="border: none; text-align: center;">
                <img src="assets/qr_code/<?= $value['qr_code'] . '-' . $value['nama_member']; ?>.png" width="200">
            </td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td><?= $value['nama_member']; ?></td>
        </tr>
        <tr>
            <th>Wisata</th>
            <td>:</td>
            <td><?= $value['nama_wisata']; ?></td>
        </tr>
        <tr>
            <th>Jumlah Tiket</th>
            <td>:</td>
            <td><?= $value['lama']; ?> Tiket</td>
        </tr>
        <tr>
            <th>Pembayaran</th>
            <td>:</td>
            <td><b>LUNAS</b></td>
        </tr>

    </table>
</body></html>