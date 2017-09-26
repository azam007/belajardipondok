
<?php 
    $bangundatar = isset($_GET['bangundatar']) ? $_GET['bangundatar'] : NULL;
    include "func.php";

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Hitung Bangun Datar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="kotak">
        <div id="header">
            <h1>Hitung Bangun Datar</h1>
            <span>Created By <b>Rifqi Khoeruman Azam</b></span>
        </div>
<?php 
    if ($bangundatar) {
        include "form.php";
        if (isset($_POST['cari'])) {
            include "cari.php";
        }
    }
    else {
 ?>
        <form method="GET" action="">
            <select id="bangundatar" name="bangundatar">
                <option value="0">Pilih..</option>
                <option value="persegi">Persegi</option>
                <option value="ppanjang">Persegi Panjang</option>
                <option value="jgenjang">Jajar Genjang</option>
                <option value="lingkaran">Lingkaran</option>
                <option value="layang">Layan-Layang</option>
                <option value="ketupat">Belah Ketupat</option>
                <option value="trapesium">Trapesium</option>
                <option value="segitiga">Segitiga</option>
            </select>
            <input type="submit" class="enter" name="" value="ENTER">
        </form>
<?php 
    }

 ?>

</body>
</html>