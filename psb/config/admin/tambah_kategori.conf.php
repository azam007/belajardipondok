<?php
$nama_kategori = isset($_POST['nama_kategori']) ? ucwords($_POST['nama_kategori']) : NULL;
$sql_select = mysqli_query($konek, "SELECT * FROM tb_kategori WHERE nama_kategori='$nama_kategori'");
$arr_select = mysqli_fetch_assoc($sql_select);

// cek
$sql_cek = mysqli_query($konek,"SELECT * FROM tb_kategori");
$row_cek = mysqli_num_rows($sql_cek);
if ($row_cek <= 10) {
	if (isset($_POST['submit'])) {
		if($nama_kategori == ""){
			$notif = notif('error','Tidak boleh kosong!');
		}
		elseif ($nama_kategori == $arr_select['nama_kategori']) {
			$notif = notif('error',"Kategori: $nama_kategori sudah digunakan");
		}else {
			$sql_insert = mysqli_query($konek, "INSERT INTO tb_kategori SET nama_kategori='$nama_kategori'");
			$sql_insert ? $notif = notif('success',"Kategori: $nama_kategori berhasil ditambahkan!") : $notif = notif('error','Gagal' . mysqli_error($konek));;
		}
	}
}
else{ 
	$notif = notif("error","Tidak dapat menambahkan, maksimal kategori adalah 10");
}
// echo $arr_select['nama_kategori'];