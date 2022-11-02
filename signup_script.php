<?php

require("includes/common.php");

// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
if(!empty($_POST['name']) && !empty($_POST['e-mail']) && !empty($_POST['password']) && !empty($_POST['department']) && !empty($_POST['sem']))
{
	$name = $_POST['name'];
	$name = mysqli_real_escape_string($con, $name);
	
	$email = $_POST['e-mail'];
	$email = mysqli_real_escape_string($con, $email);
	
	$password = $_POST['password'];
	$password = mysqli_real_escape_string($con, $password);
	
	$department = $_POST['department'];
	$department = mysqli_real_escape_string($con, $department);

	$sem = $_POST['sem'];
	$sem = mysqli_real_escape_string($con, $sem);
	
	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	$regex_num = "/^[6789][0-9]{9}$/";
	
	$query = "SELECT * FROM mentee WHERE email='$email'";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$num = mysqli_num_rows($result);

	if ($num != 0) {
		echo "<script>alert('Email Already Exists')</script>";
		echo ("<script>location.href='signup.php'</script>");
	} else if (!preg_match($regex_email, $email)) {
		echo "<script>alert('Not a valid Email Id')</script>";
		echo ("<script>location.href='signup.php'</script>");
		echo ("<script>location.href='signup.php'</script>");
	} else if (strlen($password)<6) {
		echo "<script>alert('Minimum 6 digits required')</script>";
		echo ("<script>location.href='signup.php'</script>");
	} 
	else {
		$password = MD5($password);
		$query = "INSERT INTO mentee(name, email, password, department, sem )VALUES('" . $name . "','" . $email . "','" . $password . "','" . $department . "','" . $sem . "')";
		$check=mysqli_query($con, $query) or die(mysqli_error($con));
		if($check){
			$mentee_id = mysqli_insert_id($con);
			$_SESSION['email'] = $email;
			$_SESSION['mentee_id'] = $mentee_id;
			echo "<script>alert('Mentee successfully registered')</script>";
			echo ("<script>location.href='mentors.php'</script>");
		}
		else{
			echo "<script>alert('Some error occurred. Please try again.')</script>";
			echo ("<script>location.href='signup.php'</script>");
		}
	}
}
else{
	echo "<script>alert('Enter Valid Details')</script>";
	echo ("<script>location.href='signup.php'</script>");
}
?>
