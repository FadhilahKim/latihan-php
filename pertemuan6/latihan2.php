<?php 
// $mahasiswa = [
// 	["Nurfadhilah", "D0218033", "Teknik Informatika", "nurfadhilahambulansyah@yahoo.com"], 
// 	["Nur Ilza Zalzabila", "D0218032", "Teknik Informatika", "icha123@gmail.com"]
// ];

//array asosiatif
//defenisinya sama dengan array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[
		"nama" => "Nurfadhilah",
		"nim" => "D0218033",
		"email" => "nurfadhilahambulansyah@yahoo.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "dhilah.jpg"
	],
	[
		"nama" => "Nur Ilza Zalzabila",
		"nim" => "D0218032",
		"email" => "icha123@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "icha.jpg"
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>Nim : <?= $mhs["nim"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>
