<?php  
    include 'connect.php';

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "INSERT INTO mahasiswa (nama, nim, jurusan, alamat) VALUES ('$nama', '$nim', '$jurusan', '$alamat')");

    header("location: show.php");
?>