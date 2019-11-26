
<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<nav class="navbar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a  href="login.php">Login</a></li>
			<li><a class="active" href="register.php">Register</a></li>
		</ul>
	</nav>
	<?php echo date("h:i:sa");?>
	
<<<<<<< HEAD
	<h3 class="hello-admin">Hello admin!</h3>
=======
	<h3>Hello admin!</h3>
>>>>>>> 92ce883d5851338645d04df69f7e2697077c327b
	
	<div class="wrapper_admin">

		<div class="section_add">
		

			<h3 class="post-job-title">POST JOB</h3>

			<hr>

		<form method="post">

		Job title<br>
		<input type="text" name="job_title" id="post_txt" placeholder="e.g php developer"><br><br>

		Description<br>
		<textarea rows="7" cols="55" name="job_desc" id="txt_desc">
			
		</textarea><br><br>

		Company<br>
		<input type="text" name="company" id="post_txt"><br><br>

		Job Category<br>
		<input type="text" name="job_cat" id="post_txt"><br><br>

		Location<br>
		<input type="text" name="location" id="post_txt"><br><br>

		Hours<br>
		<input type="number" name="hours" id="post_txt"><br><br>

		Salary<br>
		<input type="number" name="salary" id="post_txt" placeholder="&pound;"><br><br>

		Experience required<br>
		<input type="text" name="experience" id="post_txt"><br><br>

		<button id="post_job">Post Job</button>

	</div>

	<div class="add_categories">

		<h3>Job categories</h3>
		
		<a href="#">software development</a>
		<hr>
		<a href="#">marketing</a>
		<hr>
		<a href="#">ios</a>
		<hr>
		<a href="#">android</a>
		<hr>
		<a href="#">graphic design</a>
		<hr>
		<a href="#">seo</a>
		<hr>

</div>

	</div>
</form>
	<div class="footer">
		<div class="social">
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
	

		<p> <small>Copyright &copy; 2017</small></p>

		</div>
	</div>

</body>
</html>