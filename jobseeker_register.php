<?php 

require_once "includes/jobseeker_form_validation.php";

?>

<!DOCTYPE html>
<html>
<head>
<style>
	.error{
		color: red;
	}
</style>
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #f5f7fa;">

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li style="float: right, background-color:orange"><a  href="login.php">Login</a></li>
			<li style="float: right"><a class="active" href="register.php">Register CV</a></li>
		</ul>
	</nav>
		
		<h1>Jobseeker Registration Page</h1>
    <br />

    <div class="container" id="jobseeker_page">
    	
    	<div class="wrapper">
    	
    		<h1 class="join-jobportal">Join Job Portal</h1>

    		<p><hr id="hr"> Your account <hr id="hr"></p>

    		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    			Email <br>
    			<input type="text" name="email" id="label">
				<span class="error">* <?php echo $email;?></span>
    			<br><br>

    			Password <br>
    			<input type="password" name="password" id="label">
 				<span class="error">* <?php echo $password;?></span>
    			<br><br>

    			Firstname <br>
    			<input type="text" name="fname" id="label">
    			<span class="error">* <?php echo $fname;?></span>
    			<br><br>

    			Lastname <br>
    			<input type="text" name="lname" id="label">
    			<span class="error">* <?php echo $lname;?></span>
    			<br><br>

    			Mobile number<br>
    			<input type="number" name="mobile" id="label">
    			<span class="error">* <?php echo $mobile;?></span>
    			<br><br>

    			Preferred Location<br>
    			<input type="text" name="location" id="label">
    			<span class="error">* <?php echo $location;?></span>
    			<br><br>

    			Annual Salary<br>&pound;<input type="number" name="salary" id="label">
    			<span class="error">* <?php echo $salary;?></span>
    			<br><br>

    			Industry<br>
    			<select name="industry" id="label">
    				<option selected="" disabled id="label">Choose your industry</option>
    				<option value="technology" id="label" name="technology">Technology</option>
    				<option value="engineering" id="label" name="engineering">Engineering</option>
    				<option value="health" id="label" name="health">Health</option>
    				<option value="sales" id="label" name="sales">Sales</option>
    				<option value="automation" id="label" name="automation">Automation</option>
    			</select>
    			<span class="error">* <?php echo $industry;?></span>
    			<br><br>

    			Qualification<br>
    			<input type="text" name="qualification" id="label" placeholder="e.g Certification, Diploma, Degree, Masters">
    			<span class="error">* <?php echo $qualification;?></span>
    			<br><br>

    			Upload resume<br>
    			<input type="file" name="resume" value="Choose file" id="label">
    			<span class="error">* <?php echo $resume;?></span>

    			<br><br>
    			<div class="jobseeker_submit">

    				<input type="submit" name="jobseeker_register" value="Submit" id="jobseeker_submit">
    			</div>

    		</form>
<br/>
    	</div>
    </div>

	<div class="footer">
		
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>	

		<p> <small>Copyright &copy; <?php echo date('Y');?></small></p>

	</div>

</body>
</html>