<?php 
	require 'koneksi.php';

	$table = 'mata_kuliah';

	if ( isset($_POST['nama']) ) {
		$query 	= "insert into {$table}";
		$query .= "(kode_program_studi, kode, nama)";
		$query .= " values ";
		$query .= "({$_POST['kode_program_studi']}, null, '{$_POST['nama']}');"; 
		// echo $query;
		$result = mysqli_query($conn, $query);

		if ( $result ) {
			echo "Data has been Saved to the database bray!";
			echo '<br>';
			echo '<a href="form_mata_kuliah.php">Form Mata Kuliah</a>';
			echo '<br>';
			echo '<a href="index.php">Beranda</a>';
		} else {
			echo 'tidak berhasil bray';
			echo '<br>';
			echo '<a href="form_mata_kuliah.php">Form Mata Kuliah</a>';
			echo '<br>';
			echo '<a href="index.php">Beranda</a>';
		}
	}

?>