<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POST</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php if(isset($_POST["submit"])) : ?>	
		<h1>selamat datang <?= $_POST["judul"]?> </h1>
	<?php endif; ?>

	<form action="" method="POST">
		Masukkan Judul:
		<input type="text" name="judul"><br>
		<button type="submit" name="submit">Kirim</button>
	</form>
</body>
</html>