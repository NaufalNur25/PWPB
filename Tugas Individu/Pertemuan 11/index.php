<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <form action="hasil.php" method="post">
    <table>
        <tr>
            <td>Nama </td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Username"></td> 
            <td><input type="text" name="nis" placeholder="NIS"></td>
        </tr>
        <tr>
            <td>Nilai Tugas </td>
            <td>:</td>
            <td><input type="text" name="ntugas" placeholder="Nilai"></td>
        </tr>
        <tr>
           <td>Nilai Tes Harian 
           <td>:</td>
           <td><input type="text" name="ntharian" placeholder="Nilai"></td>
        </tr>
        <tr>
            <td>Nilai UTS </td>
            <td>:</td>
            <td><input type="text" name="uts" placeholder="Nilai"></td>
        </tr>
        <tr>
            <td>Nilai UAS </td>
            <td>:</td>
            <td><input type="text" name="uas" placeholder="Nilai"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="sub">
            </td>
        </tr>
    </table>
    </form>

</body>
</html>
