<?php

session_start();
header('location:index.html');

$con= mysqli_connect('localhost','root','');

 
mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' ";

$resul = mysqli_query($con , $s);

$num = mysqli_num_rows($resul);

if($num == 1)
{
    echo"username already exists";

}

else{
    $reg= "INSERT INTO USERTABLE(name,password) VALUES ('$name','$pass')";
    mysqli_query($con, $reg);
    echo" registered successfully";
}
?>