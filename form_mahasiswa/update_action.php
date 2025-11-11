<?php  
    include 'connect.php';

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', alamat='$alamat' WHERE kode='$kode'");

    header("location: show.php");
?>