<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
    <style>
        h1 {
        text-align: center;
        }
        table,
        td,
        th {
        border: 1px solid #ddd;
        text-align: left;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th,
        td {
        padding: 15px;
        }
    </style>
</head>

<body>
    <h1>Laporan Data Peminjaman Buku</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Id </th>
                <th>Nama</th>
                <th>Status</th>
                <th>Id Pinjam</th>
                <th>Nama Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $model->tampil_data();
            if (!empty($result)) {
                foreach ($result as $data) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $data->id_anggota ?></td>
                        <td><?= $data->nama ?></td> 
                        <td><?= $data->status ?></td>
                        <td><?= $data->id_pinjam ?></td>
                        <td><?= $data->nama_buku ?></td>
                        <td><?= $data->tgl_pinjam ?></td>
                        <td><?= $data->tgl_kembali ?></td>
                    </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                     <td colspan="9">Belum ada data pada tabel anggota.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>