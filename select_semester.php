<?php 
	require 'koneksi.php';

	$table = 'semester';

	$query = "select * from {$table}";

	$result = mysqli_query( $conn, $query );

	$semester_kode = null;
	$semester_keterangan = null;
	while ($semester = mysqli_fetch_assoc($result)) {
		$semester_kode[] = $semester['kode'];
		$semester_keterangan[] = $semester['keterangan'];
	}
	$semester_length = count($semester_kode);
	echo '<pre>';
		print_r( $semester_kode );
		print_r( $semester_keterangan );
	echo '</pre>';

?>