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
						if (!isset($_SESSION['email']) || !isset($_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="rentcars.php">Rent Cars</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<a href="account.php">Client Login</a>
					<a href="login.php">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php?id=<?php echo $_SESSION['email'] ?>">Home</a></li>
								<li><a href="rentcars.php?id=<?php echo $_SESSION['email'] ?>">Rent Cars</a></li>
								<li><a href="status.php?id=<?php echo $_SESSION['email'] ?>">View Status</a></li>
								<li><a href="contact.php??id=<?php echo $_SESSION['email'] ?>">Contact</a></li>
								<!-- <li><a href="message_admin.php">Message Admin</a></li> -->
							</ul>
					<a href="logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>
