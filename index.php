
<!-- <?php require_once('index.php'); ?> -->
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Info Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="container">
        <h1>Fill This Informatin To Complete Final Step Of Admission Process</h3>
        <p>Enter your details and submit this sheet to confirm your admision into the college </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to have you in college .</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your full name as on govt ID">
            <input type="text" name="branch" id="branch" placeholder="Enter your branch">
            <input type="text" name="hostel" id="hostel" placeholder="Enter your hostel name(just block letter)">
            <input type="text" name="room_no" id="room_no" placeholder="Enter your alloted room number">
            <!-- <input type="text" name="laundry" id="laundry" placeholder="laundry opted?(answer in yes/no)"> -->
            <input type="number" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>