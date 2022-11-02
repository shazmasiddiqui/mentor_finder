<?php
session_start();
require("includes/common.php");
if (isset($_GET['id'])) {
    $app_id = $_GET['id'];
    $query = "UPDATE assigned_mentor SET status='Requested' WHERE id=$app_id";
    mysqli_query($con, $query) or die(mysqli_error($con));
	echo "<script>alert('Your have successfully created a request for a mentor.')</script>";
	echo ("<script>location.href='mentors.php'</script>");
}
?>   