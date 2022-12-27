<!DOCTYPE html>
<html lang="en">

<head>
    <title>CarForYou | Rent Cars</title>
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
        ?>

        <section class="caption">
            <h1 style="text-align: center; font-size:xxx-large;"><span style="font-weight: 100;">Find the Best </span>CarForYou</h1>
        </section>
    </section><!--  end hero section  -->


    <section class="listings">
        <div class="wrapper">
            <ul class="properties_list">
                <?php
                include 'includes/config.php';
                $sel = "SELECT * FROM car WHERE AVAILABILITY_FLAG = 'Y'";
                $sel1 = "SELECT COST_PER_DAY FROM car";
                $rs = $conn->query($sel);
                $rs1 = $conn->query($sel1);
                while ($rws = $rs->fetch_assoc() and $rws1 = $rs1->fetch_assoc()) {
                ?>
                    <li>
                        <a href="book_car.php?id=<?php echo $rws['REGISTRATION_NUMBER'] ?>">
                            <img class="thumb" src="cars/<?php echo $rws['image']; ?>" width="350" height="200">
                        </a>
                        <span class="price"><?php echo '₹' . $rws1['COST_PER_DAY']; ?></span>
                        <div class="property_details">
                            <h1 style="font-size: 40px;">
                                <a href="book_car.php?id=<?php echo $rws['REGISTRATION_NUMBER'] ?>"><?php echo '' . $rws['MAKE']; ?></a>
                            </h1>
                            <h2 style="font-size: 15px;"><span class="property_size"><?php echo $rws['MODEL_NAME']; ?></span></h2>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </section> <!--  end listing section  -->

    <footer>
        <div class="wrapper footer">
            <ul>
                <li class="links">
                    <ul>
                        <li>OUR COMPANY</li>
                        <li><a href="#">About Us</a></li>
                        <!-- <li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li> -->
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>

                <!-- <li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li> -->

                <li class="links">
                    <ul>
                        <li>OUR CAR TYPES</li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Sedan</a></li>
                        <li><a href="#">SUV</a></li>
                        <li><a href="#">Hatchback</a></li>
                    </ul>
                </li>

                <li class="about">
                    <p>EV Car Rental is an organized company that rents cars and other vehicles to clients at lower costs. We we are here to serve every Kenyan Citizen</p>
                    <ul>
                        <li><a href="http://facebook.com/sonko" class="facebook" target="_blank"></a></li>
                        <li><a href="http://twitter.com/sonko" class="twitter" target="_blank"></a></li>
                        <li><a href="http://plus.google.com/+sonko" class="google" target="_blank"></a></li>
                        <li><a href="#" class="skype"></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="copyrights wrapper">
            <!-- Copyright &copy; <?php echo date("Y") ?> All Rights Reserved | Designed by Felix Kiamba. -->
        </div>
    </footer><!--  end footer  -->

</body>

</html>