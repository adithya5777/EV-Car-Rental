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


	<style>
		header {
			position: fixed;
			top: 0;
		}
	</style>
	<!-- <script>
		window.onbeforeunload = function() {
			console.log("MAAKICHUT");
			// Make an AJAX call to a server-side script that runs the SQL trigger
			$.ajax({
				type: "POST",
				url: "runtrigger.php",
				data: {
					// any data you need to pass to the server-side script
				}
			});
		};
	</script> -->

	<!-- <script>
		$(document).ready(function() {
			$.ajax({
				type: "POST",
				url: "runtrigger.php",
				data: {
					// any data you need to pass to the server-side script
				}
			});
		});
	</script> -->
</head>

<body class="hide" onload="runTrigger()">

	<section id="lp">
		<section class="top-header">
			<?php
			include 'header.php';
			?>

			<section class="caption" style="margin-top:100px">
				<br>
				<h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed;">Find the Best</span><span style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"> CarForYou</span></h1>
				<!-- <h1 id="motto" style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"><span style="font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best </span>CarForYou</h1> -->
			</section>
		</section>
		<br><br><br><br>
		<img id="nex" class="thumb" src="cars/nexxt.png" width="90%" style="box-shadow: 0px 0px 50px 40px #000;">
	</section>
	<!--  end hero section  -->

	<?php
	include 'includes/about.php';
	include 'includes/contact.php';
	include 'footer.php';
	?>
</body>

<script>
	function runTrigger() {
		$.ajax({
			type: "POST",
			url: "run_sql_trigger.php",
			data: {
				// any data you need to pass to the server-side script
			}
		});
	}
</script>


</html>