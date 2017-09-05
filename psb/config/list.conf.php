<?php
$jumlah = 5;
$sql_select_santri = mysqli_query($konek, "SELECT * FROM tb_santri");
$total = mysqli_num_rows($sql_select_santri);

$hal = isset($_GET['hal']) ? $_GET['hal'] : 1;
$mulai = ($hal>1) ? ($hal*$jumlah)-$jumlah : 0;
$total_hal = ceil($total/$jumlah);

$cari = isset($_GET['cari']) ? $_GET['cari'] : "";
$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : "";

$sort = isset($_GET['sort']) ? $_GET['sort'] : NULL;
if ($sort == "AtoZ") {
	$sql_select = mysqli_query($konek, "SELECT * FROM tb_santri ORDER BY nama LIMIT $mulai,$jumlah");
}elseif ($sort == "ZtoA") {
	$sql_select = mysqli_query($konek, "SELECT * FROM tb_santri ORDER BY nama DESC LIMIT $mulai,$jumlah");
}elseif($keyword != NULL){
	$sql_select = mysqli_query($konek, "SELECT * FROM tb_santri WHERE nama LIKE '%$keyword%'");
}else {
	$sql_select = mysqli_query($konek, "SELECT * FROM tb_santri LIMIT $mulai,$jumlah");
}
$no = $mulai+1;
$cek = mysqli_num_rows($sql_select);
// echo "$anu";