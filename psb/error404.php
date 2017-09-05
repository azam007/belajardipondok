<!DOCTYPE html>
<html>
<head>
	<title>Error 404 <?=$_SERVER['REQUEST_URI']?></title>
	<link rel="stylesheet" type="text/css" href="http://<?=$_SERVER['HTTP_HOST']?>/css/style.css">
</head>
<body>
<div id="wrapper">
	<div id="error">
		<h1>Not Found</h1>
		<p>halaman yang diminta <?=$_SERVER['REQUEST_URI']?> tidak ada dalam server -  <span>AzamCoder</span></p>
	</div>
	<div class="back">Kembali ke <a href="http://<?=$_SERVER['HTTP_HOST']?>">Home</a></div>

</div>
</body>
</html>