<?php
session_start(); 

$con = mysqli_connect('localhost','root'); 
mysqli_select_db($con, 'adesh');  
$name = $_POST['user']; 
$pass = $_POST['password']; 
$s = "select * from registration where Name = '$name' && Password = '$pass'"; 
$result = mysqli_query($con, $s); 
$num = mysqli_num_rows($result); 
if($num == 1) { 
    $_SESSION['username'] = $name ; 
    header('location:First Page.html') ;
} else { 
    header('location:LoginForm.php') ;
    
} 
?>