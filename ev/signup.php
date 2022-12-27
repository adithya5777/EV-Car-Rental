<!DOCTYPE html>
<html lang="en">

<head>
	<title>CarForYou | SignUp</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

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
	</style>
</head>

<body>

	<section class="">
		<?php
		include 'header.php';
		?>

		<section class="caption">
			<h1 style="text-align: center; font-size:xxx-large;"><span style="font-weight: 100;">Find the Best </span>CarForYou</h1>
		</section>
	</section><!--  end hero section  -->


	<section class="listings" style="display: flex">
		<div class="wrapper" style="margin: 0 auto;">

			<h1 style="text-align: center;">Signup Here</h1>
			<form method="post">
				<table>
					<tr>
						<td>E-mail:</td>
						<td><input type="email" name="EMAIL_ID" required></td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="FNAME" required></td>
					</tr>
					<tr>
						<td>Middle Name:</td>
						<td><input type="text" name="MNAME"></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="LNAME" required></td>
					</tr>
					<tr>
						<td>DL Number:</td>
						<td><input type="text" name="DL_NUMBER" required></td>
					</tr>
					<tr>
						<td>Phone Number:</td>
						<td><input type="tel" name="PHONE_NUMBER" required></td>
					</tr>
					<tr>
						<td>Street:</td>
						<td><input type="text" name="STREET" required></td>
					</tr>
					<tr>
						<td>City:</td>
						<td><input type="text" name="CITY" required></td>
					</tr>
					<tr>
						<td>State:</td>
						<td><input type="text" name="STATE_NAME" required></td>
					</tr>
					<tr>
						<td>ZIP Code:</td>
						<td><input type="text" name="ZIPCODE" required></td>
					</tr>
					<tr>
						<td>Enter your Password:</td>
						<td><input type="password" name="PASSWORD" required></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:right"><input type="submit" name="save" value="SUBMIT"></td>
					</tr>
				</table>
			</form>
			<?php
			if (isset($_POST['save'])) {
				include 'includes/config.php';
				$email = $_POST['EMAIL_ID'];
				$fname = $_POST['FNAME'];
				$mname = $_POST['MNAME'];
				$lname = $_POST['LNAME'];
				$dlno = $_POST['DL_NUMBER'];
				$phone = $_POST['PHONE_NUMBER'];
				$street = $_POST['STREET'];
				$city = $_POST['CITY'];
				$state = $_POST['STATE_NAME'];
				$zip = $_POST['ZIPCODE'];
				$pwd = $_POST['PASSWORD'];

				$qry = "INSERT INTO customer_details VALUES('$email','$fname','$mname','$lname','$dlno','$phone','$street','$city','$state','$zip','$pwd')";
				$result = $conn->query($qry);


				
				if ($result == TRUE) {?>
				<div class="flash-message">  
					<?php echo 'Sign Up Successful';?>
				</div>
				<?php
				} else {
					?>
				<div class="flash-message">  
					<?php echo 'Registration Failed. Try Again';?>
				</div>
				<?php
				}
			}

			?>
			</ul>
		</div>
	</section> <!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Sonko Rescue team is an organized company that rents cars and other vehicles to clients at lower costs. We we are here to serve every Kenyan Citizen</p>
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
			Copyright &copy; <?php echo date("Y") ?> All Rights Reserved | Designed by Consi.
		</div>
	</footer><!--  end footer  -->

</body>

</html>