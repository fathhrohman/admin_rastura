<?php

include("config.php");

if( isset($_GET['id']) ){

	// ambil id dari query string
	$id = $_GET['id'];

	// buat query hapus
	$sql = "DELETE FROM berita WHERE id=$id";
	$query = mysqli_query($db, $sql);

	// apakah query hapus berhasil?
	if($query){
		header('Location: index.php');
	} else {
		die("Failed.");
	}

} else {
	die("Forbidden.");
}

?>
