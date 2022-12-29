<!DOCTYPE html>
<html lang="en">
<head>
	<title>EV Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
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
	
<form id="date-form" method="post" action="/ev/pay.php">
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
									<option>D.Urs Road</option>
									<option>Saa Raa Convention Hall </option>
									<option>Infosys Main Gate 2</option>
									<option>Mall Of Mysuru</option>
								</select>
							</td>
							<td>Drop Off Location:</td>
							<td>
								<select name="Drop_Off">
									<option> Select Location </option>
									<option>D.Urs Road</option>
									<option>Saa Raa Convention Hall </option>
									<option>Infosys Main Gate 2</option>
									<option>Mall Of Mysuru</option>
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
  
  // Do something with the selected dates
  echo 'From: ' . $fromDate . '  , To: ' . $toDate . '  , From: ' . $fromPick . '  , To: ' . $fromDrop;

  // Convert the dates to timestamps
  $fromTimestamp = strtotime($fromDate);
  $toTimestamp = strtotime($toDate);
  
  // Calculate the difference in seconds between the two timestamps
  $difference = $toTimestamp - $fromTimestamp;
  
  // Convert the difference to days by dividing it by the number of seconds in a day (86400)
  $numDays = floor($difference / 86400) + 1;
  
  // Display the number of days
  echo 'Number of days: ' . $numDays;
  echo "     ";
  echo "     ";
 }
//   // Define the numbers and letters that will be used in the sequence
//   $numbers = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
//   $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
  
//   // Initialize the number to A1
//   $number = 'A1';
  
//   // Loop through the numbers and letters to generate the next number in the sequence
//   for ($i = 0; $i < 10; $i++) {
//     // Split the number into a letter and a number
//     $letter = $number[0];
//     $num = $number[1];
    
//     // If the number is 9, set it back to 1 and increment the letter
//     if ($num === '9') {
//       $num = '1';
//       $letter = $letters[array_search($letter, $letters) + 1];
//     } else {
//       // Otherwise, just increment the number
//       $num = $numbers[array_search($num, $numbers) + 1];
//     }
    
//     // Concatenate the letter and number to generate the next number in the sequence
//     $number = $letter . $num;
    
//     // Do something with the generated number
//     echo $number . '<br>';
//   }
?>
    <!-- Car Name, From, To ,Pick , Drop, CPD, TotalDays, Total -->

		<?php
		include 'footer.php';
		?>
	
</body>
</html>