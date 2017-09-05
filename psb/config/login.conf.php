<?php
$username = isset($_POST['username']) ? $_POST['username'] : NULL;
$password = isset($_POST['password']) ? $_POST['password'] : NULL;


if (isset($username)) {
	$sql_select_tbUser = mysqli_query($konek,"SELECT * FROM tb_user where username='$username' AND password=md5('$password')") or die(mysqli_error($konek));
	$arr_tbUser = mysqli_fetch_assoc($sql_select_tbUser);
	$cek = mysqli_num_rows($sql_select_tbUser);
	$typeUser = $arr_tbUser['type'];
	// var_dump($cek);
	// echo "$password && $arr_tbUser[password] && $arr_tbUser[type]";
	if ($cek) {
		$_SESSION['login'] = $username;
		$_SESSION['type'] = $typeUser;
		($typeUser=='admin') ? header("location:admin/home") : (($typeUser=='santri') ? header("location:santri/home") : '');
	}else{
		echo "gagal login";
	}
}
// else{
// 	isset($_SESSION['login']) && ($typeUser == 'admin' || $typeUser == 'santri') ? header("location:{$typeUser}/home") : "";
// }