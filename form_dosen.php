<?php 
// Page Configuration:
	$title = 'Form Dosen';
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
			<form action="form_dosen_act.php" method="POST">
				<div class="form-group">
					<label for="nama">Nama Dosen:</label>
					<input class="form-control" type="text" name="nama">
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

require 'layouts/footer.php' 

?>
