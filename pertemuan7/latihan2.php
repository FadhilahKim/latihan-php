<?php 

//cek apakah tidak ada data di $_GET
if (!isset($_GET["judul"]) ||
	!isset($_GET["genre"]) ||
	!isset($_GET["author"]) ||
	!isset($_GET["platform"]) ||
	!isset($_GET["gambar"])
) {
	header("Location: latihan1.php");
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail Webtoon</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul>
		<li><img src="img/<?= $_GET["gambar"] ?>"></li>
		<li><?= $_GET["judul"] ?></li>
		<li><?= $_GET["genre"] ?></li>
		<li><?= $_GET["author"] ?></li>
		<li><?= $_GET["platform"] ?></li>
	</ul>

	<a href="latihan1.php">Kembali ke daftar webtoon</a>
</body>
</html>