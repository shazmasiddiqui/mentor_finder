<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: mentors.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Mentor Finder</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
						<div class="panel panel-custom">
							<div class="panel-heading"><h4>Sign Up</h4></div>
							<div class="panel-body">
								<form name="myForm" action="signup_script.php" onSubmit="return validateForm()" method="POST" >
									<div class="form-group">
										<label for="name">Name:</label>
										<input class="form-control" placeholder="Enter Name" name="name" id="name" maxlength="40" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required="true">
									</div>
									<div class="form-group">
										<label for="email">Email:</label>
										<input type="email" class="form-control" id="email" placeholder="Enter Valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required="true">
									</div>
									<div class="form-group">
										<label for="password">Password:</label>
										<input type="password" class="form-control" id="password" placeholder="Enter Password (Min. 6 characters)" name="password" required="true">
									</div>
									<div class="form-group">
									  <label for="dt">Deparment</label>
									  <select class="form-control" id="dt" name="department">
										<option>MCA</option>
										<option>CSE</option>
										<option>MECH</option>
										<option>ECE</option>
									  </select>
									</div>
									<div class="form-group">
									  <label for="sem">Semester</label>
									  <select class="form-control" id="sem" name="sem">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									  </select>
									</div>
									<div style="text-align: center">
										<button type="submit" name="submit" class="btn btn-blue btn-block btn-primary">Sign Up</button>
									</div>
								</form>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>