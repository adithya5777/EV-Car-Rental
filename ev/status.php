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
		include 'header.php'; ?>
	</section><!--  end hero section  -->
	<?php include 'includes/config.php'; ?><section class="caption">
		<h1 style="text-align: center; font-size:xxx-large;"><span style="font-weight: 100;">Find the Best </span>CarForYou</h1>
		<?php
		$view1 = "SELECT * FROM customer_details WHERE EMAIL_ID='$_GET[id]'";
		$v1 = $conn->query($view1);
		$vw1 = $v1->fetch_assoc();
		$try = $v1->num_rows;
		if($try > 0){
			$dlnum = $vw1['DL_NUMBER'];
			$view2 = "SELECT * FROM billing_details WHERE DL_NUM='$dlnum'";
		$v2 = $conn->query($view2);
		// $vw2 = $v2->fetch_assoc();

		$view3 = "SELECT count(*) FROM billing_details WHERE DL_NUM='$dlnum'";
		$v3 = $conn->query($view3);
		$row = $v3->fetch_row();

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

		?><h2><?php echo 'Booking ID: #' . $bookid ?></h2>
			<h2><?php echo 'Bill Date:' . $billdate  ?></h2>
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
		?><div class="wrapper">
			<form method="post" onsubmit="rl()">
				<label for="book-id">Enter your Booking ID to Cancel: </label>
				<input type="text" id="book-id" placeholder="Booking ID #" name="cancel-id">
				<input type="submit" name='cancel' value="CANCEL">
			</form>
			<?php
			if (isset($_POST['cancel'])) {
				$cancel_id = $_POST['cancel-id'];
				$sel = "DELETE FROM `billing_details`  WHERE BOOKING_ID = '$cancel_id'";
				$sel1 = "DELETE FROM `booking_details` WHERE BOOKING_ID = '$cancel_id'";
				$rs = $conn->query($sel);
				$rs1 = $conn->query($sel1);
			} ?>

			<a href="status.php?id=<?php echo $_SESSION['email'] ?>">REFRESH</a>

		</div>
		<?php
		}
		else{ ?>	
			<h1>You Have NO BOOKINGS!</h1>
			<?php
		}
		?>
		
	</section>
	<?php
	include 'footer.php';
	?>
</body>

</html>