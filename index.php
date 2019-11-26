<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
	<link rel="icon" type="image/png" href="images/jobify-logo.png"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Marck Script' rel='stylesheet'>
</head>
<body>

	<nav>
	<!--<a href="index.php"><img src="images/logo-jobportal.png"></a>-->
		<ul id="navbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a  href="login.php">Login</a></li>
			<li><a class="active" href="register.php" id="register">Register</a></li>
		</ul>
	</nav>

	<div class="container" class="hero-image">

		<img id="image-home" src="images/image-home.jpg">

		<div class="hero-text">

			<h1 class="find-job">Find a job that you<i class="fa fa-heart" aria-hidden="true"></i> love </h1>

		<br />

		<div class="row" id="find-job">

			<table>
				<tr>
				<td><label for="text">what</label> <input type="text" id="text" name="what" placeholder=" e.g junior developer"></td>

				<td><label for="text">where</label> <input type="text" id="text" name="where" placeholder="e.g town or postcode"></td>
		
				<td><button type="button" id="search-job">Search jobs</button></td>
			</tr>
			</table>

			</div>
		</div>

	</div>

	<div class="container" id="company">

		<div class="company-text">

			<h1>Apply today for your next role</h1>

			<h3 class="leading-companies">with one of these leading companies</h3>

		<div class="row" id="companies">

			<div class="box-companies">

			<img src="images/hsbc.png" /> <br/>
			<hr>
				Jobs at <a href="#">HSBC</a>
		</div>

		<div class="box-companies">
			<img src="images/lloyds.png" /><br/>
			<hr>
				Jobs at <a href="#">Lloyds</a>
		</div>

		<div class="box-companies">
			<img src="images/tkmaxx.png" /><br/>
				<hr>
				Jobs at <a href="#">TkMaxx</a>
		</div>

		</div> 
	</div>
	</div> 
<br />

<div class="sector-row">
	
		<h1>Choose your sector</h1>

		<div class="main-container">


		</div>
</div>
	<br />

	<div class="container" id="table-row">

		<table>
			<tr>
				<th>Jobs</th>
				<th>Recruiters</th>
				<th>Courses</th>
				<th>About US</th>
			</tr>

			<tr>
				<td>Find a job</td>
				<td>CV Search</td>
				<td>Find course</td>
				<td>Work for us</td>
			
			</tr>

			<tr>
				<td>Popular jobs</td>
				<td>Advertise</td>
				<td>Free course</td>
				<td>Contact us</td>
			</tr>

		</table>
		
    <br />

	</div>

	<div class="footer">

		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>	
		<br/>

	<div class="terms">

		<a href="#"><small>PRIVACY</small></a>
		<a href="#"><small>COOKIES</small></a>
		<a href="#"><small>TERMS & CONDITIONS</small></a>

		<p> <small>Copyright &copy; 2017</small></p>

	</div>

	</div>

</body>
</html>