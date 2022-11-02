<?php

//This code checks if the request is sent to mentor or not 
function check_if_requested($mentor_id) {
    $mentee_id = $_SESSION['mentee_id']; //We'll get the mentee_id from the session
    require("common.php"); // connecting to the database
    $query = "SELECT * FROM assigned_mentor WHERE mentor_id='$mentor_id' AND mentee_id ='$mentee_id' and status='Requested'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
// We'll check if the no.of rows in the result and no.of rows returned by the mysqli_num_rows($result) is true. If yes then it return 0 else it returns 0
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}

//This code checks if the request is confirmed or not 
function check_if_confirmed($mentor_id) {
    $mentee_id = $_SESSION['mentee_id']; //We'll get the mentee_id from the session
    require("common.php"); // connecting to the database
    $query = "SELECT * FROM assigned_mentor WHERE mentor_id='$mentor_id' AND mentee_id ='$mentee_id' and status='Confirmed'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
// We'll check if the no.of rows in the result and no.of rows returned by the mysqli_num_rows($result) is true. If yes then it return 0 else it returns 0
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}

?>