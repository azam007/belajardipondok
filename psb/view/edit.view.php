<div id="wrapper">
	<div id="form-daftar">
		<h1>Edit Data</h1>
		<h2>sesi - <?=$_SESSION['login']?></h2>
		<div class="notif"><?=(empty($notif)) ? "" : $notif?></div>
		<form method="POST" action="">
			<label for="nama">Nama Lengkap</label>
			<input type="text" name="nama" value="<?=$arr_edit['nama']?>" placeholder="Masukkan Nama">
			<label for="asal">Tempat, Tgl Lahir</label>
			<input type="text" name="asal" value="<?=$arr_edit['asal']?>" class="asal"><input class="tgl_lahir" type="date" name="tgl_lahir" value="<?=$arr_edit['birthday']?>">

			<input type="reset" class="btn" value="Reset">
			<input type="submit" class="btn" value="Update" name="update">
		</form>
		<div style="text-align: center"><a href="http://<?=$url?>admin/data">Kembali</a></div>
		</div>
</div>
