<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile | Mentor Finder</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container content">
            <?php include 'includes/header.php';
include 'includes/check-if-added.php';
?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
					<?php
        $id = $_GET['id'];
$query = "SELECT * FROM mentors WHERE id=$id";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$row = mysqli_fetch_array($result)
?>
					<div class="panel panel-custom" >
						<div class="panel-heading panel-col">
							<h4>Mentor's Profile</h4>
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
								<p><?php echo $row['skills']; ?></p>
								<p><?php echo $row['department']; ?></p>
								<p><?php echo $row['sem']; ?> Sem</p>
								<hr>
								<p> 
								Hello World! This is <?php echo $name; ?>, I'm currently pursuing <?php echo $row['department'] ?> from NIT Raipur, apart from my qualification I'm truly dedicated to programming and web dev.
I love to do competitive programming and for that, I prefer CodeChef, HackerRank. Also, I actively participate in various coding contests.
I'm truly passionate about my goals and consider myself a hardworking person who gives 100% towards any task which I opt for.
								</p>
								<div class="pull-right">
									<?php if (!isset($_SESSION['email'])) { ?>
										<a href="login.php" role="button" class="btn btn-primary btn-blue">Request Now</a>
										<?php
									} else {
                                        //We have created a function to check whether this particular product is added to cart or not.
									    if (check_if_confirmed($id)) { //This is same as if(check_if_booked != 0)
									        echo '<a class="btn btn-success btn-green" disabled>Confirmed</a>';
									    } else {
									        ?>
											<a href="request_start.php?id=<?php echo $id ?>" class="btn btn-primary btn-blue">Request now</a>
											<?php
									    }
									}
?>	
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<a href="mentors.php" class="bold-link">Back</a>
								
						</div>
					</div>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>