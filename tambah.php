<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>CRUD DATA Perpustakaan</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judul_buku"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="penerbit"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="tahun_terbit"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td><input type="text" name="penulis"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>