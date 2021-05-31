<?php 

require 'functions.php';

if(isset($_POST["submit"])){
	if(tambah($_POST) > 0){
		echo "berhasil";
	}else{
		echo "gagal";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>tambah</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>tambah data</h1>

	<form action="" method="post">
		<label for="judul">judul</label><br>
		<input type="text" name="judul" id="judul"><br><br>

		<label for="genre">genre</label><br>
		<input type="text" name="genre" id="genre"><br><br>

		<label for="author">author</label><br>
		<input type="text" name="author" id="author"><br><br>

		<button type="submit" name="submit">tambah</button>

	</form>
</body>
</html>