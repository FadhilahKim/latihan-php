<?php 

//koneksi ke db 
$koneksi = mysqli_connect("localhost", "root", "", "db_webtoon");

//ambil data dari tabel webtoon / query data webtoon
// $result = mysqli_query($koneksi, "SELECT * FROM tb_webtoon");

//ambil data (fetch) webtoon dari object result
//mysqli_fetch_row() => mengembalikan array numerik
//mysqli_fetch_assoc() => mengembalikan array assosiative
//mysqli_fetch_array() => mengembalikan keduanya
//mysqli_fetch_object() => mengembalikan object

// while ( $komik = mysqli_fetch_assoc($result)) {
// 	var_dump($komik["judul"]);
// }


function query($query){
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

 ?>