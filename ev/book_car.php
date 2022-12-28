<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sonko Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
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

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<?php
				include 'includes/config.php';
				$sel = "SELECT * FROM car WHERE REGISTRATION_NUMBER = '$_GET[id]'";
				// isset($_GET['REGISTRATION_NUMBER']);
				// $registrationNumber = $_GET['REGISTRATION_NUMBER'];
				//  $sel = "SELECT * FROM car WHERE car_id = '$registrationNumber'";


				// $sel = "SELECT * FROM car WHERE car_id = isset($_GET[REGISTRATION_NUMBER])";
				// $sel1 = "SELECT COST_PER_DAY FROM car WHERE car_id = '$_GET[id]'";
				$rs = $conn->query($sel);
				// $rs1 = $conn->query($sel1);
				$rws = $rs->fetch_assoc();
				// $rws1 = $rs1->fetch_assoc();
				?>
				<h2 style="text-align: center;">Book It Now!!  </h2>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image']; ?>" width="400" >
					</a>


					<span class="price"><?php echo '₹' . $rws['COST_PER_DAY']; ?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo '' . $rws['MAKE']; ?></a>
						</h1>
						<h2><span class="property_size"><?php echo $rws['MODEL_NAME']; ?></span></h2>
					</div>
				</li>
				
				<div>
				<p style="float:left; font-size: 18px; width:400px; text-align:justify ;"><span class="property_size"><?php echo $rws['CAR_DESCRIPTION']; ?></span></p>
				</div>
				<?php
				if (!isset($_SESSION['email']) || !isset($_SESSION['pass'])) {
				?>
					<a href="account.php">LOGIN</a>
				<?php
				} else {
				?>
					<a href="pay.php">Click to Book</a>
				<?php
				}
				?>
				<?php
				if (isset($_POST['save'])) {
					include 'includes/config.php';
					$fname = $_POST['fname'];
					$id_no = $_POST['id_no'];
					$gender = $_POST['gender'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$location = $_POST['location'];

					$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
					$result = $conn->query($qry);
					if ($result == TRUE) {
						echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"pay.php\")
											</script>";
					} else {
						echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
					}
				}

				?>
			</ul>
		</div>
	</section> <!--  end listing section  -->

	<?php
		include 'footer.php';
	?>

</body>

</html>