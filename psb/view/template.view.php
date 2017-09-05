<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<?php
	if ($typeUser == "admin") :
	?>
	<script type="text/javascript" src="http://<?=$url?>plugins/ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="http://<?=$url?>css/radio.css">
	<?php endif;?>
	<link rel="stylesheet" type="text/css" href="http://<?=$url?>css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="http://<?=$url?>css/style.css">
</head>
<body>
	<div id="header">
		<h1>Pondok Programmer</h1>
		<div class="menu-wrap">
			<ul>
			<?php
			if (empty($_SESSION['login'])) {
				echo "
				<li><a href=\"http://{$url}home\">Home</a></li>
				<li><a href=\"#\">About</a></li>
				<li><a href=\"http://{$url}list\">Lihat</a></li>
				<li><a href=\"http://{$url}daftar\">Daftar</a></li>
				<li><a href=\"http://{$url}login\">Login</a></li>";
			}elseif($typeUser == "admin"){
				echo "
				<li><a href=\"http://{$url}admin/home\">Home</a></li>
				<li><a href=\"http://{$url}admin/data\">Data Santri</a></li>
				<li><a href=\"http://{$url}admin/tambah\">Tambahkan</a>
					<ul>
						<li><a href=\"http://{$url}admin/setting/akun\">Calon Santri</a></li>
						<li><a href=\"http://{$url}admin/artikel\">Artikel</a></li>
					</ul>
				</li>
				<li><a href=\"http://{$url}admin/setting\">Setting</a></li>
				<li><a href=\"http://{$url}admin/logout\">Logout</a></li>";
			}elseif($typeUser == "santri"){
				echo "
				<li><a href=\"?santri=home\">Home</a></li>
				<li><a href=\"?santri=data\">Data Santri</a></li>
				<li><a href=\"?santri=tambah\">Tambahkan</a></li>
				<li><a href=\"?santri=setting\">Setting</a></li>
				<li><a href=\"?santri=logout\">Logout</a></li>";
			}
			?>
			</ul>
		</div>
	</div>
	<?php
		include $page;
	?>
</body>
</html>