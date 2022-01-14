<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <title>Document</title>

    <style type="text/css">
	th{
		padding: 5px 3px;
		background-color: darkgray;
	}tr td{
		padding: 3px 7px;
		background-color: lightgray;
		text-align: center;
	}
	body{
		background-color: whitesmoke;
		width: 99%;
	}
	h1{
		text-align: center;
	}table{
		margin: auto;
	}
</style>



</head>
<body>
	<h1>DATA SISWA RPL 1</h1>

    <table border = 3>
    <thead>    
    <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
        $i = 1;
        while($siswa =$listSiswa -> fetch_array())
        {?>
        <tr>
            <td><?= $i++?></td>
            <td><?= $siswa['nis']?></td>
            <td><?= $siswa['nama_lengkap']?></td>
            <td><?= $siswa['jenis_kelamin']?></td>
            <td><?= $siswa['kelas']?></td>
            <td><?= $siswa['jurursan']?></td>
            <td><a href="tambah.php">Tambah Data</a><br></td>
        </tr>
        <?php }?>
        
    </tbody>
    </table>
</body>
</html>