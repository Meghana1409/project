<?php

session_start();
// header('location:account.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration');
$name = $_POST['user'];
$email = $_POST['mail'];
$password = $_POST['pass'];

$s = "select * from registeredusers where email = '$email' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo " email is alredy used";
}
else{
    $reg = " insert into registeredusers(username,email,password) values('$name','$email','$password')";
    mysqli_query($con,$reg);
    echo " registered !!!";
}

?>