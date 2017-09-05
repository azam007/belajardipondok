<?php
$id = isset($_GET['id']) ? $_GET['id'] : NULL;
$sql_select = mysqli_query($konek, "SELECT * FROM tb_santri WHERE id='$id'");
$arr_hapus = mysqli_fetch_assoc($sql_select);
$total = mysqli_num_rows($sql_select);
if ($total == 0) {
	header("location:http://{$url}admin/data");
}
$hapus = isset($_POST['hapus']) ? $_POST['hapus'] : NULL;
if ($hapus) {
	$sql_hapus = mysqli_query($konek,"DELETE FROM tb_santri WHERE id=$id");
	if ($sql_hapus) {
		$notif = notif('success',"Berhasil dihapus - <a href='$_SERVER[REQUEST_URI]'>Reload</a>");
	}else{
		$notif = notif('error',"Gagal dihapus ". mysqli_error($konek) ." - <a href='$_SERVER[REQUEST_URI]'>Reload</a>");
	}
}