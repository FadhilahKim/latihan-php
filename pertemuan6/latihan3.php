<?php 
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
		"author" => "Hee Won & Ryu Hyang",
		"platform" => "Kakaopage",
		"gambar" => "edli.png"
	],
	[
		"judul" => "Ada Apa Dengan Duke?",
		"genre" => "Romantis",
		"author" => "Eddie & Bandalbanji",
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
		"author" => "Jeong Hyunjoo & Park Jinhwan",
		"platform" => "Line Webtoon",
		"gambar" => "nanyak.png"
	],
	[
		"judul" => "Sri Asih",
		"genre" => "Fantasi",
		"author" => "Archie The RedCat & Devita Krisanti",
		"platform" => "Line Webtoon",
		"gambar" => "sri.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Webtoon</title>
</head>
<body>
	<h1>Daftar Webtoon</h1>

	<?php foreach ($webtoon as $comic) : ?>
		<ul>
			<li>
				<img src="img/<?= $comic["gambar"]; ?>">
			</li>
			<li>Judul : <?= $comic["judul"]; ?></li>
			<li>Genre : <?= $comic["genre"]; ?></li>
			<li>Author : <?= $comic["author"]; ?></li>
			<li>Platform : <?= $comic["platform"]; ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>
