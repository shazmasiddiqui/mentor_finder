<?php
/*Include common.php*/
require("includes/common.php");
/*Check for active session */
if (isset($_SESSION['email'])) {
	header('location: mentors.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome | Mentor Finder</title>
	<!--Roboto Font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</head>
<body style="padding-top:50px;">
	<!--Header Start-->
	<?php
	include 'includes/header.php';
	?>
	<!--Header End-->
	
	<!--Content Start-->
	<div class="content">
		<!--Main banner image-->
		<div class="banner_image">
			<div class="container">
				<div class="row banner_content">
					<div class="col-md-8 col-md-offset-2 blocks">
						<h2 style="color: white">Find and Mentor</h2><br>
								<a href="mentors.php" class="btn btn-blue btn-primary">Search now</a>
					</div>
				</div>
			</div>
		</div>
		<!--Main banner image end-->
	</div>
	<!--Content Start-->
	
	<?php include 'includes/footer.php'; ?>
</body>
</html>
