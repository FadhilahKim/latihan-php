<?php 
function salam($waktu = "Datang", $nama = "Kawan"){
	return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("malam","dhilah"); ?></h1>
</body>
</html>