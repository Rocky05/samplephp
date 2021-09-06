<!DOCTYPE html>
<html lang="en">

<head>
<title>Contact Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<div class="container-contact100">
<div class="wrap-contact100">
<form class="contact100-form " method="post">
<span class="contact100-form-title">
Send Us A Message
</span>
<span class="txt3"><?php if(isset($_POST['first-name'])){ echo $_POST['first-name'].' Thanks for Contacting,Our Team Contact Soon...!'; } ?></span>
<label class="label-input100" for="first-name">Tell us your name *</label>
<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
<input id="first-name" class="input100" type="text" name="first-name" required placeholder="First name">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
<input class="input100" type="text" name="last-name" placeholder="Last name">
<span class="focus-input100"></span>
</div>
<label class="label-input100" for="email">Enter your email *</label>
<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<input id="email" class="input100" type="email" name="email"  required placeholder="Eg. example@email.com">
<span class="focus-input100"></span>
</div>
<label class="label-input100" for="phone">Enter phone number</label>
<div class="wrap-input100">
<input id="phone" class="input100" type="text" name="phone" required placeholder="Eg. +1 800 000000">
<span class="focus-input100"></span>
</div>
<label class="label-input100" for="message">Message *</label>
<div class="wrap-input100 validate-input" data-validate="Message is required">
<textarea id="message" class="input100" name="message" required placeholder="Write us a message"></textarea>
<span class="focus-input100"></span>
</div>
<div class="container-contact100-form-btn">
<input type="submit" class="contact100-form-btn" name="save_submit" value="Send Message"/>
</div>
</form>
<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
<div class="flex-w size1 p-b-47">
<div class="txt1 p-r-25">
<span class="lnr lnr-map-marker"></span>
</div>
<div class="flex-col size2">
<span class="txt1 p-b-20">
Address
</span>
<span class="txt2">
Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
</span>
</div>
</div>
<div class="dis-flex size1 p-b-47">
<div class="txt1 p-r-25">
<span class="lnr lnr-phone-handset"></span>
</div>
<div class="flex-col size2">
<span class="txt1 p-b-20">
Lets Talk
</span>
<span class="txt3">
+1 800 1236879
</span>
</div>
</div>
<div class="dis-flex size1 p-b-47">
<div class="txt1 p-r-25">
<span class="lnr lnr-envelope"></span>
</div>
<div class="flex-col size2">
<span class="txt1 p-b-20">
General Support
</span>
<span class="txt3">
support@gmail.com
</span>
</div>
</div>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>


<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

</body>

<!-- Mirrored from colorlib.com/etc/cf/ContactFrom_v17/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Nov 2020 08:09:02 GMT -->
</html>
<?php
if(isset($_POST['save_submit']))
{ //echo '<script>alert("check");</script>';
	echo $msg="Thanks for Contacting,Our Team Contact Soon...";
	//echo "<span class='txt3'>" . $msg . "</span>";
}
?>