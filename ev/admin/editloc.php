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
        .tds {
            color: #ededed;
            font-family: 'Quicksand';
        }
    </style>
</head>

<body>

    <section class="">
        <?php
        include 'config.php';
        include 'header.php';

        $loc = "SELECT * FROM location_details";
        $loc1 = $conn->query($loc);
        ?>
        <div class="cal">
            <table class="invc">
                <tr>
                    <td>
                        <h3>LOCATION ID</h3>
                    </td>
                    <td>
                        <h3>LOCATION NAME</h3>
                    </td>
                    <td>
                        <h3>STREET</h3>
                    </td>
                    <td>
                        <h3>CITY</h3>
                    </td>
                    <td>
                        <h3>STATE NAME</h3>
                    </td>
                    <td>
                        <h3>ZIPCODE</h3>
                    </td>
                </tr>

                <?php
                while ($locw1 = $loc1->fetch_assoc()) {
                ?>

                    <tr>
                        <td><?php echo $locw1['LOCATION_ID'] ?></td>
                        <td><?php echo $locw1['LOCATION_NAME'] ?></td>
                        <td><?php echo $locw1['STREET'] ?></td>
                        <td><?php echo $locw1['CITY'] ?></td>
                        <td><?php echo $locw1['STATE_NAME'] ?></td>
                        <td><?php echo $locw1['ZIPCODE'] ?></td>
                    </tr>

                <?php }
                $loct = "SELECT * FROM location_details";
                $loct1 = $conn->query($loct);
                ?>
            </table>
        </div>
        <form method="post">
            <table class="inv">
                <tr>
                <tr>
                    <p style="height:30px;color: #ededed; font-family: 'Quicksand'; margin-top: 10px; font-size: 20px;">SELECT LOCATION NAME TO BE DELETED:</p>
                </tr>
                <tr>

                    <select name="LOCATION_DEL" required style="margin-right: 10px;">
                        <option> Select Location:</option>
                        <?php
                        while ($loctw1 = $loct1->fetch_assoc()) { ?>
                            <option style="color: #171717;"><?php echo $loctw1['LOCATION_NAME'] ?></option>
                        <?php }
                        ?>
                    </select>

                </tr>
                <tr>
                    <input type="submit" name='loc_delete' value="DELETE">
                </tr>
                </tr><br>
                <tr>
                    <input type="submit" name='add' value="ADD NEW LOCATION">
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['loc_delete'])) {
            $loc_id = $_POST['LOCATION_DEL'];
            $conn->query("SET foreign_key_checks = 0");
            $del = "DELETE FROM location_details WHERE LOCATION_NAME = '$loc_id'";
            $del1 = $conn->query($del);
            $conn->query("SET foreign_key_checks = 1");
           
        }
        if (isset($_POST['add'])) {

            ?>
            <div class="wrapper" style="display: flex; margin-top: 50px;">
                <form method="post" onsubmit="func()" style="margin: 0 auto;">
                    <table>
                        <tr>
                            <td class="tds">LOCATION ID:</td>
                            <td><input type="text" name="LOCID" required></td>
                        </tr>
                        <tr>
                            <td class="tds">LOCATION NAME:</td>
                            <td><input type="text" name="LOCNAME" required></td>
                        </tr>
                        <tr>
                            <td class="tds">STREET:</td>
                            <td><input type="text" name="STREET" required></td>
                        </tr>
                        <tr>
                            <td class="tds">CITY:</td>
                            <td><input type="text" name="CITY" required></td>
                        </tr>
                        <tr>
                            <td class="tds">STATE:</td>
                            <td><input type="text" name="STATE" required></td>
                        </tr>
                        <tr>
                            <td class="tds">ZIPCODE:</td>
                            <td><input type="text" name="ZIPCODE" required></td>
                        </tr>
                        <tr>
                            <!-- <td class="tds"><input type="submit" name="save" value="SUBMIT"></td> -->
                            <td colspan="2" style="text-align:center">
                                <input class="but" type="submit" name="save" value="SUBMIT" style="width: 100px; color: #ededed; background: #49c5b6;">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        <?php
        }
        ?>

    </section><!--  end search section  -->

    <?php
    // include 'footer.php';
    ?><!--  end footer  -->

</body>
<script>
    function func() {
        <?php

        $locid = $_POST['LOCID'];
        $locname = $_POST['LOCNAME'];
        $street = $_POST['STREET'];
        $city = $_POST['CITY'];
        $state = $_POST['STATE'];
        $zipcode = $_POST['ZIPCODE'];


        if ($zipcode != 0) {
            $add = "INSERT INTO location_details VALUES ('$locid','$locname','$street','$city','$state','$zipcode')";
            $add1 = $conn->query($add);
        }
        ?>
    }
</script>

</html>