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
        include 'header.php';
        include 'includes/config.php';
        $sel = "SELECT * FROM location_details";
        $rs = $conn->query($sel);
        $rs1 = $conn->query($sel);
        $cost = "SELECT * FROM car WHERE REGISTRATION_NUMBER = '$_GET[id]'";
        $cs = $conn->query($cost);
        $cpd = $cs->fetch_assoc();
        $amount = $cpd['COST_PER_DAY'];
        ?>

        <section class="caption">
            <h1 style="text-align: center; font-size:xxx-large;"><span style="font-weight: 100;">Find the Best </span>CarForYou</h1>
        </section>
    </section><!--  end hero section  -->

    <!-- <div>
	<form id="date-form">
		<table>
		<tr>	
		<td><label for="from-date">From:</label>
	  			<input type="date" id="date"><br></td>
  	<td><label for="to-date">To:</label>
	  <input type="date" id="date"><br></td>
  	<td colspan="2" style="text-align:right"><input type="submit" name="save" value="SUBMIT"></td>
	</form>
</div>	 -->
    <div class="wrapper">
        <form id="date-form" method="post" action="/ev/bill.php?id=<?php echo $rws['REGISTRATION_NUMBER'] ?>">
            <label for="from-date">From:</label>
            <input type="date" id="from-date" name="from-date">
            <label for="to-date">To:</label>
            <input type="date" id="to-date" name="to-date"><br><br>



            



            <table>
                <tr>
                    <td>Pick Up Location:</td>
                    <td>
                        <select name="Pick_Up">
                            <option> Select Location </option>
                            <?php
                            while ($rws = $rs->fetch_assoc()) { ?>
                                <option><?php echo $rws['LOCATION_NAME'] . ' , ' . $rws['STREET'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </td>
                    <td>Drop Off Location:</td>
                    <td>
                        <select name="Drop_Off">
                            <option> Select Location </option>
                            <?php
                            while ($rws = $rs1->fetch_assoc()) { ?>
                                <option><?php echo $rws['LOCATION_NAME'] . ' , ' . $rws['STREET'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </td>
                </tr>
            </table><br><br>
            <input type="submit" name="save" value="SUBMIT">
        </form><br><br>
    



    <?php
    if (isset($_POST['save'])) {
        // Get the selected dates
    
        $fromDate = $_POST['from-date'];
        $toDate = $_POST['to-date'];
        $fromPick = $_POST['Pick_Up'];
        $fromDrop = $_POST['Drop_Off'];

        // Convert the dates to timestamps
        $fromTimestamp = strtotime($fromDate);
        $toTimestamp = strtotime($toDate);

        // Calculate the difference in seconds between the two timestamps
        $difference = $toTimestamp - $fromTimestamp;

        // Convert the difference to days by dividing it by the number of seconds in a day (86400)
        $numDays = floor($difference / 86400) + 1;
        // Do something with the selected dates
        



        // Display the number of days
        echo 'Number of days: ' . $numDays;
        echo "     ";
        echo "     ";

        
        echo 'From: ' . $fromDate . '  , To: ' . $toDate . '  , From: ' . $fromPick . '  , To: ' . $fromDrop.' , Amount: '.$amount;
        // $qry = "INSERT INTO booking_details VALUES('$fromDate','$toDate','$amount','$bookstatus','$fromPick','$fromDrop')";

    }

    
    ?>

    </div>
    <?php
    include 'footer.php';
    ?>

</body>

</html>