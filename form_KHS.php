<?php 
// Page Configuration:
	$title = 'Form KHS';
	$assets = [
	];
//
	require 'layouts/header.php' 
?>

<header>
	<div class="jumbotron mb-0" style="background-image: url('assets/img/header.png'); background-size: cover; background-repeat: no-repeat; ">
		<h1 class="text-center" style="background-color: rgb(0,0,0); background-color: rgba(0,0,0, 0.4); color:white; padding-top: 10px; padding-bottom: 10px; border: 3px solid #f1f1f1;"><?php echo $title ?></h1>
	</div>
</header>
<nav class="navbar navbar-expand-lg bg-dark">
	<ul class="navbar-nav mx-auto">
		<li class="nav-item"><a href="index.php">Beranda</a></li>
	</ul>
</nav>
<div class="container pt-5 pb-5">
	<div class="row justify-content-center">
		<div class="col-lg-7 col-10">
			<form action="form_KHS_act.php" method="POST">

				<div class="form-group">
					<label for="kode_semester">Semester:</label>
					<select class="form-control" name="kode_semester" id="kode_semester" required>
						<option value="">-- Pilih Semester --</option>
						<?php require 'select_semester.php';
							for ( $i = 0; $i < $semester_length; $i++ ) { ?>
								<option value="<?php echo $semester_kode[$i] ?>"><?php echo $semester_keterangan[$i] ?></option>
							<?php }
						?>
					</select>
				</div>

				<div class="form-group">
					<label for="nim">Mahasiswa:</label>
					<select class="form-control" name="nim" id="nim" required>
						<option value="">-- Pilih Mahasiswa --</option>
						<?php require 'select_mahasiswa.php';
							for ( $i = 0; $i < $mahasiswa_length; $i++ ) { ?>
								<option value="<?php echo $mahasiswa_nim[$i] ?>"><?php echo $mahasiswa_nama[$i] ?></option>
							<?php }
						?>
					</select>
				</div>
				
				<div class="form-group">
					<label for="kode_mata_kuliah">Mata Kuliah:</label>
					<select class="form-control" name="kode_mata_kuliah" id="kode_mata_kuliah" required>
						<option value="">-- Pilih Mata Kuliah --</option>
						<?php require 'select_mata_kuliah.php';
							for ( $i = 0; $i < $mata_kuliah_length; $i++ ) { ?>
								<option value="<?php echo $mata_kuliah_kode[$i] ?>"><?php echo $mata_kuliah_nama[$i] ?></option>
							<?php }
						?>
					</select>
				</div>

				<div class="form-group">
					<label for="kode_dosen">Dosen:</label>
					<select class="form-control" name="kode_dosen" id="kode_dosen" required>
						<option value="">-- Pilih Dosen --</option>
						<?php require 'select_dosen.php';
							for ( $i = 0; $i < $dosen_length; $i++ ) { ?>
								<option value="<?php echo $dosen_kode[$i] ?>"><?php echo $dosen_nama[$i] ?></option>
							<?php }
						?>
					</select>
				</div>
			
				<div class="form-group">
					<label for="nilai">Nilai:</label>
					<input id="nilai" class="form-control" type="number" name="nilai" placeholder="Nilai..." required>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>

			</form>		
		</div>
	</div>
</div>

<?php 
	$scripts = [
	
	];

	require 'layouts/footer.php';
?>


