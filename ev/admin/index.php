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
		.flash-message {
			padding: 20px;
			background-color: #f44336;
			color: white;
			border-radius: 5px;
			margin-bottom: 15px;
		}
	</style>
</head>

<body>
	<section class="hide">
		<section class="">
			<?php
			include 'config.php';
			?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
			</section>
		</section><!--  end hero section  -->


		<section class="search">
			<div class="wrapper">
				<div id="fom">
					<form method="post">
						<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Client
							Login Area</h3>
						<table height="100" align-items="center">
							<tr>
								<td>Email Address:</td>
								<td><input type="email" name="EMAIL_ID" placeholder="E-mail" required></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="PASSWORD" placeholder="Password" required></td>
							</tr>
							<tr>
								<td><input type="submit" name="log" value="Login Here"></td>

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
	</section>
	<!--  end search section  -->

	<?php
	// include 'footer.php';
	?><!--  end footer  -->

</body>

</html>