<?php 
//menghubungkan ke kumpulan function termsk koneksi
require 'functions.php';


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	
	//cek apakah data berhasil ditambah
	if(tambah($_POST) > 0){
		echo "<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'index.php';
		</script>";
	}else{
		echo "<script>
			alert('data gagal ditambahkan');
			document.location.href = 'index.php';
		</script>";
	}

} 

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Data Webtoon</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Tambah Data Webtoon</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="judul">Judul :</label>
				<input type="text" name="judul" id="judul" required="">
			</li>
			<li>
				<label for="genre">Genre :</label>
				<input type="text" name="genre" id="genre" required="">
			</li>
			<li>
				<label for="author">Author :</label>
				<input type="text" name="author" id="author">
			</li>
			<li>
				<label for="platform">Platform :</label>
				<input type="text" name="platform" id="platform">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>