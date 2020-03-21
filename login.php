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
	
	<form action="" name="recruiter-registration">
	
		<div class="container-login">
			
			<h1>Login Page</h1>
			Email address<br><br>
			<input pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" type="email" name="email" id="label"><br><br>

			Password<br><br>
			<input type="password" name="password" id="label"><br><br>

			<input type="button" name="login-btn" value="Login" id="login-btn"> or <a class="register-login" href="register.php">Register</a><br>

		</div>
		
    <br />

	</div>

	</form>

<br>
<br>
<br>

	<div class="footer">
		<div class="social">
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
	
		<p> <small>Copyright &copy; <?php echo date('Y');?></small></p>

	</div>
	</div>
</body>
</html>