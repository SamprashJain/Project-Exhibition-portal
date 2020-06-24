<?php
    require 'conn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Project-Exhibition</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body style="background-color: #190505db;">
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br><br>
           <div class="container" >
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3" >
                        <div class="panel panel-primary" style="border-color: black">
                            <div class="panel-heading" style="background-color: black">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body"style="background-color: #650909c7">
                                <p>Login to see your details of project.</p>
                                <form method="POST" action="login_submit.php">
                                 <table align="center" border="0"bgcolor="black">
                                    <tr><td><font color="black">Name</font></td><td><input type="text" name="username"></td></tr>
                                        <tr><td style="padding-right: 50px"><font color="black">Password</font></td><td><input type="password" name="password"></td></tr>
                                        <tr><td colspan="20"><center><input type="submit"></center> </td></tr>
                                 </table>
                                </form>
                            </div>
                            <div class="panel-footer" style="background-color: black;"><p class="text-danger">Don't have an account yet?<a href="index2.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
           </div>
           
        </div>
    </body>
</html>
