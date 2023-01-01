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
        include 'config.php';
        include 'header.php';
		
        $car = "SELECT * FROM booking_details";
        $car1 = $conn->query($car);
        ?>
        <div class="cal">
        <table class="invc">
            <tr>
            <td><h3>BOOKING ID</h3></td>
            <td><h3>FROM DATE</h3></td>
            <td><h3>RETURN DATE</h3></td>
            <td><h3>COST PER DAY</h3></td>
            <td><h3>BOOKING STATUS</h3></td>
            <td><h3>PICK UP LOCATION</h3></td>
            <td><h3>DROP LOCATION</h3></td>
            <td><h3>REGISTRATION NUMBER</h3></td>
            <td><h3>DL NUMBER</h3></td>
            </tr>
        
        <?php
        while($carw1=$car1->fetch_assoc())
        { 
            ?>

            <tr>
            <td><?php echo $carw1['BOOKING_ID'] ?></td>
            <td><?php echo $carw1['FROM_DT_TIME'] ?></td>
            <td><?php echo $carw1['RET_DT_TIME'] ?></td>
            <td><?php echo $carw1['AMOUNT'] ?></td>
            <td><?php echo $carw1['BOOKING_STATUS'] ?></td>
            <td><?php echo $carw1['PICKUP_LOC'] ?></td>
            <td><?php echo $carw1['DROP_LOC'] ?></td>
            <td><?php echo $carw1['REG_NUM'] ?></td>
            <td><?php echo $carw1['DL_NUM'] ?></td>
            </tr>
        
        <?php }
        ?>
		
	</section><!--  end search section  -->

	<?php
	// include 'footer.php';
	?><!--  end footer  -->

</body>
</html>