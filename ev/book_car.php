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

	<section>
		<?php
		include 'header.php';
		?>

		<section class="caption">
			<h1 style="text-align: center; font-size:xxx-large;"><span style="font-weight: 100;">Find the Best
				</span>CarForYou</h1>
		</section>
	</section><!--  end hero section  -->

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<?php
				include 'includes/config.php';
				$sel = "SELECT * FROM car WHERE REGISTRATION_NUMBER = '$_GET[id]'";
				$sel1 = "SELECT * FROM `car_category` WHERE CATEGORY_NAME IN ( SELECT CAR_CATEGORY_NAME FROM CAR WHERE REGISTRATION_NUMBER = '$_GET[id]')";

				$sel2 = "SELECT * FROM customer_details WHERE EMAIL_ID='$_SESSION[email]'";
				// isset($_GET['REGISTRATION_NUMBER']);
				// $registrationNumber = $_GET['REGISTRATION_NUMBER'];
				//  $sel = "SELECT * FROM car WHERE car_id = '$registrationNumber'";
				// $sel = "SELECT * FROM car WHERE car_id = isset($_GET[REGISTRATION_NUMBER])";
				// $sel1 = "SELECT COST_PER_DAY FROM car WHERE car_id = '$_GET[id]'";
				
				$rs = $conn->query($sel);
				$rs1 = $conn->query($sel1);
				$rs2 = $conn->query($sel2);
				$rws = $rs->fetch_assoc();
				$rws1 = $rs1->fetch_assoc();
				$rws2 = $rs2->fetch_assoc();
				?>
				
				<h2 style="text-align: center;">Book It Now!!</h2>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image']; ?>" width="400">
					</a>


					<span class="price">
						<?php echo '₹' . $rws['COST_PER_DAY']; ?>
					</span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
								<?php echo '' . $rws['MAKE']; ?>
							</a>
						</h1>
						<h2><span class="property_size">
								<?php echo $rws['MODEL_NAME']; ?>
							</span></h2>
					</div>
				</li>




				<div>
					<p style="float:left; font-size: 18px; width:400px; text-align:justify ;"><span
							class="property_size">
							<?php echo $rws['CAR_DESCRIPTION']; ?>
						</span></p>
				</div>

				<div class="wrapper">
					<table>
						<tr>
							<td>
								<div class="property_details">
									<h2>
										Car Range
									</h2>
									<h3><span class="property_size">
											<?php echo $rws['CAR_RANGE']; ?>
										</span></h3>
								</div>
							</td>
							<td>
								<div class="property_details">
									<h2>
										Car Category
									</h2>
									<h3><span class="property_size"><?php echo $rws['CAR_CATEGORY_NAME']; ?></span></h3>
								</div>
							</td>
							<td>
								<div class="property_details">
									<h2>
										Luggage Capacity
									</h2>
									<h3><span class="property_size">
											<?php echo $rws1['NO_OF_LUGGAGE']; ?>
										</span></h3>
								</div>
							</td>
							<td>
								<div class="property_details">
									<h2>
										Seating Capacity
									</h2>
									<h3><span class="property_size"><?php echo $rws1['NO_OF_PERSON']; ?></span></h3>
								</div>
							</td>
							<td>
								<div class="property_details">
									<h2>
										Reg. Year
									</h2>
									<h3><span class="property_size">
											<?php echo $rws['MODEL_YEAR']; ?>
										</span></h3>
								</div>
							</td>
						</tr>
					</table>
				</div>



				<?php
				if (!isset($_SESSION['email']) || !isset($_SESSION['pass'])) {
					?>
					<a href="account.php">LOGIN</a>
					<?php
				} else {
					?>
					<div class="property_details">
						<?php
						$pickdrop = "SELECT * FROM location_details";
						$pick = $conn->query($pickdrop);
						$drop = $conn->query($pickdrop); ?>
					</div>

					<section class="cal">
						<form id="date-form" method="post"
							action="/ev/book_car.php?id=<?php echo $rws['REGISTRATION_NUMBER'] ?>">
							<label for="from-date">From:</label>
							<input type="date" id="from-date" name="from-date" min="<?= date('Y-m-d') ?>" required>
							<label for="to-date">To:</label>
							<input type="date" id="to-date" name="to-date" min="<?= date('Y-m-d') ?>" required><br><br>


							<label>Pick Up Location:</label>
							<select name="Pick_Up" required>
								<option> Select Location </option>
								<?php
								while ($pkl = $pick->fetch_assoc()) { ?>
									<option><?php echo $pkl['LOCATION_NAME'] ?></option>
									<?php }
								?>
							</select>
							<br>
							<br>
							<label>Drop Off Location:</label>
							<select name="Drop_Off" required>
								<option> Select Location </option>
								<?php
								while ($dpl = $drop->fetch_assoc()) { ?>
									<option><?php echo $dpl['LOCATION_NAME'] ?></option>
									<?php }
								?>
							</select>

							<br><br>
							<input type="submit" name="save" value="RESERVE">
						</form><br><br>

						<?php
						if (isset($_POST['save'])) {
							// Get the selected dates
					
							$fromPick = $_POST['Pick_Up'];
							$fromDrop = $_POST['Drop_Off'];

							$q1 = "SELECT LOCATION_ID FROM location_details WHERE LOCATION_NAME = '$fromPick'";
							$q2 = "SELECT LOCATION_ID FROM location_details WHERE LOCATION_NAME = '$fromDrop'";
							$qrs1 = $conn->query($q1);
							$qrs2 = $conn->query($q2);
							$qrws1 = $qrs1->fetch_assoc();
							$qrws2 = $qrs2->fetch_assoc();
							$fromDate = $_POST['from-date'];
							$toDate = $_POST['to-date'];

							// $ck = "SELECT count(*) FROM booking_details WHERE FROM_DT_TIME > '$fromDate' or RET_DT_TIME < '$toDate' and REG_NUM = '$_GET[id]'";
							$ck = "SELECT *, count(*) as cnt FROM booking_details WHERE (((FROM_DT_TIME <= '$fromDate' and RET_DT_TIME >= '$fromDate') or (FROM_DT_TIME <= '$toDate' and RET_DT_TIME >= '$toDate') or (FROM_DT_TIME >= '$fromDate' and RET_DT_TIME <= '$toDate')) and REG_NUM = '$_GET[id]')";
							$cks = $conn->query($ck);
							$ckr = $cks->fetch_assoc();
							if ($ckr['cnt'] > 0) {
								?>
									<div class="flash-message">
										<?php
										echo 'This Car is already booked form day '.$ckr['FROM_DT_TIME']. ' to '.$ckr['RET_DT_TIME'];
										?>
									</div>
								<?php
							} else {
								// Do something with the selected dates
								if ($fromPick != 'Select Location' && $fromDrop != 'Select Location') {
									if ($fromDate < $toDate) {
										$pickid = $qrws1['LOCATION_ID'];
										$dropid = $qrws2['LOCATION_ID'];
										$dln = $rws2['DL_NUMBER'];
										$amount = $rws['COST_PER_DAY'];
										$reg = $rws['REGISTRATION_NUMBER'];
										$bookstatus = "Y";
										// echo 'From: ' . $fromDate . '  , To: ' . $toDate . '  , From: ' . $fromPick . '  , To: ' . $fromDrop . ' , Amount: ' . $amount.' , DLNO: ' . $dln .' , query: ' . $qrws1['LOCATION_ID'];
										$qry = "INSERT INTO booking_details(FROM_DT_TIME, RET_DT_TIME, AMOUNT, BOOKING_STATUS, PICKUP_LOC, DROP_LOC, REG_NUM, DL_NUM)VALUES('$fromDate','$toDate','$amount','$bookstatus','$pickid','$dropid', '$reg', '$dln')";

										$ins = $conn->query($qry);

										?>
								<a href="bill.php?id=<?php echo $rws['REGISTRATION_NUMBER'] ?>">Proceed to Billing</a><?php
									} else {
										?>
									<div class="flash-message">
										<?php
										echo 'Invalid Date, Please try again';
										?>
									</div>
								<?php
									}
								}
							}
						}

						?>

					</section>
					<?php
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