<?php  

	error_reporting(E_ALL);

	$email = $password = $fname = $lname = $mobile = $location = $salary = $industry = $qualification = $resume = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		if(empty($_POST['email'])){

			$email = "Email address is required";

		} else{

			$email = test_input($_POST['email']);

		}

		if(empty($_POST['password'])){

			$password = "A password is needed";

		}else{

			$password = test_input($_POST['password']);
		}

		if(empty($_POST['fname'])){

			$fname = "Firstname is required";

		} else{

			$fname = test_input($_POST['fname']);

		}

		if(empty($_POST['lname'])){

			$lname = "Last name is required";

		} else{

			$lname = test_input($_POST['lname']);

		}

		if(empty($_POST['mobile'])){

			$mobile = "Please enter mobile number";

		} else{

			$mobile = test_input($_POST['mobile']);
		}

		if(empty($_POST['location'])){

			$location = "Please enter your location";

		} else{

			$location = test_input($_POST['location']);
		}

		if(empty($_POST['salary'])){

			$salary = "Pease enter your annual salary";

		} else{

			$salary = test_input($_POST['salary']);

		}

		if (isset( $_POST['industry'] ) ) {

           $industry = test_input($_POST['industry']);

		} else{

           $industry = "Please choose your industry";

		}

		if(empty($_POST['qualification'])){

			$qualification = "Please enter your qualification";

		} else{

			$qualification = test_input($_POST['qualification']);
		}

		if(empty($_POST['resume'])){

			$resume = "Please Upload your resume";

		} else{

			$resume = test_input($_POST['resume']);
		}
	}
?>