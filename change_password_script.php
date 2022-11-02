<?php
session_start();
// This page updates the user password
require "includes/common.php";
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
/*$new_pass = MD5($new_pass);*/

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
/*$new_pass1 = MD5($new_pass1);*/

if ((strlen($new_pass) < 6) && (strlen($new_pass1) < 6)) {
    echo "<script>alert('Minimum 6 digits required')</script>";
    echo ("<script>location.href='change_password.php'</script>");
} else {
    $query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $orig_pass = $row['password'];

    if ($new_pass != $new_pass1) {
        echo "<script>alert('Passwords dont match')</script>";
        echo ("<script>location.href='change_password.php'</script>");
    } else {
        if ($old_pass == $orig_pass) {
            $np=md5($new_pass);
            $query = "UPDATE  users SET password = '" .$np . "' WHERE email = '" . $_SESSION['email'] . "'";

           $r=mysqli_query($con, $query) or die($mysqli_error($con));
        if($r){
        echo "<script>alert('Password Updated')</script>";
echo ("<script>location.href='logout_script.php'</script>");
    }
            
        } else {
            echo "<script>alert('Wrong old password')</script>";
        }

        echo ("<script>location.href='change_password.php'</script>");
    }
}
?>