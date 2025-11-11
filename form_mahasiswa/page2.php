<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>DATA MAHASISWA</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="container">
			<h3>DATA MAHASISWA</h3>
			<br />
			<a class="button" href="page1.html">+Tambah Siswa</a>
			<br />
			<br />
			<table border="1">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Nama</th>
					<th>Jurusan</th>
					<th>Nim</th>
					<th>Alamat</th>
				</tr>
				<?php 
                    include 'connect.php';
                    $no = 1;
                    $data = mysqli_query($conn,"select * from mahasiswa");
                    while($d = mysqli_fetch_array($data)){
                ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['kode']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['jurusan']; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td>
						<a href="update.php?id=<?php echo $d['kode']; ?>">UPDATE</a>
						<a href="delete.php?id=<?php echo $d['kode']; ?>">DELETE</a>
					</td>
				</tr>
                <?php 
                    }
                ?>
			</table>
		</div>
	</body>
</html>
