<?php
session_start();
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Change Password | Mentor Finder</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
       
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-custom" >
                            <div class="panel-heading">
                                <h4>Change Password</h4>
                            </div>
                         <div class="panel-body">    
                    <form action="change_password_script.php" method="POST">
                        <div class="form-group">
                            <label for="email">Old Password</label>
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <label for="email">New Password</label>
                            <input type="password" class="form-control" name="password" placeholder="New Password (Min. 6 characters)" required = "true">
                        </div>
                        <div class="form-group">
                            <label for="email">Confirm New Password</label>
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <div style="text-align: center">
                        <button type="submit" name="submit" class="btn btn-blue btn-block btn-primary">Change</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
