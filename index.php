
<?php
	include_once 'header.php';
?>
</body>
</html><section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<?php
			if(isset($_SESSION['u_id'])){
				echo "YOU ARE LOGGED IN!";
			}
		?>
		
	</div>

</section>
<?php
	include_once 'footer.php';
?>
