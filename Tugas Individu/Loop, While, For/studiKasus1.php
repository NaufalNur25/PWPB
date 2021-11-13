<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Studi Kasus 1</title>
</head>
<body>

	<form method="post">
		<input type="number" name="n">
		<button name="submit">OK!</button>
	</form>


 <?php 
if (isset($_POST['submit'])) {
 echo '
	<table>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIS</th>
			<th>Alamat</th>
			<th>Tempat Tanggal Lahir</th>
		</tr>';
 
 	$banyak = $_POST['n'];

 	for ($i=1; $i <= $banyak; $i++) { 
 		 echo '
 		 <tr>
			<td><span>' .$i. '</span></td>
			<td><input type="text" name="nama"></td>
			<td><input type="text" name="nis"></td>
			<td><input type="text" name="alamat"></td>
			<td><input type="date" name="ttl"></td>
		</tr>
 		 ';
 	}
 }
  ?>
	</table>



</body>
</html>