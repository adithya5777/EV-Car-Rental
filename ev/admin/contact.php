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
		
        $car = "SELECT * FROM contact";
        $car1 = $conn->query($car);
        ?>
        <div class="cal">
        <table class="invc">
            <tr>
            <td><h3>NAME</h3></td>
            <td><h3>EMAIL ID</h3></td>
            <td><h3>MESSAGE</h3></td>
            </tr>
        
        <?php
        while($carw1=$car1->fetch_assoc())
        { 
            ?>

            <tr>
            <td><?php echo $carw1['Name'] ?></td>
            <td><?php echo $carw1['Email'] ?></td>
            <td><?php echo $carw1['Message'] ?></td>
            </tr>
        
        <?php }
        ?>
		
	</section><!--  end search section  -->

	<?php
	// include 'footer.php';
	?><!--  end footer  -->

</body>
</html>