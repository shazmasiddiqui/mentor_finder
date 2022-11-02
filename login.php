<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: mentors.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Mentor Finder</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-custom" >
                            <div class="panel-heading">
                                <h4>Login</h4>
                            </div>
                            <div class="panel-body">
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
										<label for="email">Email:</label>
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" id="email" required = "true">
                                    </div>
                                    <div class="form-group">
										<label for="password">Password:</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required = "true">
                                    </div>
                                    <div style="text-align: center">
                                        <button type="submit" name="submit" class="btn btn-blue btn-block btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php" class="bold-link">Click here to Sign Up</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>
