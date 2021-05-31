<?php 

require 'functions.php';

$komik = query("SELECT * FROM koleksi");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>komik</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>daftar komik</h1>

	<a href="tambah.php">tambah komik</a><br><br>


	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No</th>
			<th>judul</th>
			<th>genre</th>
			<th>author</th>
			<th>aksi</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach($komik as $toon) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $toon["judul"]; ?></td>
			<td><?= $toon["genre"]; ?></td>
			<td><?= $toon["author"]; ?></td>
			<td>
				<a href="ubah.php">ubah</a>|
				<a href="hapus.php">hapus</a>
			</td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>