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

	
</head>

<body>

	<section class="">
		<?php
        include 'config.php';
        include 'header.php';
		
        $car = "SELECT * FROM billing_details";
        $car1 = $conn->query($car);
        ?>
        <div class="cal">
        <table class="invc">
            <tr>
            <td><h3>BILL ID</h3></td>
            <td><h3>DL NUMBER</h3></td>
            <td><h3>NAME</h3></td>
            <td><h3>BOOKING ID</h3></td>
            <td><h3>BILL DATE</h3></td>
            <td><h3>MODEL NAME</h3></td>
            <td><h3>FROM DATE</h3></td>
            <td><h3>TO DATE</h3></td>
            <td><h3>NO OF DAYS</h3></td>
            <td><h3>COST PER DAY</h3></td>
            <td><h3>PICK UP LOCATION</h3></td>
            <td><h3>DROP LOCATION</h3></td>
            <td><h3>GROSS TOTAL</h3></td>
            <td><h3>TOTAL AMOUNT</h3></td>
            </tr>
        
        <?php
        while($carw1=$car1->fetch_assoc())
        { 
            ?>

            <tr>
            <td><?php echo $carw1['BILL_ID'] ?></td>
            <td><?php echo $carw1['DL_NUM'] ?></td>
            <td><?php echo $carw1['NAME'] ?></td>
            <td><?php echo $carw1['BOOKING_ID'] ?></td>
            <td><?php echo $carw1['BILL_DATE'] ?></td>
            <td><?php echo $carw1['MODEL_NAME'] ?></td>
            <td><?php echo $carw1['FROM_DATE'] ?></td>
            <td><?php echo $carw1['TO_DATE'] ?></td>
            <td><?php echo $carw1['NO_OF_DAYS'] ?></td>
            <td><?php echo $carw1['CPD'] ?></td>
            <td><?php echo $carw1['PICK_LOC'] ?></td>
            <td><?php echo $carw1['DROP_LOC'] ?></td>
            <td><?php echo $carw1['GROSS_TOTAL'] ?></td>
            <td><?php echo $carw1['TOTAL_AMOUNT'] ?></td>

            </tr>
        
        <?php }
        ?>
		
	</section><!--  end search section  -->

	<?php
	// include 'footer.php';
	?><!--  end footer  -->

</body>
</html>