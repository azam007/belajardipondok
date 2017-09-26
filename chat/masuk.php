<!DOCTYPE html>
<html>
<head>
	<title>Masuk</title>
	<link rel="stylesheet" type="text/css" href="../chat/gaya.css">
	<style type="text/css">
		body{
			background: rgba(232,76,61,0.3) url(gambar/bg.jpg) center center fixed;
			/*background: ;*/
		}
	</style>
</head>
<body>
<div id="wrapper">
<div id="login">
<h1 class="judul">Login</h1>
<form method="POST" action="index.php">
	<div class="login">Nama  <input type="text" name="nama"/></div>
	<div class="login">No. HP 
	<select name="hp[]" title="Kode Negara" class="kodenegara">
	<?php 
		echo readfile("../chat/data/kodenegara.txt");
	?>
	</select><input type='text' name="hp[]" title='Format: 8986864044' maxlength="12"> </div>
	<div class="login"><input type="submit" name="masuk" value="Masuk Sekarang"></div>
</form>
</div>
</body>
</html>