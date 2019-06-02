
<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		
	</style>
</head>
<body>

	<nav>
		<ul id="admin_navbar">
			<li><a style="font-weight: bolder;font-size: 20px;letter-spacing: -1px;" href="#">Dashboard</a></li>
			<li><a href="index.php">Home</a></li>
			<li><a  href="login.php">Logout</a></li>
			<li style="float: right;"><input type="text" id="search"><a style="float: right;" href="#" id="search-text"> Search</a></li>
		</ul>
	</nav>
	
	<div class="wrapper_dashboard">

		<div class="admin_menu">

			<ul id="menu_list">
				<li><a href="#" id="active" style="color: white;">Overview</a></li><br>
				<li><a href="#">View reports</a></li><br>
				<li><a href="#">Analytics</a></li><br>
				<li><a href="#">View users</a></li><br>
				<li><a href="#">View jobs</a></li><br>
				<li><a href="#">View categories</a></li><br>
				<li><a href="#">View latest jobs</a></li><br>
			</ul>

		</div>

		<div class="dashboard">
				<li style="float: right,color: grey;"><a href="#">Welcome, admin</a></li>
			<h1 style="font-weight: bolder;color: #343a40;letter-spacing: 1px;">Dashboard</h1>
			<hr>

			<div class="circle">
			
				<div id="circle1">
					<div id="circle-text">
					<h4>View Latest jobs</h4>
					</div>
				</div>
				
				<div id="circle2">
					<div id="circle-text">
					<h4>View users</h4>
				</div>
				</div>
				
				
				<div id="circle1">
					<div id="circle-text">
					<h4>View recruiters</h4>
				</div>
				</div>
				
				<div id="circle2">
					<div id="circle-text">
					<h4>View Categories</h4>
				</div>
				</div>

			</div>
		</div>
<hr>
	</div>

</body>
</html>