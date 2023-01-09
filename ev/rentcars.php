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
    <link rel="shortcut icon" href="/ev/assets/favicon_io/favicon.ico" type="image/x-icon">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body class="hide">

    <section class="">
        <?php
        include 'header.php';
        ?>

<section class="caption" style="margin-top:100px">

				<h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best</span><span style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"> CarForYou</span></h1>
				<!-- <h1 id="motto" style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"><span style="font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best </span>CarForYou</h1> -->
			</section>
    </section><!--  end hero section  -->


    <section class="listings">
        <div class="wrapper" style="max-width: 1250px;;">
            <ul class="properties_list">
                <?php
                include 'includes/config.php';
                $check = "DELETE FROM booking_details WHERE BOOKING_ID NOT IN (SELECT BOOKING_ID FROM billing_details)";
                $check1 = $conn->query($check);

                $sel = "SELECT * FROM car WHERE AVAILABILITY_FLAG = 'Y'";
                $sel1 = "SELECT COST_PER_DAY FROM car";
                $rs = $conn->query($sel);
                $rs1 = $conn->query($sel1);
                while ($rws = $rs->fetch_assoc() and $rws1 = $rs1->fetch_assoc()) {
                ?>

                    <li>
                        <a href="book_car.php?id=<?php echo $rws['REGISTRATION_NUMBER'] ?>">
                            <img class="thumb carimg" src="cars/<?php echo $rws['image']; ?>" width="450" height="225">
                        </a>
                        <div class="property_details">
                            <h1 class="car-make" style="font-size: 40px;">
                                <a href="book_car.php?id=<?php echo $rws['REGISTRATION_NUMBER'] ?>">
                                    <?php echo '' . $rws['MAKE']; ?>
                                </a>
                            </h1>
                            <h2 style="font-size: 15px;"><span class="property_size">
                                    <?php echo $rws['MODEL_NAME']; ?>
                                </span></h2>
                        </div>
                    </li>

                <?php
                }
                ?>
            </ul>
        </div>
    </section> <!--  end listing section  -->

    <?php
    include 'includes/about.php';
    include 'footer.php';
    ?>

</body>

</html>