<!DOCTYPE html>
<html lang="en">

<head>
	<title>CarForYou | Login</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="shortcut icon" href="/ev/assets/favicon_io/favicon.ico" type="image/x-icon">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<style>
		.flash-message {
			padding: 20px;
			background-color: #f44336;
			color: white;
			border-radius: 5px;
			margin-bottom: 15px;
		}

		body {
			background-repeat: no-repeat;
			background-size: cover;
		}

		.logo{
			font-size: 40px;
			display: grid;
			place-items: center;
			grid-template-columns: 37px auto;
			gap: 12px;
			filter: drop-shadow( 0px 0px 12.5px #49c5b6);
			margin-top: 5px;
		}
		
	</style>
</head>

<body>

	<section class="">

		<?php
		session_start();
		// error_reporting("E-NOTICE");
		?>

		<!-- <section class="caption" style="margin-top:100px">

			<h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best</span><span style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"> CarForYou</span></h1>
			<!-- <h1 id="motto" style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"><span style="font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best </span>CarForYou</h1> -->
	</section> -->
	</section><!--  end hero section  -->

	<section class="wrapper" id="contact" style="max-width: 1350px;">
		<!-- <br><br><br><br><br><br> -->
		<div class="wrapper cntform" style="margin-top: 12.5%">
			<div>
				<!-- <h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000); margin-top: 150px;">CONTACT US</span></h1> -->
				<h1 class="logo" style="color: #ededed; font-size: 40px;"><img id="logoimg" src="/ev/assets/favicon_io/android-chrome-512x512.png" alt="logo" width="37" height="37"> CarForYou</h1>
				<address>
					Campus Rd, University Of Mysore Campus,<br>
					Mysuru, Karnataka, India 570006<br>
					Phone: <a style="color: blue; " href='tel:+919876543215'>+919876543215</a>
				</address>
			</div>
			<section style="backdrop-filter: blur(2px);padding-top: 10px; background: rgba(186, 186, 186, 0.502); width: 350px; height: 250px; border-radius: 20px;">
			<div class="wrapper">
				<div>
					<form method="post">
						<h1><span style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"> Login</span></h1>
						<div>
							<input class="txtcenter" type="email" name="EMAIL_ID" placeholder="E-mail" required style="width:300px">
						</div>
						<div>
							<input class="txtcenter" type="password" name="PASSWORD" placeholder="Password" required style="width:300px">
						</div>
						<div>
							<input class="but" type="submit" name="log" value="Login" style="width: 100px; color: #ededed; background: #49c5b6;">
						</div>
						<p style="margin-top:20px;color: #ededed; font-family: 'Quicksand';">Don't have an account? <a href="signup.php" style="color: #49c5b6; font-weight: bold;">REGISTER NOW!</a></p>
					</form>



					<?php
					if (isset($_POST['log'])) {
						include 'includes/config.php';

						$email = $_POST['EMAIL_ID'];
						$pass = $_POST['PASSWORD'];

						$qy = "SELECT * FROM customer_details WHERE EMAIL_ID = '$email' AND `PASSWORD` = '$pass'";
						$log = $conn->query($qy);
						$num = $log->num_rows;
						$row = $log->fetch_assoc();
						if ($num > 0) {
							// session_start();
							$_SESSION['email'] = $row['EMAIL_ID'];
							$_SESSION['pass'] = $row['PASSWORD'];
					?>
							<div class="flash-message">
								<?php echo 'Login Successful'; ?>
							</div>
						<?php
							header('location: index.php?uid=' . $email);
						} else {
						?>
							<div class="flash-message">
								<?php echo 'Login Unsuccessful. Please Try Again'; ?>
							</div>
					<?php
						}
					}
					?>
				</div>
			</div>

		</section>
		</div>

	</section>


	


</body>

</html>