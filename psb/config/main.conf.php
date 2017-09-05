<?php
session_start();
// Setting Konfigurasi databes
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'crud');

$konek = mysqli_connect(HOST,USER,PASS,DB);
echo (!$konek) ? 'gagal koneksi periksa file config/func.php':'';

// variable get untuk halaman
$p = isset($_GET['p']) ? $_GET['p'] : NULL;
$admin = isset($_GET['admin']) ? $_GET['admin'] : NULL;
$santri = isset($_GET['santri']) ? $_GET['santri'] : NULL;
$act = isset($_GET['act']) ? $_GET['act'] : NULL;
$template = "view/template.view.php";
$url = $_SERVER['HTTP_HOST'] . "/";

// Cek Tipe User & Sesi Login
$sesiLogin = isset($_SESSION['login']) ? $_SESSION['login'] : "";
$typeUser = isset($_SESSION['type']) ? $_SESSION['type'] : "";


// untuk view
if ($p && file_exists("view/$p.view.php")) {
	$title = ucfirst($p) . " Santri";
	include "config/{$p}.conf.php";
	$page = "view/$p.view.php";
}elseif($p == "home"){
	$title = "Pondok Programmer";
	$page = 'view/main.view.php';
}else{
	$title = "Pondok Programmer";
	$page = 'view/main.view.php';

}


// admin
if ($admin && $typeUser == "admin") {
	// echo "$act";
	if ($admin && file_exists("view/admin/$admin.view.php") && !$act) {
		if (!empty($_SESSION['login'])) {
			// echo "$admin";
			$title = ucfirst($admin) . " - Admin";
			include "config/admin/{$admin}.conf.php";
			$page = "view/admin/{$admin}.view.php";
		}
		else{
			header("location:?p=login");
		}
	}elseif ($admin == "logout") {
		if (isset($_SESSION['login'])) {
			$hps_session = session_destroy();
			echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
			// echo "string";
		}
	}elseif($admin == "data"){
		if ($act == "edit") {
			$title = "Edit " . ucfirst($admin) . " Calon Santri - Admin";
			include "config/edit.conf.php";
			$page = "view/edit.view.php";
		}elseif($act == "hapus"){
			$title = "Hapus " . ucfirst($admin) . " Calon Santri - Admin";
			include "config/hapus.conf.php";
			$page = "view/hapus.view.php";
		}else{
			$title = ucfirst($admin) . " Calon Santri - Admin";
			include "config/list.conf.php";
			$page = "view/list.view.php";
		}
	}elseif ($act) {
		$title = ucfirst($act." ".$admin) . " - Admin";
		include "config/admin/{$act}_{$admin}.conf.php";
		$page = "view/admin/{$act}_{$admin}.view.php";
	}elseif($admin == "setting"){
		$title = ucfirst($admin) . " - Admin";
		include "config/admin/setting.conf.php";
		$page = "view/admin/setting.view.php";
	}else {
			$title = "Home - Admin";
			include "config/admin/home.conf.php";
			$page = "view/admin/home.view.php";
	}
}

if ($santri && $typeUser == "santri") {
	if ($santri == "logout") {
		if (isset($_SESSION['login'])) {
			$hps_session = session_destroy();
			echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
		}
	}elseif($santri == "data"){
			$title = ucfirst($admin) . " Calon Santri - Admin";
			include "config/list.conf.php";
			$page = "view/list.view.php";
	}else {
			$title = "Home - Admin";
			include "config/admin/home.conf.php";
			$page = "view/admin/home.view.php";
	}
}

// function
function cekString($cek){
	if (is_array($cek)) {
		$salah = [];
		foreach ($cek as $key => $value) {
			if ($key != 'password' && $key != 'konf_password' && $key != 'tgl_lahir') {
				if ($preg = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $value)) {
					$salah[] = $key;
				}
			}
		}
		if (empty($salah)) {
			return false;
		}else{
			return $salah;
		}
	}
}
function notif($notif, $isi){
	return "<div class='$notif'><i class='fa fa-bell' aria-hidden='true'></i> $isi</div>";
}