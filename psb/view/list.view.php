<?php
$page = ($sesiLogin) ? $typeUser."/data" : "list";
?>
<div id="wrapper">
	<h1>Data Calon Santri yang Sudah Terdaftar</h1>
	<div class="form-cari">
		<form method="POST" action="http://<?=$url.$page?>/cari">
			<input type="text" name="keyword" placeholder="Cari..."/>
			<input type="submit" value="Cari">
		</form>
	</div>
	<?php
		if ($keyword) {
			echo "<div class='sort'>Hasil pencarian dari <u>$keyword</u> , Total $cek kueri</div>";
		}else{
			echo "<div class=\"sort\">Sort : (<a href=\"http://{$url}{$page}/sort=AtoZ\">A-Z</a>) (<a href=\"http://{$url}{$page}/sort=ZtoA\">Z-A</a>) <a href=\"http://{$url}{$page}\">Reset</a></div>";
		}
	?>
	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<th>TTL</th>
			<?=$typeUser == 'admin' ? "<th colspan='2'>Action</th>" : ""?>
		</tr>
		<?php
		if ($cek) {
			while ($s_list = mysqli_fetch_assoc($sql_select)) {
				echo "<tr>";
				echo "<td>".$no++."</td>";
				echo "<td>$s_list[nama]</td>";
				echo "<td>$s_list[birthday]</td>";
				echo "<td>$s_list[asal]</td>";
				echo ($typeUser == 'admin') ? "
					  <td><a class='btn btn-hijau' href='?admin=data&act=terima&id={$s_list['id']}'>Terima</a>
					  	  <a class='btn btn-merah' href='?admin=data&act=tolak&id={$s_list['id']}'>Tolak</a></td> 
					  <td><a class='btn btn-hijau' href='http://{$url}admin/data/aksi_edit/{$s_list['id']}'>Edit</a>
					      <a class='btn btn-merah' href='http://{$url}admin/data/aksi_hapus/{$s_list['id']}'>Hapus</a></td>" : "";
				echo "</tr>";
			}
		}else {
			echo "<tr>";
			echo "<td colspan='";
			echo $typeUser == 'admin' ? "6" : "4";
			echo "'>Tidak ada data</td>";
		}

		// if($cek>=5 && $keyword=="") : ?>
		<tr>
			<td colspan="<?=$typeUser == 'admin' ? "6" : "4"?>">
				<?php
					if ($sort == "AtoZ") {
						for ($i=1; $i <= $total_hal ; $i++) { 
							if ($hal==$i) {
								echo "<span class='halaman-aktif'><a href='http://{$url}{$page}/$i/sort=AtoZ'>$i</a></span>
							";
							}else{
								echo "<span class='halaman'><a href='http://{$url}{$page}/$i/sort=AtoZ'>$i</a></span>
							";
							}
						}
					}
					elseif ($sort == "ZtoA") {
						for ($i=1; $i <= $total_hal ; $i++) { 
							if ($hal==$i) {
								echo "<span class='halaman-aktif'><a href='http://{$url}{$page}/$i/sort=ZtoA'>$i</a></span>
							";
							}else{
								echo "<span class='halaman'><a href='http://{$url}{$page}/$i/sort=ZtoA'>$i</a></span>
							";
							}
						}
					}
					elseif ($keyword) {
						echo "...";
					}
					else {
						for ($i=1; $i <= $total_hal ; $i++) { 
							if ($hal==$i) {
								echo "<span class='halaman-aktif'><a href='http://{$url}{$page}/$i'>$i</a></span>
							";
							}else{
								echo "<span class='halaman'><a href='http://{$url}{$page}/$i'>$i</a></span>
							";
							}
						}
					}
				?>
			</td>
		</tr>
		<?php 
			// else :
			// 	"";
			// endif;
		 ?>
	</table>	
</div>