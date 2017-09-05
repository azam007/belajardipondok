<?php
// artikel
$judul = isset($_POST['judul']) ? $_POST['judul'] : NULL;
$isi = isset($_POST['isi']) ? $_POST['isi'] : NULL;
$kategori = isset($_POST['kategori']) ? $_POST['kategori'] : NULL;
$publis = isset($_POST['publis']) ? $_POST['publis'] : NULL;

// kategori
$sql_select_kat = mysqli_query($konek, "SELECT * FROM tb_kategori");
$n_kategori = ucwords(str_replace("-", " ", $kategori));

if (isset($_POST['submit'])) {
	if (empty($judul) ||empty($isi) || empty($kategori)) {
		$notif = notif("error","Tidak boleh kosong!");
	}elseif(strlen(strip_tags($isi)) <= 200){
		$notif = notif("error","Minimal panjang artikel 200 karakter");
	}else{
		$sql_insert = mysqli_query($konek, "INSERT INTO tb_artikel SET judul='$judul', isi='$isi', kategori='$kategori', penulis='$sesiLogin', dipublis='$publis'");
		if ($sql_insert) {
			$notif = notif("success","Artikel: $judul berhasil ditambahkan"); 
			mysqli_query($konek, "UPDATE tb_kategori SET count = count+1 WHERE nama_kategori='$n_kategori'");
		}else{
			$notif = notif("error","Gagal!".mysqli_error($konek));
		}
	}
}