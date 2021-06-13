<?php
include 'model.php';
//tbl absen
if (isset($_POST['submit_simpan_pinjam'])) {
 $id_pinjam = $_POST['id_pinjam'];
 $id_anggota = $_POST['id_anggota'];
 $nama_buku = $_POST['nama_buku'];
 $tgl_pinjam = $_POST['tgl_pinjam'];
 $tgl_kembali = $_POST['tgl_kembali'];
 $model = new Model();
 $model->insert_pinjam($id_pinjam, $id_anggota, $nama_buku, $tgl_pinjam, $tgl_kembali);
 header('location:pinjam.php');
}
if (isset($_POST['submit_edit_pinjam'])) {
 $id_pinjam = $_POST['id_pinjam'];
 $id_anggota = $_POST['id_anggota'];
 $nama_buku = $_POST['nama_buku'];
 $tgl_pinjam = $_POST['tgl_pinjam'];
 $tgl_kembali = $_POST['tgl_kembali'];
 $model = new Model();
 $model->update_pinjam($id_pinjam, $id_anggota, $nama_buku, $tgl_pinjam, $tgl_kembali);
 header('location:pinjam.php');
}
if (isset($_GET['pinjam_id'])) {
 $id_pinjam = $_GET['pinjam_id'];
 $model = new Model();
 $model->delete_pinjam($id_pinjam);
 header('location:pinjam.php');
}
//tbl anggota
if (isset($_POST['submit_simpan_anggota'])) {
 $id_anggota = $_POST['id_anggota'];
 $nama = $_POST['nama'];
 $status = $_POST['status'];
 $alamat = $_POST['alamat'];
 $model = new Model();
 $model->insert_anggota($id_anggota, $nama, $status, $alamat);
 header('location:anggota.php');
}
if (isset($_POST['submit_edit_anggota'])) {
 $id_anggota = $_POST['id_anggota'];
 $nama = $_POST['nama'];
 $status = $_POST['status'];
 $alamat = $_POST['alamat'];
 $model = new Model();
 $model->update_anggota($id_anggota, $nama, $status, $alamat);
 header('location:anggota.php');
}
if (isset($_GET['anggota_id'])) {
 $id_anggota = $_GET['anggota_id'];
 $model = new Model();
 $model->delete_anggota($id_anggota);
 header('location:anggota.php');
}
