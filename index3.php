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
  background-color: black;
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
    height:200px;
    background: transparent;
    opacity: 9;
    color:white;
    top:45%;
    left:50%;
    position:absolute;
    transform: translate(50%,20%);
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
           <div>
            <form  name="myForm" method="POST" onsubmit="return validateForm()" action="grpreg.php">
  <div class="logo" style="padding-top: 10px">
    <p align="center"><img src="logo.png"></p>
  </div>
  <div class="heading">
    <h1>Ramaiah University</h1>
    <h2>Project Exhibition</h2>
  </div>
        <div class="row">
        <div class="col-sm-3">
  <div class="register">
    <label> Members:</label>
    <input type="text" name="members" placeholder="members">
    <label> Project: </label>
    <input type="text" name="project" placeholder="project">
    <label> leader: </label>
    <input type="text" name="tl" placeholder="team leader">
    <label> Mentor: </label>
    <input type="text" name="mentor" placeholder="mentor" style="width: 175px;">
          </div></div>
          <div class="row">
        <div class="col-sm-9">
          <div class="register">
    <label> Category: </label>
    <input type="text" name="pcat" placeholder="Project-Category" style= "width: 175px;">
    <label> Dept: </label>
    <input type="text" name="dept" placeholder="Dept" style=" width: 175px;">
    <label> table: </label>
    <input type="text" name="table" placeholder="table" style=" width: 175px;">
    <label> room: </label>
    <input type="text" name="room" placeholder="room" style=" width: 175px;">
  </div>
</div>
    <div class="register" style="transform: translate(-50%,90%)"><center><input type="submit" value="ADD-UP" id="submit"></center></div>
    
  </div>
</form>
</div>
</body>
</html>