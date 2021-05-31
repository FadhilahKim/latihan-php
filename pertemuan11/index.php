<?php
require 'functions.php';

$komik = query("SELECT * FROM tb_webtoon");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Daftar Webtoon</h1>

	<a href="tambah.php">Tambah Data Webtoon</a><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Judul</th>
			<th>Genre</th>
			<th>Author</th>
			<th>Platform</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach($komik as $row) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
					<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
				</td>
				<td>
					<img src="img/<?= $row["gambar"]; ?>" width="70" alt="">
				</td>
				<td><?= $row["judul"]; ?></td>
				<td><?= $row["genre"]; ?></td>
				<td><?= $row["author"]; ?></td>
				<td><?= $row["platform"]; ?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>