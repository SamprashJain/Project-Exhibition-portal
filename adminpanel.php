<?php

 session_start();


$con = mysqli_connect('localhost','root','','pd');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM `admin` WHERE username = '$username'&& password='$password' ";

$result = mysqli_query($con, $query);

 $num = mysqli_num_rows($result);
if($num == 1){
	
 	$_SESSION['username'] = $username;
 	echo "data found";
 	header('location:adminpanel1.php');
}
else
{
	echo "<script type='text/javascript'>alert('please check your username and password');</script>";
	header("Refresh:0; url=adminlogin.php");
}


?>