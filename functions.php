<?php

$conn = mysqli_connect("localhost", "root", "", "web2");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;
	$wilayah = htmlspecialchars($data["wilayah"]);
	$positif = htmlspecialchars($data["positif"]);
	$dirawat = htmlspecialchars($data["dirawat"]);
	$sembuh = htmlspecialchars($data["sembuh"]);
	$meninggal = htmlspecialchars($data["meninggal"]);
	$operator = htmlspecialchars($data["operator"]);
	$nim = htmlspecialchars($data["nim"]);

	$query = "INSERT INTO corona VALUES ('','$wilayah','$positif','$dirawat','$sembuh','$meninggal','$operator','$nim')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
	}
