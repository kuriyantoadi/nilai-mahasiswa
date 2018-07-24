<?php 
	require 'koneksi.php';

	$table = 'mahasiswa';

	if ( isset($_POST['nama']) ) {
		$thn = substr($_POST['tanggal_lahir'], 6);
		$bln = substr($_POST['tanggal_lahir'], 3, 2);
		$tgl = substr($_POST['tanggal_lahir'], 0, 2);
		$tanggal_lahir = $thn.'-'.$bln.'-'.$tgl;

		$query 	= "insert into {$table}";
		$query .= "(kode_program_studi, nama, jenis_kelamin, tanggal_lahir)";
		$query .= " values ";
		$query .= "({$_POST['kode_program_studi']}, '{$_POST['nama']}', '{$_POST['jenis_kelamin']}', '{$tanggal_lahir}');"; 
		// echo $query;
		$result = mysqli_query($conn, $query);

		if ( $result ) {
			echo "Data has been Saved to the database bray!";
			echo '<br>';
			echo '<a href="form_mahasiswa.php">Form Mahasiswa</a>';
			echo '<br>';
			echo '<a href="index.php">Beranda</a>';
		} else {
			echo 'tidak berhasil bray';
			echo '<br>';
			echo '<a href="form_mahasiswa.php">Form Mahasiswa</a>';
			echo '<br>';
			echo '<a href="index.php">Beranda</a>';
		}
	}

?>