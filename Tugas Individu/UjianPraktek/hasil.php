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
        border-radius: 50px;
    }
    .margin {
        margin-bottom: 10px;
    }


</style>

</head>
<body>
<p class="margin"></p>
<?php 
if(isset($_POST['sub'])){
    $warna = $_POST['warna'];
    $Jumlah = $_POST['n'];
    if($Jumlah >= 1 ){
    for ($i=1; $i <= $Jumlah; $i++) {
        for ($j=$Jumlah; $j >= $i; $j--) {
            echo '<p class="kotak" style="background-color:'. $warna .';"></p>';
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