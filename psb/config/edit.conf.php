<?php
$id = isset($_GET['id']) ? $_GET['id'] : NULL;
$sql_edit = mysqli_query($konek, "SELECT * FROM tb_santri WHERE id='$id'");
$arr_edit = mysqli_fetch_assoc($sql_edit);
// $sql_select = mysqli_query($konek,"SELECT * FROM tb_santri");
$total = mysqli_num_rows($sql_edit);
if ($total == 0) {
	header("location:http://{$url}admin/data");
}
if (isset($_POST['update'])) {
	$nama = $_POST['nama']; $asal = $_POST['asal']; $tgl_lahir = $_POST['tgl_lahir'];
	// $birthday = $_POST['birthday']; 
	if ($nama == $arr_edit['nama'] && $asal == $arr_edit['asal'] && $tgl_lahir == $arr_edit['birthday']) {
		$notif = notif("error","Tidak ada perubahan - <a href='$_SERVER[REQUEST_URI]'>Reload</a>");
	}elseif(empty($nama) || empty($asal) || empty($asal) || empty($tgl_lahir)){
		$notif = notif("error","Tidak boleh kosong - <a href='$_SERVER[REQUEST_URI]'>Reload</a>");
	}else {
		$sql_update = mysqli_query($konek,"UPDATE tb_santri SET nama='$nama', asal='$asal',birthday='$tgl_lahir' WHERE id='$id'");
		if ($sql_update) {
			$notif = notif("success","Berhasil diperbarui, - <a href='$_SERVER[REQUEST_URI]'>Reload</a>");
		}else{
			$notif = notif("error","Gagal!" . myslqi_error($konek) . ", - <a href='$_SERVER[REQUEST_URI]'>Reload</a>");
		}
	}
}