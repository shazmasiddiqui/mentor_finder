<?php
session_start();
require("includes/common.php");
// Redirects the user to login page if not logged in.
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Request Mentor | Mentor Finder</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
					<?php
                        $mentor_id=$_GET['id'];
$query = "SELECT * FROM mentors WHERE id=$mentor_id";
?>
                    <div class="col-md-12 ">
                        <div class="panel  panel-custom" >
                            <div class="panel-heading panel-col">
                                <h4>Duration for Mentorship</h4>
                            </div>
                            <div class="panel-body">
                                <form action="mentor_confirm.php" method="POST" class="time-slot-form">
									<input type="hidden" name="mentor_id" value="<?php echo $mentor_id; ?>"/>
								

									<div class="form-group">
                                        <p><b>Select a duration for mentorship</b></p>
                                        <div class="table-responsive">
                                        <table  class="table" >
  										 <tr>
                                           <td><button type='submit' class='btn btn-col'>1 Month</button></td>
                                           <td><button type='submit' class='btn btn-col'>2 Months</button></td>
                                           <td><button type='submit' class='btn btn-col'>3 Months</button></td>
                                           <td><button type='submit' class='btn btn-col'>6 Months</button></td>
                                         </tr>
    									</table>
  									</div>
										
									</div>
									
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>
