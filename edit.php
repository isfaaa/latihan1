<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PERPUSTAKAAN</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from perpustakaan where id='$id'");
	while ($d = mysqli_fetch_array($data)){
	?>
	<form method="post" action="update.php">
		<table>
			<tr>
				<td>Judul Buku</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type=text name="judul_buku" value="<?php echo $d['judul_buku']; ?>">
				</td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>
					<input type="text" name="penerbit" value="<?php echo $d['penerbit']; ?>">
				</td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td>
					<input type="text" name="tahun_terbit" value="<?php echo $d['tahun_terbit']; ?>">
				</td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>
					<input type="text" name="penulis" value="<?php echo $d['penulis']; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	<?php
}
?>
</body>
</html>