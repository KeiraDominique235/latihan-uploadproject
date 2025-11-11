<?php
include 'connect.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
mysqli_query($conn,"insert into mahasiswa(nama,nim,alamat,jurusan) values('$nama','$nim','$alamat','$jurusan')");
header("location:page2.php");
?>