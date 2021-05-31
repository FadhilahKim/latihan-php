<?php 

$conn = mysqli_connect("localhost", "root", "", "komik");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	$judul = htmlspecialchars($data["judul"]);
	$genre = htmlspecialchars($data["genre"]);
	$author = htmlspecialchars($data["author"]);

	mysqli_query($conn, "INSERT INTO koleksi VALUES('$judul', '$genre', '$author')");

	return mysqli_affected_rows($conn);
}

 ?>