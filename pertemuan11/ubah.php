<?php 
//menghubungkan ke kumpulan function termsk koneksi
require 'functions.php';

//ambil data di url
$id = $_GET["id"];

//query data webtoon berdasarkan id
$wbn = query("SELECT * FROM tb_webtoon WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	
	//cek apakah data berhasil diubah
	if(ubah($_POST) > 0){
		echo "<script>
			alert('data berhasil diubah');
			document.location.href = 'index.php';
		</script>";
	}else{
		echo "<script>
			alert('data gagal diubah');
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
	<h1>Ubah Data Webtoon</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $wbn["id"]; ?>">
		<ul>
			<li>
				<label for="judul">Judul :</label>
				<input type="text" name="judul" id="judul" required="" value="<?= $wbn["judul"] ?>">
			</li>
			<li>
				<label for="genre">Genre :</label>
				<input type="text" name="genre" id="genre" required="" value="<?= $wbn["genre"] ?>">
			</li>
			<li>
				<label for="author">Author :</label>
				<input type="text" name="author" id="author" value="<?= $wbn["author"] ?>">
			</li>
			<li>
				<label for="platform">Platform :</label>
				<input type="text" name="platform" id="platform" value="<?= $wbn["platform"] ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" value="<?= $wbn["gambar"] ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>