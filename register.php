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
			<li><a class="register-btn" href="register.php" id="register" >Register</a></li>
		</ul>
	</nav>
	
	<form action="" name="recruiter-registration">
	
		<div class="container-login">
			
			<h1>Register</h1>
			Email address<br><br>
			<input pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" type="email" name="email" id="label"><br><br>

			Password<br><br>
			<input type="password" name="password" id="label"><br><br>

			Type of user<br><br>
			<select id="label">
				<option value="" disabled="label">Select account type</option>
				<option value="recruiter" id="label">Recruiter</option>
				<option value="jobseeker" id="label">Jobseeker</option>
			</select>
<br><br>
			<input type="button" class="register-btn" name="register-btn" value="Click here to Register"> <br>

		</div>
		
    <br />

	</div>

	</form>

	<div class="footer">
	<div class="social">
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
	
		<p> <small>Copyright &copy; <?php echo date ('Y')?></small></p>

	</div>
	</div>


</body>
</html>