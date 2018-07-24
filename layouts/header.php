<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">

	<?php 
		$assetsLength = count($assets);
		if ( $assetsLength > 0 ) {
			for ( $i = 0; $i < $assetsLength; $i++ ) { ?>
				<link rel="stylesheet" href="<?php echo $assets[$i] ?>">
			<?php }
		}
	?>

</head>
<body>