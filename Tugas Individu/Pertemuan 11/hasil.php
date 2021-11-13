<?php 
//index nilai
if (isset($_POST['sub'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $ntugas = $_POST['ntugas'];
    $ntharian = $_POST['ntharian'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

        $nilaiAkhir = ($ntugas * 20/100) + ($ntharian * 10/100) + ($uts * 30/100) + ($uas * 40/100);
        if ($nilaiAkhir < 50) {
            $index = '<span style="color: RED";>' . 'E' . '</span>';
            $nilaiAkhir = '<span style="color: RED";>' . "$nilaiAkhir" . '</span>';
        } else if ($nilaiAkhir < 60) {
            $index = '<span style="color: ORANGE";>' . 'D' . '</span>';
            $nilaiAkhir = '<span style="color: ORANGE";>' . "$nilaiAkhir" . '</span>';
        } else if ($nilaiAkhir < 70) {
            $index = '<span style="color: YELLOW";>' . 'C' . '</span>';
            $nilaiAkhir = '<span style="color: YELLOW";>' . "$nilaiAkhir" . '</span>';
        } else if ($nilaiAkhir < 80) {
            $index = '<span style="color: BLUE";>' . 'B' . '</span>';
            $nilaiAkhir = '<span style="color: BLUE";>' . "$nilaiAkhir" . '</span>';
        }else {
            $index = '<span style="color: GREEN";>' . "A" . '</span>';
            $nilaiAkhir = '<span style="color: GREEN";>' . "$nilaiAkhir" . '</span>';
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>



    <style>
        table, tr, td {
        border: 1px solid black;
        padding: 10px;
        margin: 0 auto;
        }
        body{
            width: 100%;
        } table{
            background-color: #666;
        } tr td{
            background-color: antiquewhite;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nama </td>
            <td><?php echo $nama;?></td> 
            <td><?php echo $nis;?></td>
        </tr>
        <tr>
            <td>Nilai Tugas </td>
            <td colspan="2"><?php echo $ntugas;?></td> 
        </tr>
        <tr>
            <td>Nilai Tes Harian </td>
            <td colspan="2"><?php echo $ntharian;?></td> 
        </tr>
        <tr>
            <td>Nilai UTS </td>
            <td colspan="2"><?php echo $uts;?></td> 
        </tr>
        <tr>
            <td>Nilai UAS </td>
            <td colspan="2"><?php echo $uas;?></td> 
        </tr>
        <tr>
            <td>Nilai Akhir </td>
            <td colspan="2"><?php echo $nilaiAkhir;?></td> 
        </tr>
        <tr>
            <td>Index </td>
            <td colspan="2"><?php echo $index;?></td> 
        </tr>




    </table>
</body>
</html>