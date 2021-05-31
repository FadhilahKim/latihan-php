<?php 
//pengulangan pada array
//for / foreach
$angka = [3,2,77,89,100];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style type="text/css">
		.kotak{
			width: 50px;
			height: 50px;
			text-align: center;
			background-color: salmon;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	<?php for ($i=0; $i < count($angka); $i++) : ?>
	<div class="kotak"><?= $angka[$i]; ?></div>
	<?php endfor; ?>

	<div class="clear"></div>

	<?php foreach ($angka as $a) : ?>
		<div class="kotak"><?= $a; ?></div>
	<?php endforeach; ?>
</body>
</html>