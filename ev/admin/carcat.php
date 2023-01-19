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
        .flash-message {
            padding: 20px;
            background-color: #f44336;
            color: white;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .tds{
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

        $car = "SELECT * FROM car_category";
        $car1 = $conn->query($car);
        ?>
        <div class="cal">
            <table class="invc">
                <tr>
                    <td>
                        <h3>CAR CATEGORY</h3>
                    </td>
                    <td>
                        <h3>LUGGAGE</h3>
                    </td>
                    <td>
                        <h3>SEATING CAPACITY</h3>
                    </td>
                </tr>

                <?php
                while ($carw1 = $car1->fetch_assoc()) {
                ?>

                    <tr>
                        <td><?php echo $carw1['CATEGORY_NAME'] ?></td>
                        <td><?php echo $carw1['NO_OF_LUGGAGE'] ?></td>
                        <td><?php echo $carw1['NO_OF_PERSON'] ?></td>
                    </tr>

                <?php }
                $cat = "SELECT * FROM car_category";
                $cat1 = $conn->query($cat);
                ?>
            </table>
        </div>
        <form method="post">
            <table class="inv">
                <tr>
                    <p style="height:30px;color: #ededed; font-family: 'Quicksand'; margin-top: 10px; font-size: 20px;">SELECT CAR CATEGORY TO BE DELETED:</p>
                </tr>

                <tr>
                <tr>
                    <select name="CATEGORY_DEL" required style="margin-right: 10px;">
                        <option> Select Car Category </option>
                        <?php
                        while ($catw1 = $cat1->fetch_assoc()) { ?>
                            <option style="color: #171717;"><?php echo $catw1['CATEGORY_NAME'] ?></option>
                        <?php }
                        ?>
                    </select>
                    <input type="submit" name='cat_delete' value="DELETE">
                </tr>
                </tr><br>
                <tr>
                    <input type="submit" name='add' value="ADD NEW CAR CATEGORY">
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['cat_delete'])) {
            $delete_id = $_POST['CATEGORY_DEL'];

            $del = "DELETE FROM car_category WHERE CATEGORY_NAME = '$delete_id'";
            $del1 = $conn->query($del);
        }
        if (isset($_POST['add'])) {

        ?>
            <div class="wrapper" style="display: flex; margin-top: 50px;">
                <form method="post" onsubmit="func()" style="margin: 0 auto;">
                    <table>
                        <tr>
                            <td  class="tds">CATEGORY NAME:</td>
                            <td><input type="test" name="CAT_NAME" required></td>
                        </tr>
                        <tr>
                            <td class="tds">LUGGAGE CAPACITY:</td>
                            <td><input type="text" name="LUGGAGE" required></td>
                        </tr>
                        <tr>
                            <td class="tds">SEATING CAPACITY</td>
                            <td><input type="text" name="SEAT" required></td>
                        </tr>
                        <tr>
                            <td class="tds"><input type="submit" name="save" value="SUBMIT"></td>
                        </tr>
                    </table>
                </form>
            </div><?php
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

        $catname = $_POST['CAT_NAME'];
        $luggage = $_POST['LUGGAGE'];
        $seat = $_POST['SEAT'];

        if ($luggage != 0 or $seat != 0) {
            $add = "INSERT INTO car_category VALUES ('$catname','$luggage','$seat')";
            $add1 = $conn->query($add);
        }
        ?>
    }
</script>

</html>