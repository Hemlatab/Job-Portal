<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<nav class="navbar">
		<a class="logo" href="index.php"><img src="./images/logo-jobportal.png"></a>
			<ul>
			<li><a href="contact.php">Contact</a></li>
			<li><a  href="login.php">Login</a></li>
			<li><a class="active" href="register.php">Register</a></li>
		</ul>
	</nav>
			
	<div class="container-contact">

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<br>

		<h1>Get in touch</h1>
<?php

$emailTo ="hemlata.bhundhoo@outloo.com";

	$subject="Hello";

	$body="Message area";

	$headers="From:hemlata.b@hotmail.co.uk";

	if(mail($emailTo,$subject,$body,$headers)){
	//returns 1 or 0 depending if its succesful

	echo '<br/><div class="alert-success">Email was sent successfully.</div>';

}else{

	echo "email not sent";
}

?>
		Email address<br><br>
		<input type="text" name="email" placeholder="Enter email" id="label">
		
		<br><br>

		<small style="color: grey;">We'll never share your email with anyone else.</small><br><br>

		Subject<br><br>
		<input type="text" name="subject" id="label" placeholder="Enter your subject">
		
		<br><br>

		What would you like to ask us?<br><br>
		<textarea rows="10" cols="60" id="textarea" name="message"></textarea>

		<br><br>

		<input type="button" name="submit-contact" id="submit-contact" value="Submit"><br>

	</form>

	</div>
		
    <br />

	</div>

	<div class="footer">
		<div class="social">
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
	
		<p> <small>Copyright &copy; <?php echo date('Y')?></small></p>

		</div>
	</div>

</body>
</html>