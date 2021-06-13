<!doctype html>
<html lang="en">
<div class="container">
<head>
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>Tambah Data Pinjam</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="pinjam.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID</label>
        <br>
        <input type="text" name="id_pinjam">
        <br>
        <label>ID Anggota</label>
        <br>
        <input type="text" name="id_anggota">
        <br>
        <label>Nama Buku</label>
        <br>
        <input type="text" name="nama_buku">
        <br>
        <label>Tanggal Pinjam</label>
        <br>
        <input type="date" name="tgl_pinjam">
        <br>
        <label>Tanggal Kembali</label>
        <br>
        <input type="date" name="tgl_kembali">
        <br><br>
        <button type="submit" name="submit_simpan_pinjam">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"&gt;></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</div>
</html>