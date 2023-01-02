<?php
session_start();
// error_reporting("E-NOTICE");
?>
<html>
	<head>
		<style>
			.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  
  background-color: inherit;
  font-family: "lato-regular", Helvetica, Arial, sans-serif;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
		</style>
	</head>
<header>
	<div class="wrapper">
		<a href="index.php">
			<h1 class="logo">CarForYou</h1>
		</a>
		<a href="#" class="hamburger"></a>
		<nav>
			<?php
			// if(!($_SESSION['email']) && (!($_SESSION['pass']))){
			if (!isset($_SESSION['email']) || !isset($_SESSION['pass'])) {
				?>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="rentcars.php">Rent Cars</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="account.php">Login</a></li>
				</ul>

				<?php
			} else {
				include 'includes/config.php';
				$email = $_SESSION['email'];
				$user = "SELECT * FROM customer_details WHERE EMAIL_ID = '$email'";
				$rs = $conn->query($user);
				$rws = $rs->fetch_assoc();
				$name = $rws['FNAME'] . ' ' . $rws['MNAME'] . ' ' . $rws['LNAME'];
				?>
				<ul>
					<li><a href="index.php?id=<?php echo $_SESSION['email'] ?>">Home</a></li>
					<li><a href="rentcars.php?id=<?php echo $_SESSION['email'] ?>">Rent Cars</a></li>
					<li><a href="#">About Us</a></li>
					<!-- <li><a href="status.php?id=<?php echo $_SESSION['email'] ?>">View Status</a></li> -->
					<li><a href="#">Contact Us</a></li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">
								<?php echo 'Hi, '.$name; ?>
							</button>
							<div class="dropdown-content">
								<a href="status.php?id=<?php echo $_SESSION['email'] ?>">View Bookings</a>
								<a href="logout.php">Logout</a>
							</div>
						</div>
					</li>
				</ul>

				<?php
			}
			?>
		</nav>
	</div>
</header>
</html>