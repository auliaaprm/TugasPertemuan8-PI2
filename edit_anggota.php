<?php
$id_anggota = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_anggota($id_anggota);
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
    <title>Edit Data Anggota</title>
</head>

<body>
    <h1>Edit Data Anggota</h1>
    <a href="anggota.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID Anggota</label>
        <br>
        <input type="text" name="id_anggota" value="<?php echo $data->id_anggota ?>">
        <br>
        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
        <label>Status</label>
        <br>
        <input type="text" name="status" value="<?php echo $data->status ?>">
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br><br>
        <button type="submit" name="submit_edit_anggota">Submit</button>
    </form>
    <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"&gt;></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</div>
</html>