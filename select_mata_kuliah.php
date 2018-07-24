<?php 
	require 'koneksi.php';

	$table = 'mata_kuliah';

	$query = "select * from {$table}";

	$result = mysqli_query( $conn, $query );

	$mata_kuliah_kode = null;
	$mata_kuliah_nama = null;
	while ($mata_kuliah = mysqli_fetch_assoc($result)) {
		$mata_kuliah_kode[] = $mata_kuliah['kode'];
		$mata_kuliah_nama[] = $mata_kuliah['nama'];
	}
	$mata_kuliah_length = count($mata_kuliah_kode);
	// echo '<pre>';
	// 	print_r( $mata_kuliah_kode );
	// 	print_r( $mata_kuliah_nama );
	// echo '</pre>';

?>