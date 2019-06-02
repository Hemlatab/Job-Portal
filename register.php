<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li style="float: right, background-color:orange"><a  href="login.php">Login</a></li>
			<li style="float: right"><a class="active" href="register.php" id="register" >Register</a></li>
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
			<input type="button" name="register-btn" value="Register" id="register-btn"> <br>

		</div>
		
    <br />

	</div>

	</form>

	<div class="footer">
			
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
	
		<p> <small>Copyright &copy; 2017</small></p>


	</div>


</body>
</html>