<!DOCTYPE html>
<html>
  <head>
  	<script>
    function validateForm() 
  {
  var x = document.forms["myForm"]["Password"].value;
  if (x == "")
   {
      alert("PLEASE ENTER  YOUR full details");
      return false;
   }
} 
</script>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>PROJECT-EXHIBITION</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
    body
{
 width: 100%;
  height: 800px;
  background-image: url('back1.jpg');
  background-size: 100% 100%;
  }
  .logo img
  {
    width: 80px;
    height: 100px;
    position: left;
    cursor: pointer;
  }

  .heading h1
  {
  padding: 0px;
  text-align:center;
  font-size: 40px;
  color: #fff;
  animation: blink 3s infinite;
  }
  @keyframes blink
{
  0%{opacity: 1.0;}
  50%{opacity: 0.1;}
  100%{opacity: 1.0;}

}
.heading h2
{
  
  padding: 0px;
  text-align:center;
  font-size: 20px;
  font-family: sans-serif;
  color: #fff;

}
.register
  {
    width: 320px;
    height:30px;
    background: transparent;
    opacity: 9;
    color:white;
    top:45%;
    left:50%;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding-bottom:70px 0px;
  }
 .register input[type="submit"]
{
  border: none;
  outline: none;
  height: 40px;
  background: #98080882;
  color:#fff;
  font-size: 18px;
  border-radius: 20px;
  width: 350px;
  transform: translate(-15%,-23%);
}

.register input[type="submit"]:hover
{
  cursor: pointer;
  background: black;
  color:red;
}
.register
label {
  margin: 0;
  padding: 0;
  font-weight: bold;
  width: 100px;
  }

.register input
{
  width: 30%;
  margin-bottom: 20px;
  margin-left: 40px;
}
.register input[type="text"]
{
  border: none;
  border-bottom: 1px solid white;
  background:transparent;
  height:40px;
  width: 175px;
  color: black;
  outline: none;
  font-size: 16px;
}

</style>
</head>
<body>
	<?php
            require 'header.php';
           ?>
           <div>
           	<form  name="myForm" method="POST" onsubmit="return validateForm()" action="sqlreg.php">
  <div class="logo">
    <p align="center"><img src="logo.png"></p>
  </div>
  <div class="heading">
    <h1>Ramaiah University</h1>
    <h2>Project Exhibition</h2>
  </div>
  <div class="register">
    <label> Name:</label>
    <input type="text" name="name" placeholder="name"><br><br>
    <label> Username: </label>
    <input type="text" name="username" placeholder="username"><br><br>
    <label> E-Mail: </label>
    <input type="text" name="email" placeholder="email"><br><br>
    <label> Contact-no: </label>
    <input type="text" name="contact" placeholder="Contact-no" style="background-color: black; width: 175px;"><br><br>
    <label> Dept: </label>
    <input type="text" name="dept" placeholder="dept" style="background-color: black; width: 175px;"><br><br>
    <label> Password: </label>
    <input type="password" name="password" placeholder="Password" style="background-color: black; width: 175px;"><br><br>
    <input type="submit" value="Sign-Up" id="submit">
    
  </div>
</form>
</div>
</body>
</html>