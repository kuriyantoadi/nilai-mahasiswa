<?php 
	require 'koneksi.php';

	$table = 'khs';

	if ( isset($_POST['nim']) ) {

		$query 	= "insert into {$table}";
		$query .= "(kode_semester, nim, kode_mata_kuliah, kode_dosen, nilai)";
		$query .= " values ";
		$query .= "({$_POST['kode_semester']}, {$_POST['nim']}, {$_POST['kode_mata_kuliah']}, {$_POST['kode_dosen']}, {$_POST['nilai']});"; 
		// echo $query;
		$result = mysqli_query($conn, $query);

		if ( $result ) {
			echo "Data has been Saved to the database bray!";
			echo '<br>';
			echo '<a href="form_KHS.php">Form KHS</a>';
			echo '<br>';
			echo '<a href="index.php">Beranda</a>';
		} else {
			echo 'tidak berhasil bray';
			echo '<br>';
			echo '<a href="form_KHS.php">Form KHS</a>';
			echo '<br>';
			echo '<a href="index.php">Beranda</a>';
		}
	}

?>