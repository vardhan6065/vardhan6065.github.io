<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:index.html');
}
?>

<html>
<head>
<title>home page</title>
</head>
<style>
h1{
    background-color:rgb(71, 68, 68);
    border: 2px solid black;
    border-radius: 9px;
    padding: 8px;
    text-align: center;
    color: white;
}

a{
    text-align: center;
    padding: 9px;
    border: 0.5px solid black;
    background-color: rgb(31, 31, 233);
    border-radius: 3px;
    color:white;
    text-decoration: none;
    
}
</style>
<body>
    <h1>Welcome to home page <?php echo $_SESSION['username']; ?> </h1>

<a href="logout.php">logout</a>
</body>
</html>