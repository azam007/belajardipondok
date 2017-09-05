<div id="wrapper">
	<div id="form-daftar">
		<h1>Pengaturan - <?=$sesiLogin?></h1>
		<div class="notif"><?=(empty($notif)) ? "" : $notif?></div>
		<form method="POST" action="">
			<label for="username">Username</label>
			<input type="text" name="username" value="<?=$arr_select['username']?>" placeholder="Masukkan Nama">
			<label for="password">Password</label>
			<input type="password" style="width:100%" name="password" value="" class="asal">

			<input type="reset" class="btn" value="Reset">
			<input type="submit" class="btn" value="Update" name="update">
		</form>
		</div>
		<h2>- Pengaturan Tampilan</h2><br>
		Pilih warna : 
		<div class="warna warna-jingga">Jingga
		</div>
		<div class="warna warna-merah">Merah
		</div>
		<div class="warna warna-hijau">Hijau
		</div>
		<div class="warna warna-biru">Biru
		</div>
		<div class="warna warna-default">Biru
		</div>
</div>
