<?php

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);
    
    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
        
    }
    // echo "Success connecting to the db";
    
    // Collect post variables
    $name = $_POST['name'];
    $branch= $_POST['branch'];
    $hostel= $_POST['hostel'];
    $room_no= $_POST['room_no'];
    // $laundry=$_POST['laundry'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `details`.`details` (`name`,`branch`,`hostel`,`room_no`,`age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name','$branch','$hostel','$room_no', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;
    
    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $con->error";
    }

    // Close the database connection
    $con->close();
}
?>