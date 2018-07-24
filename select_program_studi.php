<?php 
	require 'koneksi.php';

	$table = 'program_studi';

	$query = "select * from {$table}";

	$result = mysqli_query( $conn, $query );

	$program_studi_kode = null;
	$program_studi_nama = null;
	while ($program_studi = mysqli_fetch_assoc($result)) {
		$program_studi_kode[] = $program_studi['kode'];
		$program_studi_nama[] = $program_studi['nama'];
	}
	$program_studi_length = count($program_studi_kode);
	// echo '<pre>';
	// 	print_r( $program_studi_kode );
	// 	print_r( $program_studi_nama );
	// echo '</pre>';

?>