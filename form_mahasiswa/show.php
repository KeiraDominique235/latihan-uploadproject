<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>DATA SISWA</h2>
        <div>
            <a class="button" href="add.php">+ TAMBAH SISWA</a>
        </div>

        <table class="data-table"> 
            <thead>
            <tr>
                <th>No.</th> 
                <th>Nama</th> 
                <th>NIM</th> 
                <th>Jurusan</th> 
                <th>Alamat</th>
                <th class="opsi">Opsi</th> 
            </tr>
            </thead>
            <tbody>
            <?php
                include 'connect.php'; 
                $no = 1; 
                $data = mysqli_query($conn, "SELECT * FROM mahasiswa");

                while($d = mysqli_fetch_array($data)){ 
            ?>
            <tr>
                <td><?php echo $no++; ?></td> 
                <td><?php echo $d['nama']; ?></td> 
                <td><?php echo $d['nim']; ?></td> 
                <td><?php echo $d['jurusan']; ?></td> 
                <td><?php echo $d['alamat']; ?></td> 
                <td class="actions">
                    <a class="update" href="update.php?kode=<?php echo $d['kode']; ?>">UPDATE</a>
                    <a class="delete" href="delete.php?kode=<?php echo $d['kode']; ?>">DELETE</a>
                </td>
            </tr>
            <?php
                } 
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>