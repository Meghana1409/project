<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration');
$name = $_POST['user'];
$email = $_POST['mail'];
$password = $_POST['pass'];

$s = "select * from registeredusers where username = '$name' && password= '$password'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    header('location:index.php');
}
else{
    header('location:account.php');
}



?>