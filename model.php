<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    //tabel pinjam
    public function insert_pinjam($id_pinjam, $id_anggota, $nama_buku, $tgl_pinjam, $tgl_kembali)
    {
        $sql = "INSERT INTO tbl_pinjam (id_pinjam, id_anggota, nama_buku, tgl_pinjam, tgl_kembali) 
        VALUES ('$id_pinjam', '$id_anggota', '$nama_buku', '$tgl_pinjam', '$tgl_kembali')";
        $this->conn->query($sql);
    }
    public function tampil_data_pinjam()
    {
        $sql = "SELECT * FROM tbl_pinjam";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_pinjam($id)
    {
        $sql = "SELECT * FROM tbl_pinjam WHERE id_pinjam='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_pinjam($id_pinjam, $id_anggota, $nama_buku, $tgl_pinjam, $tgl_kembali)
    {
        $sql = "UPDATE tbl_pinjam SET id_anggota='$id_anggota', nama_buku='$nama_buku', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali' WHERE id_pinjam='$id_pinjam'";
        $this->conn->query($sql);
    }
    public function delete_pinjam($pinjam_id)
    {
        $sql = "DELETE FROM tbl_pinjam WHERE id_pinjam='$pinjam_id'";
        $this->conn->query($sql);
    }

    //tbl anggota
    public function insert_anggota($id_anggota, $nama, $status, $alamat)
    {
        $sql = "INSERT INTO tbl_anggota (id_anggota, nama, status, alamat) 
        VALUES ('$id_anggota', '$nama', '$status', '$alamat')";
        $this->conn->query($sql);
    }
    public function tampil_data_anggota()
    {
        $sql = "SELECT * FROM tbl_anggota";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_anggota($id)
    {
        $sql = "SELECT * FROM tbl_anggota WHERE id_anggota='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_anggota($id_anggota, $nama, $status, $alamat)
    {
        $sql = "UPDATE tbl_anggota SET nama='$nama', status='$status', alamat='$alamat' WHERE id_anggota='$id_anggota'";
        $this->conn->query($sql);
    }
    public function delete_anggota($anggota_id)
    {
        $sql = "DELETE FROM tbl_anggota WHERE id_anggota='$anggota_id'";
        $this->conn->query($sql);
    }

    //tbl jadwal
    public function tampil_data()
    {
        $sql = "SELECT tbl_pinjam.*, nama, status FROM tbl_pinjam INNER JOIN tbl_anggota ON tbl_pinjam.id_anggota = tbl_anggota.id_anggota";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

}