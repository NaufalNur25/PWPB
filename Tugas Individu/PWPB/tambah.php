<?php 
	include "lib/library.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$jenis = $_POST['jenis'];
		$kelas = $_POST['kelas'];
		$jurusan = $_POST['jurusan'];

		$sql = "INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, kelas, jurursan) VALUES ('$nis', '$nama', '$jenis', '$kelas', '$jurusan')";
		$mysqli -> query($sql) or die ($mysqli->error);
		header('location: index.php');
	}
	include "views/v_tambah.php";
 ?>