<?php
include("config.php");
if (isset($_GET['nis'])) {
    $title = "Edit";
    $url = 'proses-edit.php';
    $id = $_GET['nis'];
    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM t_siswa WHERE nis = $id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);
    // jika data yang diedit tidak ditemukan
    if (mysli_num_rows($query) < 1) {
   }
   // url jika edit data
}else{
    $title = "Add";
    // url jika tambah data
    $url = 'proses_pendaftaran.php';
}
?>