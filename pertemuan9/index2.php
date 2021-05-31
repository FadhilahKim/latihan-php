<?php
//koneksi ke db 
$koneksi = mysqli_connect("localhost", "root", "", "db_webtoon");

//ambil data dari tabel webtoon / query data webtoon
$result = mysqli_query($koneksi, "SELECT * FROM tb_webtoon");

//ambil data (fetch) webtoon dari object result
//mysqli_fetch_row() => mengembalikan array numerik
//mysqli_fetch_assoc() => mengembalikan array assosiative
//mysqli_fetch_array() => mengembalikan keduanya
//mysqli_fetch_object() => mengembalikan object

// while ( $komik = mysqli_fetch_assoc($result)) {
// 	var_dump($komik["judul"]);
// }

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
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="">Ubah</a> |
					<a href="">Hapus</a>
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
		<?php endwhile; ?>
	</table>
</body>
</html>