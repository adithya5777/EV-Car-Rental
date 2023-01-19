<?php include 'includes/config.php'; ?>
<section class="wrapper" id="contact" style="max-width: 1350px;">
    <br><br><br><br><br><br>
    <h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000); margin-top: 150px;">CONTACT US</span></h1>
    <div class="cntform">
        <div>
            <!-- <h1><span style="font-size:xxx-large; font-weight: 100; color: #ededed; filter: drop-shadow(0px 0px 1px #000); margin-top: 150px;">CONTACT US</span></h1> -->
            <h1 class="logo" style="color: #ededed;"><img id="logoimg" src="/ev/assets/favicon_io/android-chrome-512x512.png" alt="logo" width="37" height="37"> CarForYou</h1>
            <address>
                Campus Rd, University Of Mysore Campus,<br>
                Mysuru, Karnataka, India 570006<br>
                Phone: <a style="color: blue; " href='tel:+919876543215'>+919876543215</a>
            </address>
        </div>
        <div style="backdrop-filter: blur(2px);padding-top: 10px; background: rgba(186, 186, 186, 0.502); width: 600px; height: 310px; border-radius: 20px;">
            <form method="POST" id="contact-form" onsubmit="func(); alert('Thank you for your feedback!');">
                <div>
                    <input class="" type="text" name="Name" id="Name" placeholder="Name" required style="width: 550px;">
                </div>
                <div>
                    <input class="" type="email" name="Email" id="Email" placeholder="Email" required style="width: 550px;">
                </div>
                <div>
                    <textarea class="" name="Message" id="Message" placeholder="Message" required style="width: 550px; height: 150px;"></textarea>
                </div>
                <div>
                    <input class="but" type="submit" name="submit" value="Submit" style="width: 100px; color: #ededed; background: #49c5b6; margin-top: 12.5px;">
                </div>
            </form>
            <?php
					if (isset($_POST['submit1'])) {
						

						$email = $_POST['Email'];
						$name = $_POST['Name'];
						$mess = $_POST['Message'];

						$in = "INSERT INTO contact (`Name`,Email,`Message`) VALUES ('$email','$name','$mess')";
						$ins = $conn->query($in);
					}
			?>
        </div>
    </div>

</section>