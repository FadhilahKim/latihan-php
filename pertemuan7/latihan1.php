<?php 

//superglobal variabel
//variabel global millik php
//merupakan array asosiativ
/*
1. $_GET
2. $_POST
3. $_REQUEST
4. $_SESSION
5. $_SERVER
6. $_COOKIE
7. $_ENV
*/

$webtoon = [
	[
		"judul" => "Extraordinary You",
		"genre" => "Drama",
		"author" => "Muryu",
		"platform" => "Kakaopage",
		"gambar" => "haru.png"
	],
	[
		"judul" => "Nurul dan Numair",
		"genre" => "Slice of life",
		"author" => "Fatharani Yasmin",
		"platform" => "Line Webtoon",
		"gambar" => "numair.png"
	],
	[
		"judul" => "Light and Shadow",
		"genre" => "Romantis",
		"author" => "Hee Won dan Ryu Hyang",
		"platform" => "Kakaopage",
		"gambar" => "edli.png"
	],
	[
		"judul" => "Ada Apa Dengan Duke?",
		"genre" => "Romantis",
		"author" => "Eddie dan Bandalbanji",
		"platform" => "Kakaopage",
		"gambar" => "erin.png"
	],
	[
		"judul" => "Flawless",
		"genre" => "Romantis",
		"author" => "Shinshinhye",
		"platform" => "Line Webtoon",
		"gambar" => "flawless.png"
	],
	[
		"judul" => "Nan Yak",
		"genre" => "Fantasi",
		"author" => "Jeong Hyunjoo dan Park Jinhwan",
		"platform" => "Line Webtoon",
		"gambar" => "nanyak.png"
	],
	[
		"judul" => "Sri Asih",
		"genre" => "Fantasi",
		"author" => "Archie The RedCat dan Devita Krisanti",
		"platform" => "Line Webtoon",
		"gambar" => "sri.jpg"
	]
];


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GET</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Daftar Webtoon</h1>
	<ul></ul>
	<?php foreach ($webtoon as $komik) : ?>
		<li>
			<a href="latihan2.php?judul=<?= $komik["judul"]; ?>&genre=<?= $komik["genre"]; ?>&author=<?= $komik["author"]; ?>&platform=<?= $komik["platform"]; ?>&gambar=<?= $komik["gambar"]; ?>"><?= $komik["judul"]; ?></a>
		</li>

	<?php endforeach ?>
</body>
</html>