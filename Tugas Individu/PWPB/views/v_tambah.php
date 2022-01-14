<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="../tambah.php" method="post">
		<table>
		<tr>
		<td>NIS</td><td> : </td> <td><input type="text" name="nis" placeholder="Masukan NIS"></td>
		</tr>

		<tr>
		<td>Nama</td><td> : </td><td><input type="text" name="nama" placeholder="Masukan Nama Lengkap"></td>
		</tr>

		<tr>
		<td>Jenis Kelamin</td><td> : </td>
		<td>
			<input type="radio" name="jenis" value="L"> Laki-Laki
			<input type="radio" name="jenis" value="P"> Perempuan
		</td>
		</tr>

		<tr>
			<td>Kelas</td><td> : </td>
			<td>
			  <select name="kelas">
			  <option value="XI RPL 1">XI RPL 1</option>
			  <option value="XI RPL 2">XI RPL 2</option>
			</select>
		</td>
		</tr>

		<tr>
			<td>Jurusan</td> <td> : </td>
			<td>
				<select name="jurusan">
				<option value="REKAYASA PERANGKAT LUNAK">Rekayasa Perangkat Lunak</option>
				<option value="TEKNIK KOMPUTER JARINGAN">Teknik Komputer Jaringan</option>
				<option value="ELEKTRONIKA">Elektronika</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><input type="submit" value="Kirim"></td>
		</tr>
		</table>
	</form>


</body>
</html>