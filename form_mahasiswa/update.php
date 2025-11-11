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
        <div>
            <a class="button ghost" href="show.php">KEMBALI</a>
        </div>
        <br>
        <h3>UBAH DATA SISWA</h3>
        <?php
            include 'connect.php'; 
            $kode = $_GET['kode']; // Get id from URL

            $data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE kode = '$kode'");

            while($d = mysqli_fetch_array($data)){ 
        ?>
        <br>
        <form action="update_action.php" method="POST">
            <fieldset class="form-fieldset">
                <legend>FORM MAHASISWA</legend>
                
                <table>
                <tr>            
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="kode" value="<?php echo $d['kode']; ?>"> 
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>"> 
                    </td>                   
                </tr>
                <tr>            
                    <td>NIM</td>
                    <td><input type="text" name="nim" value="<?php echo $d['nim']; ?>"></td>               
                </tr>
                <tr>            
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>                    
                </tr>
                <tr>            
                    <td>Alamat</td>
                    <td>
                        <textarea name="alamat" rows="4" maxlength="400"><?php echo $d['alamat']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="button" type="submit" value="SIMPAN"></td>                    
                </tr>
                </table>
            </fieldset>
        </form>
        <?php
        } // End of while loop
        ?>
    </div>
</body>
</html>