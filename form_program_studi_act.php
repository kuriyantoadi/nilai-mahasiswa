<?php 
	require 'koneksi.php';

	$table = 'program_studi';
	if ( isset($_POST['nama']) ) {

		$query = "insert into {$table}(nama) values ('{$_POST['nama']}');";

		$result = mysqli_query($conn, $query);

		if ( $result ) {
			echo "Data has been Saved to the database bray!";
			echo '<br>';
			echo '<a href="form_program_studi.php">Form Program Studi</a>';
			echo '<br>';
			echo '<a href="index.php">Beranda</a>';
		} else {
			echo 'tidak berhasil bray';
			echo '<br>';
			echo '<a href="form_program_studi.php">Form Program Studi</a>';
			echo '<br>';
			echo '<a href="index.php">Beranda</a>';
		}

	}

?>