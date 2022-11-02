<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mentors | Mentor Finder</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container content">
            <div class="row">
				<div class="row text-center">
                    <div class="col-sm-4">
                        <a href="#react" >
                            <div class="thumbnail">
                                <img src="img/react_js.png" alt="">
                                <div class="caption">
                                    <h3>React JS</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="#web" >
                            <div class="thumbnail">
                                <img src="img/web_development.png" alt="">
                                <div class="caption">
                                    <h3>Web Development</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="#dsa" >
                            <div class="thumbnail">
                                <img src="img/data_structures.png" alt="">
                                <div class="caption">
                                    <h3>Data Structures</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
			</div>
            <hr>

            <div class="row" id="react">
			<?php
			$query = "SELECT * FROM mentors WHERE skills='React JS'";
				$result = mysqli_query($con, $query)or die(mysqli_error($con));
				if (mysqli_num_rows($result) >= 1) {
					while ($row = mysqli_fetch_array($result)) {?>
						<div class="col-md-6 home-feature">
							<div class="thumbnail outer-block">
								<div class="img-block"><div class="img-icon"><?php 
								$id=$row['id'];
								$name=$row['name'];
								$words = explode(" ", $name);
								echo $words[0][0].$words[1][0];
								?></div></div>
								<div class="text-block">
									<h3 class="name"><?php echo $name; ?></h3>
									<p><?php echo $row['skills']; ?></p>
									<p><?php echo $row['department']; ?></p>
									<p><?php echo $row['sem']; ?> Sem</p>
									
									<div class="pull-right">
										<a href="mentor_profile.php?id=<?php echo $id ?>" class="bold-link">View Profile</a>
										<?php if (!isset($_SESSION['email'])) { ?>
											<a href="login.php" role="button" class="btn btn-primary btn-blue">Request Now</a>
											<?php
											} else {
											if (check_if_confirmed($id)) { //This is same as if(check_if_confirmed != 0)
												echo '<a class="btn btn-success btn-green" disabled>Confirmed</a>';
											}
											elseif (check_if_requested($id)) {
												echo '<a class="btn btn-success btn-green" disabled>Already Requested</a>';
											} 
											else {
												?>
												<a href="request_start.php?id=<?php echo $id ?>" class="btn btn-primary btn-blue">Request now</a>
												<?php
											}
										}
										?>
									</div>
								</div>
							</div>
						</div>																																																																																																																			
					<?php }
				}
			?>
            </div>

            <div class="row" id="web">
            <?php
			$query = "SELECT * FROM mentors WHERE skills='Web Development'";
				$result = mysqli_query($con, $query)or die($mysqli_error($con));
				if (mysqli_num_rows($result) >= 1) {
					while ($row = mysqli_fetch_array($result)) {?>
						<div class="col-md-6 home-feature">
							<div class="thumbnail outer-block">
								<div class="img-block"><div class="img-icon"><?php 
								$id=$row['id'];
								$name=$row['name'];
								$words = explode(" ", $name);
								echo $words[0][0].$words[1][0];
								?></div></div>
								<div class="text-block">
									<h3 class="name"><?php echo $name; ?></h3>
									<p><?php echo $row['skills']; ?></p>
									<p><?php echo $row['department']; ?></p>
									<p><?php echo $row['sem']; ?> Sem</p>
									
									<div class="pull-right">
										<a href="mentor_profile.php?id=<?php echo $id ?>" class="bold-link">View Profile</a>
										<?php if (!isset($_SESSION['email'])) { ?>
											<a href="login.php" role="button" class="btn btn-primary btn-blue">Request Now</a>
											<?php
											} else {
											if (check_if_confirmed($id)) { //This is same as if(check_if_confirmed != 0)
												echo '<a class="btn btn-success btn-green" disabled>Confirmed</a>';
											}
											elseif (check_if_requested($id)) {
												echo '<a class="btn btn-success btn-green" disabled>Already Requested</a>';
											} 
											else {
												?>
												<a href="request_start.php?id=<?php echo $id ?>" class="btn btn-primary btn-blue">Request Now</a>
												<?php
											}
										}
										?>
									</div>
								</div>
							</div>
						</div>																																																																																																																			
					<?php }
				}
			?>
            </div>

            <div class="row" id="dsa">
             <?php
			$query = "SELECT * FROM mentors WHERE skills='Data Structures'";
				$result = mysqli_query($con, $query)or die($mysqli_error($con));
				if (mysqli_num_rows($result) >= 1) {
					while ($row = mysqli_fetch_array($result)) {?>
						<div class="col-md-6 home-feature">
							<div class="thumbnail outer-block">
								<div class="img-block"><div class="img-icon"><?php 
								$id=$row['id'];
								$name=$row['name'];
								$words = explode(" ", $name);
								echo $words[0][0].$words[1][0];
								?></div></div>
								<div class="text-block">
									<h3 class="name"><?php echo $name; ?></h3>
									<p><?php echo $row['skills']; ?></p>
									<p><?php echo $row['department']; ?></p>
									<p><?php echo $row['sem']; ?> Sem</p>
									<div class="pull-right">
										<a href="mentor_profile.php?id=<?php echo $id ?>" class="bold-link">View Profile</a>
										<?php if (!isset($_SESSION['email'])) { ?>
											<a href="login.php" role="button" class="btn btn-primary btn-blue">Request Now</a>
											<?php
											} else {
											if (check_if_confirmed($id)) { //This is same as if(check_if_confirmed != 0)
												echo '<a class="btn btn-success btn-green" disabled>Confirmed</a>';
											} 
											elseif (check_if_requested($id)) {
												echo '<a class="btn btn-success btn-green" disabled>Already Requested</a>';
											} 
											else {
												?>
												<a href="request_start.php?id=<?php echo $id ?>" class="btn btn-primary btn-blue">Request Now</a>
												<?php
											}
										}
										?>
									</div>
								</div>
							</div>
						</div>																																																																																																																			
					<?php }
				}
			?>
            </div>
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
