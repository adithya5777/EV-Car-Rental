<?php
session_start();
?>


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
	<link rel="stylesheet" type="text/css" href="ev/admin/css/responsive.css">
	<!-- C:\xampp\htdocs\ev\admin\css\responsive.css -->

	<style>
		/* body{
			background-image: url(cars/mercedeseqs.webp);
			background-repeat: no-repeat;
			background-size: cover;
		} */
		.logo {
			font-size: 40px;
			display: grid;
			place-items: center;
			grid-template-columns: 37px auto;
			gap: 5px;
		}

		#logoimg {
			filter: drop-shadow(0px 0px 12.5px #49c5b6);
			margin-top: 5px;
		}

		header {
			width: 100%;
			height: 100px;
			/* background: rgba(71, 71, 71, 0.502); */
			background: linear-gradient(180deg, rgba(132, 132, 132, 0.502) -50%, rgba(255, 255, 255, 0) 100%);
			backdrop-filter: blur(5px);
			position: fixed;
			top: 0;
			z-index: 10;
		}

		.listing {
			margin-top: 30px;
		}

		ul {
			display: flex;
			flex-direction: column;

		}

		.anchors {
			border-radius: 10px;
			width: 300px;
			height: 35px;
			background: rgba(186, 186, 186, 0.502);
			margin: 20px auto;
			display: grid;
			place-items: center;
		}

		a {
			font-family: 'Quicksand';
			color: #ededed;
			font-size: 22px;
			text-decoration: none;
			font-weight: bold;
		}

		a {
			transition: 0.3s;
		}

		a:hover {
			color: #49c5b6;
			text-shadow: 0px 0px 15px rgba(73,197,182,1);
			/* filter: drop-shadow(0px 0px 15px #49c5b6); */
		}
	</style>
</head>

<body>


	<section>
		<div class="wrapper" style="width: 400px">
			<!-- <h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000); margin-top: 150px;">CONTACT US</span></h1> -->
			<h1 class="logo" style="color: #ededed;"><img id="logoimg" src="/ev/assets/favicon_io/android-chrome-512x512.png" alt="logo" width="37" height="37"> CarForYou</h1>
			<br>
		</div>

		<div class="wrapper listing">
			<!-- <?php echo $_SESSION['email'] . $_SESSION['pass'] ?> -->
			<nav>
				<?php

				// if(!($_SESSION['email']) && (!($_SESSION['pass']))){
				if (isset($_SESSION['email']) || isset($_SESSION['pass'])) {
				?>
					<ul>
						<div class="anchors"><a href="main.php">Home</a></div>
						<div class="anchors"><a href="editcars.php">Cars</a></div>
						<div class="anchors"><a href="carcat.php">Car Category</a></div>
						<div class="anchors"><a href="editloc.php">Location</a></div>
						<div class="anchors"><a href="showbill.php">Bills</a></div>
						<div class="anchors"><a href="showbook.php">Bookings</a></div>
						<div class="anchors"><a href="contact.php">Messages</a></div>
						<div class="anchors"><a href="logout.php">Logout</a></div>
					</ul>

				<?php
				}
				?>
			</nav>
		</div>

		<?php
		// include 'header.php';
		include 'config.php';
		echo 'Hello';

		?>

		<!-- <section class="caption">
			<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
		</section> -->


	</section>

</body>

</html>