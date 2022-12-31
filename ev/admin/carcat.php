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
		
        $car = "SELECT * FROM car_category";
        $car1 = $conn->query($car);
        ?>
        <div class="cal">
        <table class="invc">
            <tr>
            <td><h3>CAR CATEGORY</h3></td>
            <td><h3>LUGGAGE</h3></td>
            <td><h3>SEATING CAPACITY</h3></td>
            </tr>
        
        <?php
        while($carw1=$car1->fetch_assoc())
        { 
            ?>

            <tr>
            <td><?php echo $carw1['CATEGORY_NAME'] ?></td>
            <td><?php echo $carw1['NO_OF_LUGGAGE'] ?></td>
            <td><?php echo $carw1['NO_OF_PERSON'] ?></td>
            </tr>
        
        <?php }
         $cat = "SELECT * FROM car_category";
         $cat1 = $conn->query($cat);
        ?>
		</table></div>
        <form method="post">
			<table class="inv">	
                <tr>
                <td>SELECT CAR CATEGORY TO BE EDITED:</td>
                        <td>
                            <select name="CATEGORY_EDIT" required>
								<option> Select Car Category </option>
								<?php
								while ($catw1 = $cat1->fetch_assoc()) { ?>
									<option><?php echo $catw1['CATEGORY_NAME'] ?></option>
									<?php }
								?>
							</select>
                            <input type="submit" name='cat_edit' value="EDIT">
                        </td>
                </tr><br>
                <tr>
                <td>SELECT CAR CATEGORY TO BE DELETED:</td>
                        <td>
                            <select name="CATEGORY_DEL" required>
								<option> Select Car Category </option>
								<?php
                                $cas = "SELECT * FROM car_category";
                                $cas1 = $conn->query($cas);
								while ($casw1 = $cas1->fetch_assoc()) { ?>
									<option><?php echo $casw1['CATEGORY_NAME'] ?></option>
									<?php }
								?>
							</select>
                            <input type="submit" name='cat_delete' value="DELETE">
                        </td>
                </tr><br>
                <tr>
                <input type="submit" name='add' value="ADD NEW CAR CATEGORY">
                </tr>   
            </table>    
		</form>
        <?php
        if(isset($_POST['cat_delete'])){
            $delete_id = $_POST['CATEGORY_DEL'];

            $del = "DELETE FROM car_category WHERE CATEGORY_NAME = '$delete_id'";
            $del1 = $conn->query($del);
        } 
        if(isset($_POST['add'])){
            
            ?>
           
           <form method="post">
                <table>
                    <tr>
                        <td>CATEGORY NAME:</td>
                        <td><input type="test" name="CAT_NAME" required></td>
                    </tr>
                    <tr>
                        <td>LUGGAGE CAPACITY:</td>
                        <td><input type="text" name="LUGGAGE" required></td>
                    </tr>
                    <tr>
                        <td>SEATING CAPACITY</td>
                        <td><input type="text" name="SEAT" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="save" value="SUBMIT"></td>
                    </tr>
                </table>
            </form><h1>HELLO</h1><?php

            if(isset($_POST['save'])) { ?>
                <h1>HELLO</h1><?php

                $catname = $_POST['CAT_NAME'];
                $luggage = $_POST['LUGGAGE'];
                $seat = $_POST['SEAT'];

                
                echo ' ' . $catname . ' ' . $luggage . ' ' . $seat . ' ';
                // $add = "INSERT INTO car VALUES ('$carid','$regnum','$modelname','$make','$modelyear','$range','$category','$cpd','$flag','$cardesc','$image')";
                // $add1 = $conn->query($add);
           }
         }
        ?>

	</section><!--  end search section  -->

	<?php
	// include 'footer.php';
	?><!--  end footer  -->

</body>

</html>