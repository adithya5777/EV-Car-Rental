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
		include 'header.php';
		?>

		<!-- <section class="caption">
			<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
		</section> -->
	</section><!--  end hero section  -->
	
	<?php 	include 'includes/config.php';
			 $sel = "SELECT img_name FROM images WHERE img_name='nexon.png'";
			$rs = $conn->query($sel);
    		$rws = $rs->fetch_assoc();
	?>
	<section class="caption">
		<h1 style="text-align: center; font-size:xxx-large;"><span style="font-weight: 100;">Find the Best </span>CarForYou</h1>

		
	</section>

	<section>
		<img class="thumb" src="cars/<?php echo $rws['img_name'];?>" width="100%">
		<h3>CarForYou.com is a platform that allows users to rent cars for a specific period of time. Users can browse and compare different car models, select a car that meets their needs, and book it online. The website may also allow users to choose additional services such as insurance and GPS.

We offer a wide range of vehicles, including Sedans, Hatchbacks, SUVs and Sports cars. They may also allow users to choose from different rental plans, such as hourly, daily, weekly, or monthly rentals.</h3>
	</section>

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<!-- <li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li> -->
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<!-- <li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li> -->

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Sports</a></li>
						<li><a href="#">Sedan</a></li>
						<li><a href="#">SUV</a></li>
						<li><a href="#">Hatchback</a></li>
					</ul>
				</li>

				<li class="about">
					<p>EV Car Rental is an organized company that rents cars and other vehicles to clients at lower costs. We we are here to serve every Kenyan Citizen</p>
					<ul>
						<li><a href="http://facebook.com/sonko" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/sonko" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+sonko" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			<!-- Copyright &copy; <?php echo date("Y") ?> All Rights Reserved | Designed by Felix Kiamba. -->
		</div>
	</footer><!--  end footer  -->

</body>

</html>