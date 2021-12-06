<?php
session_start(); 
header('location:LoginForm.php') ;
$con = mysqli_connect('localhost','root'); 
mysqli_select_db($con, 'adesh');  
$name = $_POST['user']; 
$pass = $_POST['password']; 
$s = "select * from registration where Name = '$name'"; 
$result = mysqli_query($con, $s); 
$num = mysqli_num_rows($result); 
if($num == 1) { 
    echo "Username Already Taken"; 
} else { 
    $reg = "insert into registration (Name , Password) values ('$name' , '$pass')"; 
    mysqli_query($con, $reg); 
    echo "Registration Successful";
} 
?>