<!DOCTYPE html>
<html lang="en">

<head>
	<title>CarForYou</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<!-- <style>
		body{
			background-image: url(cars/mercedeseqs.webp);
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style> -->
</head>

<body>

	<section class="">
		<?php
		include 'header.php';?>

		<!-- <section class="caption">
			<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
		</section> -->
	</section><!--  end hero section  -->

	<?php include 'includes/config.php';
	
	?>
	<section class="caption">
		<h1 style="text-align: center; font-size:xxx-large;"><span style="font-weight: 100;">Find the Best </span>CarForYou</h1>
		
		<?php
		$view1 = "SELECT * FROM customer_details WHERE EMAIL_ID='$_SESSION[email]'";
		$v1 = $conn->query($view1);
		$vw1 = $v1->fetch_assoc();

		$dlnum = $vw1['DL_NUMBER'];
		echo $dlnum;
		
		

		?>
	</section>
	
	

	<?php
	include 'footer.php';
	?>
	
</body>

</html>