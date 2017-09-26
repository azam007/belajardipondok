<?php 
session_start();
	$nama = isset($_POST['nama']) ? $_POST['nama'] : NULL;
	$hp = isset($_POST['hp']) ? $_POST['hp'] : NULL;
	$kirim = isset($_POST['kirim']) ? $_POST['kirim'] : NULL;
	$msg = isset($_POST['msg']) ? $_POST['msg'] : NULL;
	$emot = isset($_POST['emot']) ? $_POST['emot'] : NULL;
	$masuk = isset($_POST['masuk']) ? $_POST['masuk'] : NULL;
	$file = fopen("data/pesan.txt", "a+");

		$_SESSION['username'] = $nama;
		$_SESSION['no_hp'] = $hp[0] . $hp[1];
		echo $_SESSION['username'];
	if ($kirim) {
		$insert = fputs($file, "<div class=\"chat\">
<img src=\"\" alt=\"poto\" class=\"poto\" />
 <span class=\"isi\">".$msg."</span> 
</div>
<span class=\"name\">".$nama."</span> 
<span class=\"tgl\">15 Jul 2017</span>");
		if ($insert) {
			echo "<script>alert('Successfully Updated'); window.location = 'index.php';</script>";
		}
	}
 ?> 
 <!DOCTYPE html>
  <html>
   <head>
        <title>Pesan</title>
         <link rel="stylesheet" type="text/css" href="gaya.css">
	</head>
	<body> 
	<div id="header">
		<div id="judul">ZAMCHAT</div>
		<div class="setting">
		<img src="gambar/setting.png">
		</div>
	</div> 
	<div class="notip">     Anda belum menentukan Avatar Anda! </div> 

	<?php 
		$baca = fread($file, filesize("data/pesan.txt"));
		echo $baca;
	 ?>

<div class="pembatass">&nbsp;</div>
<form method="POST"> 
 	<div id="msg">
 	 <span class="nama">Nama : <?=$nama?></span> 
 	 <span class="hp">Hp : <?php echo
"$hp[0]$hp[1]"?></span><br> 
	<input class="input" title="Tuliskan Isi Pesan" placeholder="Tulis Pesan Anda..." type="text" name="msg"/> 
	<div class="emot"><span>Emoticon :</span><br>
	     <input type="radio" name="emot" value="emot1">:)
	     <input type="radio" name="emot" value="emot2">:(
	     <input type="radio" name="emot" value="emot3">B)
	     <input type="radio" name="emot" value="emot4">:*
	     <input type="radio" name="emot" value="emot5">:v 
	</div>
	<div id="kirim">
	 <input type="submit" name="kirim" value="KIRIM"> </div>
	</div> 
</form>
</body>
</html>
