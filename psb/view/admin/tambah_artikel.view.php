<div id="wrapper">
	<h1><?=$title?></h1>
	<div class="notif"><?=(empty($notif)) ? "" : $notif?></div>	
	<form method="POST" action="">
		<input type="text" style="border: 1px solid #ddd;margin:10px 0;" name="judul" placeholder="Judul Artikel">
		<textarea  style="margin:10px 0;" name="isi" class="ckeditor" id="ckeditor"></textarea>
		<fieldset>
		<legend>Kategori </legend> 
		<?php
		$no = 1;
		while ($arr_select_kat = mysqli_fetch_assoc($sql_select_kat)) :
		?>
		<input type="radio" id="radio<?=$no?>" name="kategori" value="<?=$arr_select_kat['nama_kategori']?>">
		<label for="radio<?=$no?>"><?=$arr_select_kat['nama_kategori']?></label>
		<?php
		$no++;
		endwhile;
		?>
       	</fieldset>
       	<fieldset>
       		<legend>Publis</legend>
       		<select name="publis">
       			<option value="1">Ya</option>
       			<option value="0">Tidak</option>
       		</select>
       	</fieldset>
		<input type="submit" name="submit" value="Tambah Artikel">
		
	</form>
</div>