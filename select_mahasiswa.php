<?php 
	require 'koneksi.php';

	$table = 'mahasiswa';

	$query = "select * from {$table}";

	$result = mysqli_query( $conn, $query );

	$mahasiswa_nim = null;
	$mahasiswa_nama = null;
	while ($mahasiswa = mysqli_fetch_assoc($result)) {
		$mahasiswa_nim[] = $mahasiswa['nim'];
		$mahasiswa_nama[] = $mahasiswa['nama'];
	}
	$mahasiswa_length = count($mahasiswa_nim);
	// echo '<pre>';
	// 	print_r( $mahasiswa_nim );
	// 	print_r( $mahasiswa_nama );
	// echo '</pre>';

?>