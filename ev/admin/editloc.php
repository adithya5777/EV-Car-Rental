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
		
        $loc = "SELECT * FROM location_details";
        $loc1 = $conn->query($loc);
        ?>
        <div class="cal">
        <table class="invc">
            <tr>
            <td><h3>LOCATION ID</h3></td>
            <td><h3>LOCATION NAME</h3></td>
            <td><h3>STREET</h3></td>
            <td><h3>CITY</h3></td>
            <td><h3>STATE NAME</h3></td>
            <td><h3>ZIPCODE</h3></td>
            </tr>
        
        <?php
        while($locw1=$loc1->fetch_assoc())
        { 
            ?>

            <tr>
            <td><?php echo $locw1['LOCATION_ID'] ?></td>
            <td><?php echo $locw1['LOCATION_NAME'] ?></td>
            <td><?php echo $locw1['STREET'] ?></td>
            <td><?php echo $locw1['CITY'] ?></td>
            <td><?php echo $locw1['STATE_NAME'] ?></td>
            <td><?php echo $locw1['ZIPCODE'] ?></td>
            </tr>
        
        <?php }
         $loct = "SELECT * FROM location_details";
         $loct1 = $conn->query($loct);
        ?>
		</table></div>
        <form method="post">
			<table class="inv">	
                <tr>
                <td>SELECT LOCATION NAME TO BE DELETED:</td>
                        <td>
                            <select name="LOCATION_DEL" required>
								<option> Select Car Category </option>
								<?php
                                while ($loctw1 = $loct1->fetch_assoc()) { ?>
									<option><?php echo $loctw1['LOCATION_NAME'] ?></option>
									<?php }
								?>
							</select>
                            <input type="submit" name='loc_delete' value="DELETE">
                        </td>
                </tr><br>
                <tr>
                <input type="submit" name='add' value="ADD NEW LOCATION">
                </tr>   
            </table>    
		</form>
        <?php
        if(isset($_POST['loc_delete'])){
            $loc_id = $_POST['LOCATION_DEL'];

            $del = "DELETE FROM location_details WHERE LOCATION_NAME = '$loc_id'";
            $del1 = $conn->query($del);
        } 
        if(isset($_POST['add'])){
            
            ?>
           
           <form method="post" onsubmit="func()">
                <table>
                    <tr>
                        <td>LOCATION ID:</td>
                        <td><input type="text" name="LOCID" required></td>
                    </tr>
                    <tr>
                        <td>LOCATION NAME:</td>
                        <td><input type="text" name="LOCNAME" required></td>
                    </tr>
                    <tr>
                        <td>STREET:</td>
                        <td><input type="text" name="STREET" required></td>
                    </tr>
                    <tr>
                        <td>CITY:</td>
                        <td><input type="text" name="CITY" required></td>
                    </tr>
                    <tr>
                        <td>STATE:</td>
                        <td><input type="text" name="STATE" required></td>
                    </tr>
                    <tr>
                        <td>ZIPCODE:</td>
                        <td><input type="text" name="ZIPCODE" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="save" value="SUBMIT"></td>
                    </tr>
                </table>
            </form><?php
         }
        ?>

	</section><!--  end search section  -->

	<?php
	// include 'footer.php';
	?><!--  end footer  -->

</body>
<script>
    function func(){
        <?php

                $locid = $_POST['LOCID'];
                $locname = $_POST['LOCNAME'];
                $street = $_POST['STREET'];
                $city = $_POST['CITY'];
                $state = $_POST['STATE'];
                $zipcode = $_POST['ZIPCODE'];


        if ($zipcode != 0) {
            $add = "INSERT INTO location_details VALUES ('$locid','$locname','$street','$city','$state','$zipcode')";
            $add1 = $conn->query($add);
        }
                ?>
    }
</script>
</html>