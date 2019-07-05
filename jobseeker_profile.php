<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Days One' rel='stylesheet'>
</head>
<body>

	<nav class="navbar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a  href="logout.php">Logout</a></li>
			<li><a class="active" href="#">Dashboard</a></li>
		</ul>
	</nav>
			
	<div class="container-profile">

		<div class="inner-profile">
			<br><br>
			
			<div class="img-circular">

				<span class="image-upload">

    			<input type="file" name="image_src" id="image_src">
    			</span>
			</div>
   					
			</div>

			<div class="details">

				<h3> Hemlata Bhundhoo</h3>

				<h4>Junior Developer</h4>

				<hr id="hr-profile">

				<i class="fa fa-map-marker" aria-hidden="true"></i> London 

				<i class="fa fa-phone" aria-hidden="true"></i> 441234567898  

				<i class="fa fa-envelope-o" aria-hidden="true"></i> hemlata@gmail.com
		</div>

		</div>

	</div>
	
	<br><br><br><br>

	<div class="outer-container">

			<div class="left-container">

				<i class="fa fa-file-text-o" aria-hidden="true"></i><span> CV</span>
				<hr>
				<h3 class="manage-cv">Manage your CV</h3>

				<p>Upload a new CV, or use our CV builder to build one for you.</p>
				<button id="upload-cv">Upload CV</button>
				
			</div>

		<div class="right-container">

			<span> CV Visibility <i class="fa fa-binoculars" aria-hidden="true"></i> </span>
			<hr>
			<p>Let recruiters know you are looking for job</p>
		</div>

	</div>

		<div class="outer-container">

			<div class="left-container" id="cover-letter">

				<i class="fa fa-file-text-o" aria-hidden="true"></i><span> Cover letter</span>
				<hr>
				<textarea cols="70" rows="20" id="text-letter">
					
				</textarea>
				<br>
				<button id="edit-letter">Edit letter</button>
			
			</div>

		<div class="right-container">

			<i class="fa fa-spinner" aria-hidden="true"></i><span> Recommended jobs</span>
			<hr>
			<a href="#">junior php</a><br>
			<a href="#">junior php</a><br>
			<a href="#">junior php</a><br>
			<a href="#">junior php</a><br>
			<a href="#">junior php</a><br>
			<a href="#">junior php</a><br>
		</div>

	</div>

	<div class="footer">
		<div class="social">
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
	
		<p> <small>Copyright &copy; <?php echo date('Y');?></small></p>

	</div>

</body>
</html>