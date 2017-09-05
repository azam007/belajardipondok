<div id="wrapper">
	<h1><?=$title?></h1>
	<div class="notif"><?=(empty($notif)) ? "" : $notif?></div>
	<form method="POST" action="">
		<input type="text" style="border: 1px solid #ddd;margin:10px 0;" name="nama_kategori" placeholder="kategori">
		<input type="submit" name="submit" value="Tambah Kategori">
	</form>
</div>