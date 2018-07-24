<?php 
	require 'koneksi.php';

	$table = 'dosen';

	$query = "select * from {$table}";

	$result = mysqli_query( $conn, $query );

	$dosen_kode = null;
	$dosen_nama = null;
	while ($dosen = mysqli_fetch_assoc($result)) {
		$dosen_kode[] = $dosen['nidn'];
		$dosen_nama[] = $dosen['nama'];
	}
	$dosen_length = count($dosen_kode);
	// echo '<pre>';
	// 	print_r( $dosen_kode );
	// 	print_r( $dosen_nama );
	// echo '</pre>';

?>