<?php 

//koneksi ke db 
$koneksi = mysqli_connect("localhost", "root", "", "db_webtoon");

//function untuk menampilkan data dari db melalui index
function query($query){
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

//function tambah data
function tambah($data){
	global $koneksi;
	//ambil data dari tiap elemen dalam form
	$judul = htmlspecialchars($data["judul"]);
	$genre = htmlspecialchars($data["genre"]);
	$author = htmlspecialchars($data["author"]);
	$platform = htmlspecialchars($data["platform"]);
	$gambar = htmlspecialchars($data["gambar"]);

	//query insert data
	$query = "INSERT INTO tb_webtoon VALUES ('', '$judul', '$genre', '$author', '$platform', '$gambar')";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

//function untuk hapus data
function hapus($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_webtoon WHERE id = $id");

	return mysqli_affected_rows($koneksi);
}

//function ubah data
function ubah($data){
	global $koneksi;
	//ambil data dari tiap elemen dalam form
	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	$genre = htmlspecialchars($data["genre"]);
	$author = htmlspecialchars($data["author"]);
	$platform = htmlspecialchars($data["platform"]);
	$gambar = htmlspecialchars($data["gambar"]);

	//query ubah data
	$query = "UPDATE tb_webtoon SET 
				judul = '$judul',
				genre = '$genre',
				author = '$author',
				platform = '$platform',
				gambar = '$gambar'
			WHERE id = $id";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

 ?>