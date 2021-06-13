<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">


<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Anggota Perpustakaan</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #92c556;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>SISTEM PEMINJAMAN BUKU</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Daftar Peminjaman Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pinjam.php">Data Pinjam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="anggota.php">Data Anggota</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
        <h1>Data Anggota Perpustakaan</h1>
        <br>
        <a href="create_anggota.php"><input type="button" value="Tambah Data"/></a> &nbsp;
        <a href="print_anggota.php" target="_blank"><input type="button" value="Cetak Data"/></a>
        <br>
        <br>
        <table class="table table-hover" border="1">
            <thead style="background-color: #a5a5a5;">
                <tr>
                    <th scop="col">No.</th>
                    <th scop="col">ID Anggota</th>
                    <th scop="col">Nama</th>
                    <th scop="col">Status</th>
                    <th scop="col">Alamat</th>
                    <th scop="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data_anggota();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id_anggota ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->status ?></td>
                            <td><?= $data->alamat ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit_anggota.php?id=<?= $data->id_anggota ?>"><input type="button" value="Edit"/></a>
                                <a name="hapus" id="hapus" href="process.php?anggota_id=<?= $data->id_anggota ?>"><input type="button" value="Delete"/></a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel anggota perpustakaan.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>