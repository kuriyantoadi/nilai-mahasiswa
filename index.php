<?php
	$assets = [];
 ?>
<?php require 'layouts/header.php' ?>
<header>
	<div class="jumbotron">
		<h1 class="h1 text-center">Project Nilai Mahasiswa</h1>
		<h3 class="text-center">Kuriyanto Adi Saputro</h3>

	</div>
</header>

<div class="container">
	<div class="menu">
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<a href="form_program_studi.php"><div class="menu-item">
					<p class="text-center">Form Program Studi</p>
				</div></a>
			</div>
			<div class="col-lg-4">
				<a href="form_mahasiswa.php"><div class="menu-item">
					<p class="text-center">Form Mahasiswa</p>
				</div></a>
			</div>
			<div class="col-lg-4">
				<a href="form_mata_kuliah.php"><div class="menu-item">
					<p class="text-center">Form Mata Kuliah</p>
				</div></a>
			</div>
			<div class="col-lg-4">
				<a href="form_dosen.php"><div class="menu-item">
					<p class="text-center">Form Dosen</p>
				</div></a>
			</div>
			<div class="col-lg-4">
				<a href="form_KHS.php"><div class="menu-item">
					<p class="text-center">Form KHS</p>
				</div></a>
			</div>
		</div>
	</div>
</div>

<?php

$scripts = [];
require 'layouts/footer.php' ?>
