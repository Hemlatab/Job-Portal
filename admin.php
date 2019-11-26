
<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.error{

			color: red;
		}
	</style>
</head>
<body>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li style="float: right, background-color:orange"><a  href="login.php">Login</a></li>
			<li style="float: right"><a class="active" href="register.php">Register</a></li>
		</ul>
	</nav>
	<?php echo date("h:i:sa");?>
	
	<h3 style="float: right;">Hello admin!</h3>
	
	<div class="wrapper_admin">
		
		<h2>Welcome to Job Portal</h2>
		
		<div class="section">

			<table>
				<tr>
					<th>Latest Jobs<hr></th>
					<th>Categories<hr></th>
				</tr>
				<tr>
					<td>PHP Developer<button id="view"> View</button></td>
					<td>Web Development<button> View</button></td>
				</tr>
				<tr>	
					<td>iOS Developer<button> View</button></td>
					<td>Programming<button> View</button></td>
				</tr>
				<tr>
					<td>Android Developer<button> View</button></td>
					<td>IT Software<button> View</button></td>
				</tr>
				<tr>
					<td>Java Developer<button> View</button></td>
					<td>IT Software<button> View</button></td>
				</tr>
				<tr>
					<td>Project Manager<button> View</button></td>
					<td>Software<button> View</button></td>
				</tr>
				<tr>
					<td>HR Manager<button> View</button></td>
					<td>Management<button> View</button></td>
				</tr>
				<tr>
					<td>Customer Service Assistant<button> View</button></td>
					<td>Sales<button> View</button></td>
				</tr>
			</table>
			<br>


		</div>

	<div class="categories">

		<h3>Job categories</h3>
		<button name="" id="btn_category">Add Category</button><br>
		<button name="" id="btn_category">View Category</button><br>

		<h3>Jobs</h3>
		<button name="" id="btn_category">Add Job</button><br>
		<button name="" id="btn_category">Remove Job</button><br>
		

	</div>

	</div>

	<div class="footer">
		
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
	

		<p> <small>Copyright &copy; 2017</small></p>


	</div>

</body>
</html>