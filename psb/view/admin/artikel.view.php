<div id="wrapper">
	<h2 style="border-bottom: 1px groove #333">Artikel <a href="http://<?=$url?>admin/artikel/tambah">(Tambah)</a></h2>
	<table class="artikel">
		<tr>
			<th>JUDUL</th>
			<th>KATEGORI</th>
			<th>PENULIS</th>
			<th>TANGGAL</th>
			<th>DIPUBLIS</th>
			<th>AKSI</th>
		</tr>
		<?php
		$sql_select_artikel = mysqli_query($konek, "SELECT * FROM tb_artikel WHERE penulis='$sesiLogin'")
		?>
		<tr>
			<td>Tutorial Anu askd asd asd</td>
			<td>General</td>
			<td>Admin</td>
			<td>24-08-2017</td>
			<td>Ya</td>
			<td>EDIT | DELETE</td>
		</tr>
	</table>
	<br><br><br>
	<h2 style="border-bottom: 1px groove #333">Kategori <a href="http://<?=$url?>admin/kategori/tambah">(Tambah)</a></h2>
	<?php
	if ($num_select) :
		while($arr_select = mysqli_fetch_assoc($sql_select)) {
			$e_kategori = strtolower(str_replace(" ", "-", $arr_select['nama_kategori']));
	?>
	<div class="kotak-kategori"><?="({$arr_select['count']}) " . $arr_select['nama_kategori']?>
		<span class="edit" title="edit">
			<a href="http://<?=$url?>admin/kategori/edit/<?=$e_kategori?>">E</a>
		</span>
		<span class="delete" title="delete"><a href="http://<?=$url?>admin/kategori/hapus/<?=$e_kategori?>">D</a></span>
	</div>
	<?php
		}
		// echo "$page";
	endif;
	?>
</div>