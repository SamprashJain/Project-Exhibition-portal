<?php


$con = mysqli_connect('localhost','root','','pd');
if($con){
  echo"";
}else{
  echo " no connection"; 
}

$query="SELECT * FROM groups";

$res=mysqli_query($con,$query);

$sn=1;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style>
    
    table {
  border-collapse: collapse;
  width: 95%;
}
th{
  padding: 20px;
  text-align: center;
  border-bottom: 1px solid #ddd;
  background-color: #6a5ddf;;
  color: white;
}
td {
  padding: 20px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}
tr:hover {
  background-color:#f5f5f5;
}
  </style>

<!-- Bootstrap 4.2.1 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

</head>
<body>
	<div class="container">
		<div>
			
      <table class="table table-bordered table-danger">
      	<h2 align="center">Groups-DETAILS</h2>
                    <tr class="bg-dark text-white text-center">
                      <th>S.No</th>
                      <th>Groups</th>
                      <th>Project-name</th>
                      <th>Team Leader</th>
                      <th>Mentor</th>
                      <th>Category</th>
                      <th>Dept</th>
                      <th></th>
                      <th>room.no</th>
                      <th>Table.no</th>
                     </tr> 

                   <?php 

                     while($row=mysqli_fetch_array($res))

                     {

                    
                     echo "<tr><td>".$sn."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td></tr>";
                     $sn++;

                    }

                    ?>

                  </table>
      </div>
		
	</div>

</body>
</html>
