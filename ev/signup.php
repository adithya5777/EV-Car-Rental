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
        include 'header.php';
        ?>

        <section class="caption">
            <h1 style="text-align: center; font-size:xxx-large;"><span style="font-weight: 100;">Find the Best </span>CarForYou</h1>
        </section>
    </section><!--  end hero section  -->


    <section class="listings" style="display: flex">
        <div class="wrapper" style="margin: 0 auto;">

            <h1 style="text-align: center;">Signup Here</h1>
            <form method="post">
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
                        <td>Enter your Password:</td>
                        <td><input type="password" name="PASSWORD" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:right"><input type="submit" name="save" value="SUBMIT"></td>
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

                try {
                    $res = "SELECT EMAIL_ID FROM customer_details";
                    $qry = "INSERT INTO customer_details VALUES('$email','$fname','$mname','$lname','$dlno','$phone','$street','$city','$state','$zip','$pwd')";
                    $ress = $conn->query($res);
                    $result = $conn->query($qry);
                    $emails = $ress->fetch_assoc();
                } catch (mysqli_sql_exception $e) {

            ?>
                    <div class="flash-message">
                        <?php echo 'Registration Failed. The Email ID or the DL Number already exists. Try Again'; ?>
                    </div>
                <?php
                    exit();
                    // echo "Error: " . $e->getMessage();
                }

                if ($ress == TRUE) { ?>
                    <div class="flash-message">
                        <?php echo 'Sign Up Successful'; ?>
                    </div>
                <?php
                } else {
                ?>
                    <div class="flash-message">
                        <?php echo 'Registration Failed. Try Again'; ?>
                    </div>
            <?php
                }
            }

            ?>
            </ul>
        </div>
    </section> <!--  end listing section  -->

    <?php
    include 'footer.php';
    ?>

</body>

</html>