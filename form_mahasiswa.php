<?php 
// Page Configuration:
	$title = 'Form Mahasiswa';
	$assets = [
		'assets/vendors/datepicker/css/gijgo.min.css'
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
			<form action="form_mahasiswa_act.php" method="POST">
				<div class="form-group">
					<label for="kode_program_studi">Program Studi:</label>
					<select class="form-control" name="kode_program_studi" required>
						<option value="">-- Pilih Program Studi --</option>
						<?php require 'select_program_studi.php';
							for ( $i = 0; $i < $program_studi_length; $i++ ) { ?>
								<option value="<?php echo $program_studi_kode[$i] ?>"><?php echo $program_studi_nama[$i] ?></option>
							<?php }
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="nama">Nama:</label>
					<input class="form-control" type="text" name="nama" required>
				</div>
				<div class="form-group">
					<label for="nama">Jenis Kelamin:</label>
					<br>
					<input class="" type="radio" value="L" name="jenis_kelamin" id="laki" required>
					<label class="form-check-label" for="laki">Laki-laki</label>

					<input class="" type="radio" value="P" name="jenis_kelamin" id="perempuan" required>
					<label class="form-check-label" for="perempuan">Perempuan</label>
				</div>
				<div class="form-group">
					<label for="nama">Tanggal Lahir:</label>
					<input id="datepicker" width="276" class="form-control" type="text" name="tanggal_lahir" placeholder="dd-mm-yyyy" required>
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
		'assets/vendors/datepicker/js/gijgo.min.js',
		'assets/js/form_mahasiswa.js'
	];

	require 'layouts/footer.php';
?>


