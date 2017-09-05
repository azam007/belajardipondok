<?php
if ($act) {
	
}

// Kategori
$sql_select = mysqli_query($konek, "SELECT * FROM tb_kategori");
$num_select = mysqli_num_rows($sql_select);
