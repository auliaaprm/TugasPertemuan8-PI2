<?php
$id_pinjam = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_pinjam($id_pinjam);
?>
<!doctype html>
<html lang="en">
<div class="container">
<head>
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>Edit Data Pinjam</title>
</head>

<body>
    <h1>Edit Data Pinjam</h1>
    <a href="pinjam.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID</label>
        <br>
        <input type="text" name="id_pinjam" value="<?php echo $data->id_pinjam ?>">
        <br>
        <label>ID Anggota</label>
        <br>
        <input type="text" name="id_anggota" value="<?php echo $data->id_anggota ?>">
        <br>
        <label>Nama Buku</label>
        <br>
        <input type="text" name="nama_buku" value="<?php echo $data->nama_buku ?>">
        <br>
        <label>Tanggal Pinjam</label>
        <br>
        <input type="date" name="tgl_pinjam" value="<?php echo $data->tgl_pinjam ?>">
        <br>
        <label>Tanggal Kembali</label>
        <br>
        <input type="date" name="tgl_kembali" value="<?php echo $data->tgl_kembali ?>">
        <br><br>
        <button type="submit" name="submit_edit_pinjam">Submit</button>
    </form>
    <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"&gt;></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</div>
</html>