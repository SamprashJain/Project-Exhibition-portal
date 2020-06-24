<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body style="background-color: black">
<?php
            require 'header3.php';
           ?>
  
<div class="container text-center">    
  <div class="row" >
    <div class="col-sm-3 well">
      <div class="well"style="background-color: #190505db ">
        <p class="text-danger" style="font-size: 20px">Admin</p>
        <img src="sj.jpeg" class="img-square" height="165" width="165" alt="Avatar">
      </div>
      <div class="well"style="background-color: #190505db ">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
    
      <a href="display_user.php"><button class="btn btn-primary">Registered-User</button></a>
      <a href="displayadmin.php"><button class="btn btn-primary">Groups-Info</button></a>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <center><p contenteditable="true">Add New Group-:</p></center>
              <center><a href="index3.php"><button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Add-Now
              </button> </a>   </center> 
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Nilesh Lodhi</p>
           <img src="user1.png" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>While I may really like online shopping you must really understand that nothing will fixed something like for example that thing like your own digital experience with everything else out there like offline meetings and so on, so please make it happens please.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Shivam Rai</p>
           <img src="user1.png" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>With the increasing popularity of several e-commerce portals, we are now heavily inclined to online shopping. These portals leave no stone unturn to grab the public attention with several lucrative offers and deals, super deals, happy hours, deal of the day etc. Whenever I open the my english daily, the first page is often occupied by big, attractive advertisements  of any popular eCommerce site.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Chandan Kumar</p>
           <img src="user1.png" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Well I have been shopping online since 2012.  Before that I had lots of fear that something wud go wrong while buying online but that fear went off when I purchased my product through Flipkart for my mother in 2012!  It was b'day present for her and product was "a couple of books"</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Bhaumic Kaushal</p>
           <img src="img/user1.png" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>I would like to say this "what you see is what you get" because when you order a product just by the visual appearance displayed on the site.

Before ordering you must read the reviews about that particular product from different sites to ensure that the product is genuine.</p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well" style="padding-right: 10px">
      <div class="thumbnail" style="background-color: #190505db ">
        <p class="text-danger">Ramaiah University Activity:</p>
        <marquee behavior="scroll" direction="up" scrollamount="5" style="height:280px"  bgcolor="black" onmouseover="this.stop();" onmouseout="this.start();">
                            <ul>
                                <li>
                                    <a href="#" target="_blank"> <font color="white">
                                        <h4>Project-Exhibition-Heads</h4>
                                    </a>
                                </li>           
                               </a>
                                <li><a href="" target="_blank"><font color="white"><h4>Guest of Honour:- MR.Kaushal</h4></a></li>
                                <li><a href="" target="_blank"><font color="white"><h4>CSe-HOD:- Priyanshi Prajapati</h4></a></li>
                                <li><font color="white"><h4> IT-Cell head:-Pratibha Pandey</h4></li>
                                <li><font color="white"><h4>Exhibition-head:-Samprash Jain</h4></li>
                                <li><h4>This a Great opputunity for Computer Science Dept. Who conducting this type of Initiative ideas and project Exhibition</h4>
                                </li>
                                <li>
                                   <h4> It's a great chance for students who wants to become a Enterpunor and present their ideas</h4>
                                </li>
                            </ul>
    </marquee>
      </div>      
    </div>
  </div>
</div>



</body>
</html>
