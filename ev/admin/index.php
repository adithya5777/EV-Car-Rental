<!DOCTYPE html>
<html lang="en">

<head>
	<title>EV Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style>
		.tds {
			font-size: 17px;
			margin-right: 5px
		}

		td {
			color: #ededed;
			font-family: 'Quicksand';
			margin-right: 10px;
		}
	</style>
</head>

<body>
	<section class="hide">
		<?php
		include 'config.php';
		?>



		<!-- <section class="wrapper" style="backdrop-filter: blur(2px);padding-top: 10px; background: rgba(186, 186, 186, 0.502); width: 350px; height: 250px; border-radius: 20px; margin-top: 200px;">
			<div class="wrapper" style="display: flex; ">

				<form method="post" style="margin: 0 auto;">
					<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline; font-size: 25px;">ADMIN
						Login Area</h3>
					<table height="120" align-items="center">
						<tr>
							<td class="tds">Email Address:</td>
							<td><input type="email" name="EMAIL_ID" placeholder="E-mail" required></td>
						</tr>
						<tr>
							<td class="tds">Password:</td>
							<td><input type="password" name="PASSWORD" placeholder="Password" required></td>
						</tr>
						<tr>
							<td><input type="submit" name="log" value="Login Here"></td>

						</tr>
					</table>
				</form>
				

			</div>
		</section> -->


		<section class="wrapper" id="contact" style="max-width: 1350px;">
			<!-- <br><br><br><br><br><br> -->
			<div class="wrapper cntform" style="margin-top: 13%">
				<div>
					<!-- <h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000); margin-top: 150px;">CONTACT US</span></h1> -->
					<h1 class="logo" style="color: #ededed; font-size: 40px; filter: drop-shadow( 0px 0px 12.5px #49c5b6);"><img id="logoimg" src="/ev/assets/favicon_io/android-chrome-512x512.png" alt="logo" width="37" height="37"> CarForYou</h1>

				</div>
				<section class="listings" style="display: flex; padding:0; justify-content: center; align-items: center;">
					<div class="wrapper" style=" display:flex; flex-direction:column; margin: 0 auto; backdrop-filter: blur(2px); background: rgba(186, 186, 186, 0.502); width: 420px; height: 220px; border-radius: 20px;">

						<h1><span style=" margin-top: 50px; text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);">Admin Login</span></h1>
						<form method="post" style="margin: 0 auto;">
							<table height="120" align-items="center">
								<tr>
									<td class="tds">Email Address:</td>
									<td style="padding: 0 15px; width: 38px;"><input type="email" name="EMAIL_ID" placeholder="E-mail" required></td>
								</tr>
								<tr>
									<td class="tds">Password:</td>
									<td><input type="password" name="PASSWORD" placeholder="Password" required></td>
								</tr>
								<tr>
									<!-- <td><input type="submit" name="log" value="Login Here"></td> -->
									<td colspan="2" style="text-align:center">
										<input class="but" type="submit" name="log" value="Login" style="width: 100px; color: #ededed; background: #49c5b6;">
									</td>
								</tr>
							</table>

						</form>
						<?php
						if (isset($_POST['log'])) {
							include 'config.php';

							$email = $_POST['EMAIL_ID'];
							$pass = $_POST['PASSWORD'];

							$qy = "SELECT * FROM `admin` WHERE EMAIL_ID = '$email' AND `PASSWORD` = '$pass'";
							$log = $conn->query($qy);
							$num = $log->num_rows;
							$row = $log->fetch_assoc();
							if ($num > 0) {
								session_start();
								$_SESSION['email'] = $row['EMAIL_ID'];
								$_SESSION['pass'] = $row['PASSWORD'];
						?>
								<div class="flash-message">
									<?php echo 'Login Successful'; ?>
								</div>
							<?php
								header('location: main.php?id=' . $_SESSION['email']);
							} else {
							?>
								<div class="flash-message"  style="margin: 40px auto; background: red; width: 250px;">
									<?php echo 'Login Unsuccessful. Please Try Again'; ?>
								</div>
						<?php
							}
						}
						?>

				</section>
			</div>


		</section>
		<!--  end search section  -->

		<?php
		// include 'footer.php';
		?><!--  end footer  -->

</body>

</html>