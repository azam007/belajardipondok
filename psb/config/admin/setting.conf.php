<?php
$sql_select = mysqli_query($konek, "SELECT * FROM tb_user WHERE username='$sesiLogin' AND type='$typeUser'");
$arr_select = mysqli_fetch_array($sql_select);
// print_r($arr_select[0]);
if (isset($_POST['update'])) {
	if ($_POST['username'] == NULL || $_POST['password'] == NULL) {
		$notif = notif('error','tidak boleh kosong');
	}else{
		$pwd = md5($_POST['password']);
		$sql_update = mysqli_query($konek, "UPDATE tb_user SET username='$_POST[username]', password='$pwd' WHERE id='$arr_select[0]'");
		if ($sql_update) {
			$_SESSION['login'] = $_POST['username'];
		 	$notif = notif("success","Data berhasil diperbarui - <a href='$_SERVER[REQUEST_URI]'>Reload</a>");
		 }else{
		 	$notif = notif("error","Tidak ada perubahan ". mysqli_error($konek) ." - <a href='$_SERVER[REQUEST_URI]'>Reload</a>");
		 }
	}
}