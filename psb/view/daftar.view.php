<div id="wrapper">
	<div id="form-daftar">
		<h1>Pendaftaran Santri Baru</h1>
		<div class="notif"><?=(empty($notif)) ? "" : $notif?></div>
		<form method="POST" action="">
			<label for="nama">Nama Lengkap</label>
			<input type="text" name="daftar[nama]" value="<?=$daftar['nama']?>" placeholder="Masukkan Nama">
			<label for="asal">Tempat, Tgl Lahir</label>
			<input type="text" name="daftar[asal]" value="<?=$daftar['asal']?>" class="asal"><input class="tgl_lahir" type="date" name="daftar[tgl_lahir]" value="<?=$daftar['tgl_lahir']?>">
			<label for="username">Username</label>
			<input type="text" name="daftar[username]" value="<?=$daftar['username']?>" placeholder="Masukkan Username">
			<label for="password">Kata Sandi</label>
			<input type="password" name="daftar[password]" placeholder="Masukkan Password">
			<label for="konf_password">Konfirmasi Kata Sandi</label>
			<input type="password" name="daftar[konf_password]" placeholder="Konfirmasi Password">
			<input type="reset" class="btn" value="Reset">
			<input type="submit" class="btn" value="Daftar">
		</form>
	</div>
</div>
