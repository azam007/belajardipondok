<div id="wrapper">
	<div class="pemberitahuan test">
		<h1>Hapus #<?=$id?></h1>
		<div class="notif"><?=(empty($notif)) ? "" : $notif?></div>
		<p>Yakin Untuk Menghapus data ini ?</p>
		<form method="POST" action=""><input type="hidden" value="<?=$id?>" name="id"/><input class="button" type="submit" name="hapus" value="Ya!"></form>
		<a href="http://<?=$url?>admin/data" class="btn-back">Kembali</a>
		<table style="background: #ECFFEB">
			<tr>
				<td width="200px">Nama</td>
				<td>:</td>
				<td><?=$arr_hapus['nama']?></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><?=$arr_hapus['asal']?></td>
			</tr>
			<tr>
				<td>Tgl lahir</td>
				<td>:</td>
				<td><?=$arr_hapus['birthday']?></td>
			</tr>
		</table>
	</div>
</div>