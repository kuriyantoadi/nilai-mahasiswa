	<script src="assets/vendors/jquery.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>

	<?php 
		$scriptsLength = count($scripts);
		if ( $scriptsLength > 0 ) {
			for ( $i = 0; $i < $scriptsLength; $i++ ) { ?>
				<script src="<?php echo $scripts[$i] ?>"></script>
			<?php }
		}
	?>
</body>
</html>