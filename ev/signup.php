<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CarForYou | SignUp</title>
    <meta charset="utf-8">
    <meta name="author" content="pixelhint.com">
    <meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="shortcut icon" href="/ev/assets/favicon_io/favicon.ico" type="image/x-icon">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
        }

        td {
            color: #ededed;
            font-family: 'Quicksand';
        }
    </style>
</head>

<body class="hide">

    <section class="">
        <?php
        // include 'header.php';
        ?>

        <!-- <section class="caption" style="margin-top:100px">
            <br>
            <h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed;">Find the Best</span><span style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"> CarForYou</span></h1>
            <!-- <h1 id="motto" style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);"><span style="font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000);">Find the Best </span>CarForYou</h1> -->
    </section> -->
    </section><!--  end hero section  -->


    <section class="wrapper" id="contact" style="max-width: 1350px;">
        <!-- <br><br><br><br><br><br> -->
        <div class="wrapper cntform" style="margin-top: 3%">
            <div>
                <!-- <h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000); margin-top: 150px;">CONTACT US</span></h1> -->
                <h1 class="logo" style="color: #ededed; font-size: 40px;"><img id="logoimg"
                        src="/ev/assets/favicon_io/android-chrome-512x512.png" alt="logo" width="37" height="37">
                    CarForYou</h1>
                <address>
                    Campus Rd, University Of Mysore Campus,<br>
                    Mysuru, Karnataka, India 570006<br>
                    Phone: <a style="color: blue; " href='tel:+919876543215'>+919876543215</a>
                </address>
            </div>
            <section class="listings" style="display: flex; padding:0;">
                <div class="wrapper"
                    style=" display:flex; flex-direction:column; margin: 0 auto; backdrop-filter: blur(2px); background: rgba(186, 186, 186, 0.502); width: 420px; height: 630px; border-radius: 20px;">

                    <h1><span
                            style="text-align: center; font-size:xxx-large; color: #49c5b6; filter: drop-shadow(0px 0px 15px #49C5B6);">
                            Sign Up</span></h1>
                    <form method="post" style="margin: 0 auto;">
                        <table>
                            <tr>
                                <td>E-mail:</td>
                                <td><input type="email" name="EMAIL_ID" required></td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="FNAME" required></td>
                            </tr>
                            <tr>
                                <td>Middle Name:</td>
                                <td><input type="text" name="MNAME"></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="LNAME" required></td>
                            </tr>
                            <tr>
                                <td>DL Number:</td>
                                <td><input type="text" name="DL_NUMBER" required></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="tel" name="PHONE_NUMBER" required></td>
                            </tr>
                            <tr>
                                <td>Street:</td>
                                <td><input type="text" name="STREET" required></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input type="text" name="CITY" required></td>
                            </tr>
                            <tr>
                                <td>State:</td>
                                <td><input type="text" name="STATE_NAME" required></td>
                            </tr>
                            <tr>
                                <td>ZIP Code:</td>
                                <td><input type="text" name="ZIPCODE" required></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="PASSWORD" required></td>
                            </tr>
                            <tr>
                                <td>CPassword:</td>
                                <td><input type="password" name="CPASSWORD" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center">
                                    <input class="but" type="submit" name="save" value="SUBMIT"
                                        style="width: 100px; color: #ededed; background: #49c5b6;">
                                </td>
                            </tr>
                        </table>
                    </form>

                    <?php
                    if (isset($_POST['save'])) {
                        include 'includes/config.php';
                        $email = $_POST['EMAIL_ID'];
                        $fname = $_POST['FNAME'];
                        $mname = $_POST['MNAME'];
                        $lname = $_POST['LNAME'];
                        $dlno = $_POST['DL_NUMBER'];
                        $phone = $_POST['PHONE_NUMBER'];
                        $street = $_POST['STREET'];
                        $city = $_POST['CITY'];
                        $state = $_POST['STATE_NAME'];
                        $zip = $_POST['ZIPCODE'];
                        $pwd = $_POST['PASSWORD'];
                        $cpwd = $_POST['CPASSWORD'];

                        if ($pwd != $cpwd) {
                            ?>
                            <div class="flash-message" style="margin: 40px auto; background: red; width: 250px;">
                                <?php
                                echo "Password doesn't match. Try Again";
                                exit();
                                ?>
                            </div>
                            <?php
                        }
                        try {
                            $res = "SELECT EMAIL_ID FROM customer_details";
                            $qry = "INSERT INTO customer_details VALUES('$email','$fname','$mname','$lname','$dlno','$phone','$street','$city','$state','$zip','$pwd')";
                            $ress = $conn->query($res);
                            $result = $conn->query($qry);
                            $emails = $ress->fetch_assoc();
                        } catch (mysqli_sql_exception $e) {

                            ?>
                            <div class="flash-message" style="margin: 40px auto; background: red; width: 250px;">
                                <?php echo 'Registration Failed. The Email ID or the DL Number already exists. Try Again'; ?>
                            </div>
                            <?php
                            exit();
                            // echo "Error: " . $e->getMessage();
                        }

                        if ($ress == TRUE) { ?>
                            <div class="flash-message" style="margin: 40px auto; width: 250px;">
                                <?php echo 'Sign Up Successful';
                                // header('location: account.php');
                                ?>
                            </div>
                            <div class="flash-message" style="margin: 5px auto; width: 250px;">
                                <a href="account.php">PROCEED TO LOGIN</a>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="flash-message" style="margin: 40px auto; background: red; width: 250px;">
                                <?php echo 'Registration Failed. Try Again'; ?>
                            </div>
                            <?php
                        }
                    }

                    ?>
                    </ul>
                </div>
            </section>


    </section>
    </div>

    </section>
    <!--  end listing section  -->

    <?php

    // include 'footer.php';
    ?>

</body>

</html>