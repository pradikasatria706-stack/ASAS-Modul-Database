<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO siswa
(nama, nisn, jenis_kelamin, kelas, alamat, tanggal_daftar)
VALUES
('$nama', '$nisn', '$jk', '$kelas', '$alamat', NOW())";

mysqli_query($koneksi, $query);

header("Location: tampil.php");
?>
