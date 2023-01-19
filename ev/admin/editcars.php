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
        include 'header.php';
        include 'config.php';

        $car = "SELECT * FROM car";
        $car1 = $conn->query($car);
        ?>
        <div class="cal" style="margin-top: 100px;">
            <table class="invc">
                <tr>
                    <td>
                        <h3>CAR ID</h3>
                    </td>
                    <td>
                        <h3>REGISTRATION NUMBER</h3>
                    </td>
                    <td>
                        <h3>MODEL NAME</h3>
                    </td>
                    <td>
                        <h3>MAKE</h3>
                    </td>
                    <td>
                        <h3>MODEL YEAR</h3>
                    </td>
                    <td>
                        <h3>RANGE</h3>
                    </td>
                    <td>
                        <h3>CAR CATEGORY</h3>
                    </td>
                    <td>
                        <h3>COST PER DAY</h3>
                    </td>
                    <td>
                        <h3>AVAILABILITY FLAG</h3>
                    </td>
                    <td>
                        <h3>CAR DESCRIPTION</h3>
                    </td>
                    <td>
                        <h3>IMAGE</h3>
                    </td>
                </tr>

                <?php
                while ($carw1 = $car1->fetch_assoc()) { ?>

                    <tr>
                        <td><?php echo $carw1['car_id'] ?></td>
                        <td><?php echo $carw1['REGISTRATION_NUMBER'] ?></td>
                        <td><?php echo $carw1['MODEL_NAME'] ?></td>
                        <td><?php echo $carw1['MAKE'] ?></td>
                        <td><?php echo $carw1['MODEL_YEAR'] ?></td>
                        <td><?php echo $carw1['CAR_RANGE'] ?></td>
                        <td><?php echo $carw1['CAR_CATEGORY_NAME'] ?></td>
                        <td><?php echo $carw1['COST_PER_DAY'] ?></td>
                        <td><?php echo $carw1['AVAILABILITY_FLAG'] ?></td>
                        <td><?php echo $carw1['CAR_DESCRIPTION'] ?></td>
                        <td><?php echo $carw1['image'] ?></td>
                    </tr>

                <?php }
                ?>
            </table>
        </div>
        <form method="post">
            <table class="inv">
                <tr>
                    <label style="font-family:'Quicksand'; color: #ededed; font-size: 20px; " for="delete">Enter the Car ID you want to delete: </label>
                    <br>
                    <input type="text" id="delete" placeholder="Car ID#" name="delete_id" style="margin-right: 10px;">
                    <input type="submit" name='delete' value="DELETE">
                </tr><br>
                <tr>
                    <input type="submit" name='add' value="ADD NEW CAR">
                </tr>
            </table>
        </form>

        <?php

        if (isset($_POST['delete'])) {
            $delete_id = $_POST['delete_id'];

            $del = "DELETE FROM car WHERE car_id = '$delete_id'";
            $del1 = $conn->query($del);
        }
        if (isset($_POST['add'])) {
            $cat = "SELECT * FROM car_category";
            $cat1 = $conn->query($cat);
        ?>
            <div class="wrapper" style="display: flex; margin-top: 50px;">
                <form method="post" onsubmit="func()" style="margin: 0 auto;">
                    <table>
                        <tr>
                            <td class="tds">CAR ID:</td>
                            <td><input type="test" name="CAR_ID" required></td>
                        </tr>
                        <tr>
                            <td class="tds">REGISTRATION NUMBER:</td>
                            <td><input type="text" name="REGNUM" required></td>
                        </tr>
                        <tr>
                            <td class="tds">MODEL NAME:</td>
                            <td><input type="text" name="MNAME" required></td>
                        </tr>
                        <tr>
                            <td class="tds">MAKE:</td>
                            <td><input type="text" name="MAKE" required></td>
                        </tr>
                        <tr>
                            <td class="tds">MODEL YEAR:</td>
                            <td><input type="text" name="MYEAR" required></td>
                        </tr>
                        <tr>
                            <td class="tds">CAR RANGE:</td>
                            <td><input type="text" name="CRANGE" required></td>
                        </tr>
                        <tr>
                            <td class="tds">CAR CATEGORY:</td>
                            <td>
                                <select name="CATEGORY" required>
                                    <option> Select Car Category </option>
                                    <?php
                                    while ($catw1 = $cat1->fetch_assoc()) { ?>
                                        <option style="color: #171717;"><?php echo $catw1['CATEGORY_NAME'] ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="tds">COST PER DAY:</td>
                            <td><input type="text" name="CPD" required></td>
                        </tr>
                        <tr>
                            <td class="tds">AVAILABILITY_FLAG:</td>
                            <td><input type="text" name="AVAILFLAG" required></td>
                        </tr>
                        <tr>
                            <td class="tds">CAR DESCRIPTION:</td>
                            <td><input type="textarea" name="CARDESC" required></td>
                        </tr>
                        <tr>
                            <td class="tds">IMAGE:</td>
                            <td><input type="text" name="IMAGE" required></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="save" value="SUBMIT"></td>
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

        $carid = $_POST['CAR_ID'];
        $regnum = $_POST['REGNUM'];
        $modelname = $_POST['MNAME'];
        $make = $_POST['MAKE'];
        $modelyear = $_POST['MYEAR'];
        $range = $_POST['CRANGE'];
        $category = $_POST['CATEGORY'];
        $cpd = $_POST['CPD'];
        $flag = $_POST['AVAILFLAG'];
        $cardesc = $_POST['CARDESC'];
        $image = $_POST['IMAGE'];

        $add = "INSERT INTO car VALUES ('$carid','$regnum','$modelname','$make','$modelyear','$range','$category','$cpd','$flag','$cardesc','$image')";
        $add1 = $conn->query($add);
        ?>
    }
</script>

</html>