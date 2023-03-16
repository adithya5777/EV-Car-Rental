<!DOCTYPE html>
<html lang="en">

<head>
	<title>CarForYou | Book Car</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<style>
		.listings {
			padding: 0;
		}

		.r1 {
			height: 375px;
			display: grid;
			grid-column: 50% 50%;
			grid-template-columns: 1fr 1fr;
			place-items: center;
		}

		.rr1 {
			width: 95%;
			height: 375px;
		}

		.rr1 li {
			/* height: 100%; */
			width: 100% !important;
		}

		.rr1 p {
			margin: 20px 40px 0 40px;
			font-size: 21px;
			color: #ededed;
			font-family: 'Quicksand';
			/* float: left; */
			/* width: 500px; */
			text-align: justify;
			font-weight: bold;
		}

		h2,
		h3 {
			margin: 15px 0;
			color: #ededed;
			font-size: 20px;
			font-family: 'Quicksand';
		}

		.r2 {
			/* height:100px; */
			margin: 60px 0;
			display: grid;
			place-items: center;
		}

		.r3 {
			/* height:100px; */
			margin: 30px 0;
			display: grid;
			place-items: center;
		}

		.r2 table {
			width: 100%;
			border-radius: 20px;
			border: 0.5px solid black;

		}

		table td,
		table th {
			/* height: 15px; */
			border: 0.5px solid #49c5b6;
		}

		.r3 a {
			font-size: 25px;
			font-family: 'Good Times';
			color: #1475e3;
			text-decoration: none;

		}

		.r4 {
			display: grid;
			grid-column: 50% 50%;
			grid-template-columns: 1fr 1fr;
			place-items: center;
		}

		label {
			color: #171717;
		}

		.cal {
			flex-direction: column;
		}
	</style>
</head>

<body class="hide">

	<section>
		<?php
		include 'header.php';
		?>

		<section class="caption" style="margin-top:100px">

			<h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best</span><span style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"> CarForYou</span></h1>
			<!-- <h1 id="motto" style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"><span style="font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best </span>CarForYou</h1> -->
		</section>
	</section><!--  end hero section  -->

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<?php
				include 'includes/config.php';
				$sel = "SELECT * FROM car WHERE REGISTRATION_NUMBER = '$_GET[id]'";
				$sel1 = "SELECT * FROM `car_category` WHERE CATEGORY_NAME IN ( SELECT CAR_CATEGORY_NAME FROM CAR WHERE REGISTRATION_NUMBER = '$_GET[id]')";


				// isset($_GET['REGISTRATION_NUMBER']);
				// $registrationNumber = $_GET['REGISTRATION_NUMBER'];
				//  $sel = "SELECT * FROM car WHERE car_id = '$registrationNumber'";
				// $sel = "SELECT * FROM car WHERE car_id = isset($_GET[REGISTRATION_NUMBER])";
				// $sel1 = "SELECT COST_PER_DAY FROM car WHERE car_id = '$_GET[id]'";

				$rs = $conn->query($sel);
				$rs1 = $conn->query($sel1);

				$rws = $rs->fetch_assoc();
				$rws1 = $rs1->fetch_assoc();

				?>

				<h2 style="text-align: center; margin: 20px; color: #ededed;">Book It Now!!</h2>
				<div class="r1">
					<div class="rr1">
						<li>

							<img class="thumb" src="cars/<?php echo $rws['image']; ?>">



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
					</div>
					<div class="rr1">
						<p><span class="property_size">
								<?php echo $rws['CAR_DESCRIPTION']; ?>
							</span></p>
					</div>
				</div>






				<div class="r2">
					<table>
						<tr>
							<th>
								<h2>
									<span><img src="/assets/range.svg" alt=""></span> Car Range
								</h2>
							</th>
							<th>
								<h2>
									Car Category
								</h2>
							</th>
							<th>
								<h2>
									Luggage Capacity
								</h2>
							</th>
							<th>
								<h2>
									Seating Capacity
								</h2>
							</th>
							<th>
								<h2>
									Reg. Year
								</h2>
							</th>
						</tr>
						<tr>
							<td>
								<h3><span class="property_size">
										<?php echo $rws['CAR_RANGE']; ?>
									</span></h3>
							</td>
							<td>
								<h3><span class="property_size"><?php echo $rws['CAR_CATEGORY_NAME']; ?></span></h3>
							</td>
							<td>
								<h3><span class="property_size">
										<?php echo $rws1['NO_OF_LUGGAGE']; ?>
									</span></h3>
							</td>
							<td>
								<h3><span class="property_size"><?php echo $rws1['NO_OF_PERSON']; ?></span></h3>
							</td>
							<td>
								<h3><span class="property_size">
										<?php echo $rws['MODEL_YEAR']; ?>
									</span></h3>
							</td>
						</tr>
					</table>


				</div>
				<div class="r3">
					<div>
						<?php
						if (!isset($_SESSION['email']) || !isset($_SESSION['pass'])) {
						?>
							<a href="account.php">LOGIN</a>
					</div>
				</div>




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
					<form id="date-form" method="post" action="/ev/book_car.php?id=<?php echo $rws['REGISTRATION_NUMBER'] ?>">
						<div class="r4">
							<div>
								<label class="bclabel" for="from-date">From:</label><br>
								<input type="date" id="from-date" name="from-date" min="<?= date('Y-m-d') ?>" required>
							</div>
							<div>
								<label class="bclabel" for="to-date">To:</label>
								<br>
								<input type="date" id="to-date" name="to-date" min="<?= date('Y-m-d') ?>" required>
							</div>


						</div>


						<select name="Pick_Up" required>

							<option> Pick Up Location </option>
							<?php
							while ($pkl = $pick->fetch_assoc()) { ?>
								<option style="color: #171717;"><?php echo $pkl['LOCATION_NAME'] ?></option>
							<?php }
							?>
						</select>
						<!-- <label>Drop Off Location:</label> -->
						<select name="Drop_Off" required>
							<option> Drop Off Location </option>
							<?php
							while ($dpl = $drop->fetch_assoc()) { ?>
								<option style="color: #171717;"><?php echo $dpl['LOCATION_NAME'] ?></option>
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
							<div class="flash-message" style="background-color: red">
								<?php
									echo 'This Car is already booked form day ' . $ckr['FROM_DT_TIME'] . ' to ' . $ckr['RET_DT_TIME'];
								?>
							</div>
							<?php
								} else {
									// Do something with the selected dates
									$sel2 = "SELECT * FROM customer_details WHERE EMAIL_ID='$_SESSION[email]'";
									$rs2 = $conn->query($sel2);
									$rws2 = $rs2->fetch_assoc();

									if ($fromPick != 'Pick Up Location' && $fromDrop != 'Drop Off Location') {
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
									<a href="bill.php?id=<?php echo $rws['REGISTRATION_NUMBER'] ?>">Proceed to Billing</a>
								<?php
										} else {
								?>
									<div class="flash-message" style="background-color: red">
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