<!DOCTYPE html>
<html>
<head>
	<title>TABEL DATA SISWA</title>
</head>
<body>
 
	<h2>TABEL DATA SISWA</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIS</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from datasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NAMA']; ?></td>
				<td><?php echo $d['NIS']; ?></td>
				<td><?php echo $d['ALAMAT']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['ID']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['ID']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>