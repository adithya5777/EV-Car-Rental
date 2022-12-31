<?php
session_start();
// error_reporting("E-NOTICE");
?>
<header>
	<div class="wrapper">
		<h1 class="logo">CarForYou</h1>
		<a href="#" class="hamburger"></a>
		
		<nav>
			<?php

			// if(!($_SESSION['email']) && (!($_SESSION['pass']))){
			if (isset($_SESSION['email']) || isset($_SESSION['pass'])) {
			
			?>
				<ul>
					<li><a href="main.php">Home</a></li>
					<li><a href="editcars.php">Cars</a></li>
					<li><a href="carcat.php">Car Category</a></li>
					<li><a href="editloc.php">Location</a></li>
					<li><a href="showbill.php">Bills</a></li>
					<li><a href="showbook.php">Bookings</a></li>
				</ul>
				<a href="logout.php">Logout</a>
			<?php
			}
			?>
		</nav>
	</div>
</header>