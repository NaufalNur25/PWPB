<h1><strong>Hitung Jumlah Huruf</strong></h1>
<form method="post">
Masukkan Kalimat <input type="text" name="kalimat" id=""><br>
a<input type="radio" name="pilihan_huruf" id="" value="a">
i<input type="radio" name="pilihan_huruf" id="" value="i">
u<input type="radio" name="pilihan_huruf" id="" value="u">
e<input type="radio" name="pilihan_huruf" id="" value="e">
o<input type="radio" name="pilihan_huruf" id="" value="o">
<button type="submit">Hitung</button>
</form>
<?php 
$kalimat = $_POST['kalimat'] ; 
$pilihan_huruf = $_POST['pilihan_huruf'] ; 

echo "$kalimat <br>" ; 
echo "$pilihan_huruf <br>" ; 

$panjang_kalimat = strlen($kalimat);

echo "Panjang Kalimat Adalah : $panjang_kalimat Huruf <br>";

$hitung = 0 ; 
for ( $i = 0 ; $i < $panjang_kalimat ; $i++) {
    if ( $kalimat[$i] == $pilihan_huruf ){
        $hitung++ ; 
    }
}
echo "Jumlah Huruf $pilihan_huruf 
pada Kalimat $kalimat adalah $hitung" ; 

?>