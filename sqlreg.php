<?php

session_start();


include('conn.php');

mysqli_select_db($con, 'registration');

 $name = $_POST['name'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $contact = $_POST['contact'];
 $dept = $_POST['dept'];
 $password =$_POST['password'];



$q = " select * from registration  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" duplicate data ";
}else{

    $qy= " insert  into registration(name ,username ,email ,contact ,dept ,password) values ('$name' ,'$username' ,'$email' , '$contact' ,'$dept' , '$password') ";
    mysqli_query($con, $qy);
    echo "success";
    header('location:index3.php');
}



?>