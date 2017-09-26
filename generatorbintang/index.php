<!DOCTYPE html>
<html>
<head>
	<title>Generator Piramid By Azam</title>
<style type="text/css">
	 body {
		background:url("bg.jpg") no-repeat;
	}
	#wrapper {
		margin : 0 auto;
		width : 30%;
	}
	.body {
		background:rgba(235,240,241,0.7);
		/*margin : 0 auto;
		width: 30%;*/
		border-radius:50px;

	}
	.body h1 {
		text-align: center;
		font-size: 28px;
		padding-top: 10px;
	}
	.error {
		background: red;
		text-align: center;
		color: white;
		padding: 10px;
	}	
	h2 {
		color: white;
	}
	table {
		padding-left: 10px;
	}
</style>
</head>
<body>
<div id="wrapper">
<div class="body">
<h1>Generator Piramid</h1>
<form method="POST" action="">
	<table>
		<tr>
			<td>Masukkan Nilai</td>
			<td>:</td>
			<td><input type="text" name="angka" placeholder="Minimal 3" required="" /></td>
		</tr>
		<tr>
			<td>Pilih Posisi</td>
			<td>:</td>
			<td>
				<select name="posisi" required="">
					<option value="kiri">Kiri</option>
					<option value="kanan">Kanan</option>
					<option value="tengah">Tengah</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pilih Style</td>
			<td>:</td>
			<td>
				<select name="style" required="">
					<option value="*">*</option>
					<option value="+">+</option>
					<option value="-">-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pilih Warna</td>
			<td>:</td>
			<td>
				<select name="warna" required="">
					<option value="white">Default (Putih)</option>
					<option value="red">Merah</option>
					<option value="yellow">Kuning</option>
					<option value="green">Hijau</option>
					<option value="gray">Abu-Abu</option>
					<option value="orange">Jingga</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><p align="right"><input type="submit" name="submit" value="Kirim"></p></td>
		</tr>
	</table>
</form>
</div>
<?php
	$angka = isset($_POST['angka']) ? $_POST['angka'] : NULL;
	$letak = isset($_POST['posisi']) ? $_POST['posisi'] : NULL;
	$style = isset($_POST['style']) ? $_POST['style'] : NULL;
	$kolor = isset($_POST['warna']) ? $_POST['warna'] : NULL;
	
	function bintang($jlh, $gaya, $posisi, $warna){
		if ($posisi == "kiri") {
			echo "<div align='left'>";
		}elseif($posisi == "kanan"){
			echo "<div align='right'>";
		}else{
			echo "<div align='center'>";
		}

		for ($i=1; $i <= $jlh; $i++) { 
			echo str_repeat("<span style='color:$warna;'>$gaya</span>
				", $i);
			echo "
			<br/>
			";
		}
		echo "</div>";
	}
	if (isset($_POST['submit'])) {
		if ($angka < 3) {
			echo "<span class='error'>Nilai harus lebih atau sama dengan angka 3</span>";
			exit();
		}elseif($angka > 25){
			echo "<span class='error'>Nilai terlalu besar! Maksimal 25</span>";
			exit();
		}
		echo "<h2>Hasil</h2>";
		bintang($angka,$style,$letak,$kolor);
	}


 ?>
 </div>
</body>
</html>
