<?php

include('conn.php');

mysqli_select_db($con, 'groups');

 $members = $_POST['members'];
 $project = $_POST['project'];
 $tl = $_POST['tl'];
 $mentor = $_POST['mentor'];
 $pcat = $_POST['pcat'];
 $dept = $_POST['dept'];
 $table =$_POST['table'];
 $room =$_POST['room'];



 $q = " select * from groups  where tl = '$tl' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" duplicate data ";
}else{

    $qy= " insert  into groups(members ,project ,tl ,mentor ,pcat ,dept ,table ,room) values ('$members' ,'$project' ,'$tl' , '$mentor' ,'$pcat' ,'$dept', '$table' , '$room') ";
    mysqli_query($con, $qy);
   header('location:adminpanel1.php');
}



?>