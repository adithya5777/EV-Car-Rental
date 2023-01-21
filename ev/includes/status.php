<!DOCTYPE html>
<html lang="en">

<head>
	<title>CarForYou | View Bookings</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="shortcut icon" href="/ev/assets/favicon_io/favicon.ico" type="image/x-icon">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<script>
		window.onbeforeunload = function() {
			// Make an AJAX call to a server-side script that runs the SQL trigger
			$.ajax({
				type: "POST",
				url: "runtrigger.php",
				data: {
					// any data you need to pass to the server-side script
				}
			});
		};
	</script>

	<style>
		.booking {
			font-size: 20px;
			font-family: 'Quicksand';
			color: #ededed;
		}

		#book-id {
			margin: 15px;
			font-size: 17.5px;
			font-family: 'Quicksand';
		}

		#cancel {
			font-size: 17.5px;
			font-family: 'Good Times';
			height: 40px;
			width: 120px;
			color: white;
			border: none;
			border-radius: 50px;
			background-color: #da0037;
		}

		#refr {
			margin: 15px;
			font-size: 17.5px;
			font-family: 'Good Times';
			height: 40px;
			width: 120px;
			color: white;
			border: none;
			border-radius: 50px;
			background-color: #49c5b6;
		}


		.bookdet {
			color: #ededed;
		}
	</style>
</head>

<body>
	<section class="">
		<?php
		include 'header.php'; ?>
	</section><!--  end hero section  -->
	<?php include 'includes/config.php'; ?>
	<section class="caption" style="margin-top:100px">
		<br>
		<h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best</span><span style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"> CarForYou</span></h1>
		<!-- <h1 id="motto" style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"><span style="font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best </span>CarForYou</h1> -->
	</section>

	<?php
	$check = "DELETE FROM booking_details WHERE BOOKING_ID NOT IN (SELECT BOOKING_ID FROM billing_details)";
	$check1 = $conn->query($check);

	$view1 = "SELECT * FROM customer_details WHERE EMAIL_ID='$_GET[id]'";
	$v1 = $conn->query($view1);
	$vw1 = $v1->fetch_assoc();
	$dlnum = $vw1['DL_NUMBER'];
	$view2 = "SELECT * FROM billing_details WHERE DL_NUM='$dlnum'";
	$v2 = $conn->query($view2);
	$try = $v2->num_rows;
	// $date = date('Y-m-d', strtotime("+1 day"));

	$date = date('y-m-d');
	if ($try > 0) {
		// $vw2 = $v2->fetch_assoc();

		while ($vw2 = $v2->fetch_assoc()) {

			$bookid = $vw2['BOOKING_ID'];
			$billdate = $vw2['BILL_DATE'];
			$model = $vw2['MODEL_NAME'];
			$fromdate = $vw2['FROM_DATE'];
			$todate = $vw2['TO_DATE'];
			$numDays = $vw2['NO_OF_DAYS'];
			$cpd = $vw2['CPD'];
			$pickloc = $vw2['PICK_LOC'];
			$droploc = $vw2['DROP_LOC'];
			$gross = $vw2['GROSS_TOTAL'];
			$total = $vw2['TOTAL_AMOUNT'];

	?>
			<h2 class="bookdet"><?php echo 'Booking ID: #' . $bookid ?></h2>
			<h2 class="bookdet"><?php echo 'Bill Date: ' . $billdate  ?></h2>
			<div class="cal">
				<table class="invc">
					<tr>
						<th>Model</th>
						<th>From Date</th>
						<th>To Date</th>
						<th>Total Days</th>
						<th>Cost Per Day</th>
						<!-- <th>Gross Total</th> -->
					</tr>
					<tr>
						<td><?php echo $model ?></td>
						<td><?php echo '' . $fromdate ?></td>
						<td><?php echo '' . $todate ?></td>
						<td><?php echo '' . $numDays ?></td>
						<td><?php echo '' . $cpd ?></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<th colspan="4" style="text-align:center;">Pick Up Location:</th>
						<!-- <th>Gross Total</th> -->
						<td><?php echo '' . $pickloc ?></td>
					</tr>
					<tr>
						<th colspan="4" style="text-align:center;">Drop Off Location</th>
						<!-- <th></th> -->
						<td><?php echo '' . $droploc ?></td>
					</tr>
					<tr>
						<th colspan="5" style="text-align:center;"> INVOICE</th>
						<!-- <th></th> -->
						<!-- <th><?php echo '' . $total ?></th> -->
					</tr>
					<tr>
						<th colspan="4" style="text-align:center;">Gross Total</th>
						<!-- <th>Gross Total</th> -->
						<th><?php echo '' . $gross ?></th>
					</tr>
					<tr>
						<th colspan="4" style="text-align:center;">Total Amount(inc. of tax-12%)</th>
						<!-- <th></th> -->
						<th><?php echo '' . $total ?></th>
					</tr>

				</table>
			</div>
		<?php
		}
		$view3 = "SELECT * FROM billing_details WHERE DL_NUM='$dlnum'";
		$v3 = $conn->query($view3);
		?><div class="wrapper">
			<div>
				<form method="post">
					<label class="booking" for="book-id">Enter your Booking ID to Cancel: </label><br>
					<!-- <input type="text" id="book-id" placeholder="Booking ID #" name="cancel-id"><br> -->
					<select name="cancel-id" required>
						<option> Select BOOKING_ID </option>
						<?php
						while ($vw3 = $v3->fetch_assoc()) {
						?>
							<option><?php echo $vw3['BOOKING_ID'] ?></option> <?php
																			}
																				?>
					</select>
					<br>
					<input class="cancbut" id="cancel" type="submit" name='cancel' value="CANCEL">
				</form>
				<h1> <?php echo $date; ?> </h1>
			</div>

			<?php
			if (isset($_POST['cancel'])) {
				$cancel_id = $_POST['cancel-id'];
				$sel = "DELETE FROM `billing_details`  WHERE BOOKING_ID = '$cancel_id' AND ( FROM_DATE >= '$date')";
				$sel1 = "DELETE FROM `booking_details` WHERE BOOKING_ID = '$cancel_id' AND ( FROM_DT_TIME >= '$date')";
				$rs = $conn->query($sel);
				$rs1 = $conn->query($sel1);
			} ?>

			<button style="height: 40px; width: 120px; color: #ededed; background: #49c5b6;" class="but"><a href="status.php?id=<?php echo $_SESSION['email'] ?>"></a>REFRESH</button>

		</div>
	<?php
	} else { ?>
		<h1 class="red-font" style="font-size:30px; margin:60px;">You Have NO BOOKINGS!</h1>
	<?php
	}
	?>

	</section>
	<?php
	include 'footer.php';
	?>
</body>

</html>