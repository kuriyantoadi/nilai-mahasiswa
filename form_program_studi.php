<?php 
// Page Configuration:
	$title = 'Form Program Studi';
	$assets = [

	];
// 
	require 'layouts/header.php' 
?>

<header>
	<div class="jumbotron mb-0">
		<h1 class="text-center"><?php echo $title ?></h1>
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
			<form action="form_program_studi_act.php" method="POST">
				<div class="form-group">
					<label for="nama">Nama Program Studi:</label>
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
