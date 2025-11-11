<?php
    include 'connect.php';

    $kode = $_GET['kode'];

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE kode='$kode'");

    header("location:show.php");
?>