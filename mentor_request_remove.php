<?php
session_start();
require("includes/common.php");
if (isset($_GET['id'])) {
	$app_id = $_GET['id'];
    $query = "DELETE FROM mentor_assigned WHERE id=$app_id";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
	echo "<script>alert('Mentor request cancelled')</script>";
	echo ("<script>location.href='mentors.php'</script>");
}
?>