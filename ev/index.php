<!DOCTYPE html>
<html lang="en">

<head>
	<title>CarForYou</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" href="/index.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="shortcut icon" href="/ev/assets/favicon_io/favicon.ico" type="image/x-icon">

	<link rel="shortcut icon" href="/assets/logofinal.png" type="">

	<style>
		header {
			position: fixed;
			top: 0;
		}

		#lp {
			height: 100vh;
			width: 100vw;
			background-image: url(/assets/bgm.jpg);
		}
	</style>
</head>

<body class="hide">

	<section id="lp">
		<section class="top-header">
			<?php
			include 'header.php';
			?>

			<section class="caption" style="margin-top:100px">
				<br>
				<h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best</span><span style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"> CarForYou</span></h1>
				<!-- <h1 id="motto" style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"><span style="font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best </span>CarForYou</h1> -->
			</section>
		</section>
		<br><br><br><br><br>
		<img id="nex" class="thumb" src="cars/nexxt.png" width="90%" style="box-shadow: 0px 0px 50px 40px #000;">
	</section>
	<!--  end hero section  -->

	<?php include 'includes/config.php';
	$sel = "SELECT img_name FROM images WHERE img_name='nexx.png'";
	$rs = $conn->query($sel);
	$rws = $rs->fetch_assoc();
	include 'includes/about.php';
	?>


	<section>
		<?php
		include 'includes/config.php';
		?>
		<div class="row">
			<div>
				<div>
					<h3>Address</h3>
					<address>
						<strong>CarForYou</strong><br>
						Campus Rd, University Of Mysore Campus,<br>
						Mysuru, Karnataka, India 570006<br>
						<abbr title="Phone">P:</abbr> 9876543215
					</address>
				</div>
			</div>
			<div class="Input">
				<div>
					<form method="POST" id="contact-form" onsubmit="func(); alert('Thank you for your feedback!');">
						<div>
							<input type="text" name="Name" id="Name" placeholder="Name" required style="visibility: visible; animation-name: fadeInUp;">
						</div>
						<div>
							<input type="email" name="Email" id="Email" placeholder="Email" required style="background-size: 20px; background-position: 97% center; cursor: auto;">
						</div>
						<div>
							<textarea name="Message" rows="8" cols="20" id="Message" placeholder="Message" required style="visibility: visible; animation-name: fadeInUp; width: 769px; height: 152px;"></textarea>
						</div>
						<div>
							<input type="submit" name="submit" value="Submit">
						</div>
					</form>
					<?php
					?>
				</div>
			</div>
		</div>

	</section>

	<?php
	
	include 'footer.php';
	?>

</body>

<script>
	function func() {
		<?php
		include 'includes/config.php';
		$email = $_POST['Email'];
		$name = $_POST['Name'];
		$mess = $_POST['Message'];

		$in = "INSERT INTO contact (`Name`,Email,`Message`) VALUES ('$email','$name','$mess')";
		$ins = $conn->query($in);
		?>
	}
</script>

</html>