<?php
$daftar = isset($_POST['daftar']) ? $_POST['daftar'] : NULL;
// var_dump($daftar);
if ($daftar) {
	// Mengecek Kosong atau tidak
	foreach ($daftar as $key) {
		if ($key == NULL) {
			$notif = notif('error','Semua form wajib diisi!');
		}
	}
	$cek = cekString($daftar);
	if ($daftar['password'] != $daftar['konf_password']) {
		$notif = notif('error','Password tidak sama!');
	}elseif($cek){
		$arr_toS = implode(" ", $cek);
		$patterns = array('/nama/','/asal/','/username/');
		$replaces = array('Nama Lengkap','Tempat, Tgl Lahir','Username');
		$replace = preg_replace($patterns, $replaces, $arr_toS);
		$notif = notif('error',"Kolom $replace hanya boleh menggunakan huruf saja");
	}else{
		$sql_insert_user = mysqli_query($konek,"INSERT INTO tb_user SET username='$daftar[username]', password=md5('$daftar[password]'), type='santri'");
		$sql_select_user = mysqli_query($konek,"SELECT id FROM tb_user WHERE username='$daftar[username]'");
		$r = mysqli_fetch_array($sql_select_user);
		$sql_insert_santri = mysqli_query($konek,"INSERT INTO tb_santri SET nama='$daftar[nama]', birthday='$daftar[tgl_lahir]', asal='$daftar[asal]', id_username='$r[0]'");
		$notif = notif('success','Data berhasil ditambahkan');
		
	}
	

}