<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tangga</title>

<style type="text/css">
	.kotak{
		width: 50px;
		height: 50px;
		margin-right: 7px;
		margin-top: -7px;
		display: inline-block;
	}
	.margin {
		margin-bottom: 10px;
	}


</style>

</head>
<body>

<form method="post">
	<table> 
		<tr>
			<td>Masukan Jumlah tangga: <input type="number" name="n"> <input type="submit" name="sub"></td>
		</tr>
		<tr>
			<td>
				<input type="radio" id="pilih" name="warna" value="hijau">Hijau
				<input type="radio" id="pilih" name="warna" value="merah">Merah
				<input type="radio" id="pilih" name="warna" value="biru">Biru
				<input type="radio" id="pilih" name="warna" value="kuning">Kuning
			</td>
		</tr>
	</table>



</form>
<p class="margin"></p>
<?php 
if(isset($_POST['sub'])){
	$warna = $_POST['warna'];
	if ($warna == "hijau") {
		$index = "GREEN";
	}else if ($warna == "merah") {
		$index = "RED";
	}else if ($warna == "biru") {
		$index = "BLUE";
	}else if ($warna == "kuning") {
		$index = "YELLOW";
	}

	$Jumlah = $_POST['n'];
	if($Jumlah >= 1 ){
	for ($i=1; $i <= $Jumlah; $i++) {
        for ($j=1; $j <= $i; $j++) {
            echo '<p class="kotak" style="background-color:'. $index .';"></p>';

        }
        echo '<br>';
    }
} else {
			echo '<script>alert("Yang bener aja tangganya ' . $Jumlah . ', kalo gak mau buat tangga jangan buat! (┬┬﹏┬┬)");</script>';
	}
}

 ?>

</body>
</html>