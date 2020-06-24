

<?php
include('conn.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$q = " select * FROM `registration` WHERE username = '$username' && password= '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1){
    
    $_SESSION['username'] = $username;
    
        
        header('location:userlogin.php');
}
else
{
    echo "no data found";
}

?>