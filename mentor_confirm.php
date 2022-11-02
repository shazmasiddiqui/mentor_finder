<?php
session_start();
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confirm Mentor Request| Mentor Finder</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container content">
            <?php include 'includes/header.php'; ?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
					<?php
					$mentor_id = $_POST['mentor_id'];
					$mentee_id = $_SESSION['mentee_id'];
					 $query = "INSERT INTO assigned_mentor(mentee_id, mentor_id, status) VALUES('$mentee_id', '$mentor_id', 'Requested')";
   					mysqli_query($con, $query) or die(mysqli_error($con));
					$app_id = mysqli_insert_id($con);
					$query = "SELECT * FROM mentors WHERE id=$mentor_id";
					$result = mysqli_query($con, $query)or die(mysqli_error($con));
					$row = mysqli_fetch_array($result)
					?>
					<div class="panel panel-custom" >
						<div class="panel-heading panel-col">
							<h4>Create a request for Mentorship</h4>
						</div>
						<div class="panel-body">
							<div class="img-block">
								<div class="img-icon"><?php 
									$name=$row['name'];
									$words = explode(" ", $name);
									echo $words[0][0].$words[1][0];
									?>
								</div>
							</div>
							<div class="text-block">
								<h3 class="name"><?php echo $name; ?></h3>
								<h4><?php echo $row['skills']; ?></h4>
								<p><?php echo $row['department']; ?></p>
								<p><?php echo $row['sem']; ?></p>
								<div class="pull-right">
									<a href="mentor_request_add.php?id=<?php echo $app_id ?>" class="btn btn-primary btn-blue">Confirm</a>	
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<a href="mentor_request_remove.php?id=<?php echo $app_id ?>" class="bold-link">Cancel</a>
								
						</div>
					</div>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>