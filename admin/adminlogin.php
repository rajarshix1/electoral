<!-- <?php

require '../sv/connection.php';
session_start();
if ($_SESSION['$id']){
	header('location:admindashboard.php');}
	?>
 -->

 <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Admin Log in</title>
    <link href='../css/style.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    </head>
    <style>
        body{
            background-color: #eeeeee;
        }
    </style>
<html>
                            
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
    <h3>Admin Log in</h3>
    <form method="post" action="../sv/login.php">
        <div class="inputBox"> 
            <input id="uname" type="text" name="id" placeholder="Enter your id"> 
            <input id="uname" type="password" name="password" placeholder="Enter your Password"> 
        </div> 
        <input type="submit" name="" value="Log in">
    </form> 
    <div class="text-center">
        <p style="color: #59238F;"><a style="color:#5f0096; font-size:15px" href="../loginpage.php">User Login</a></p>
        <p style="color: #59238F;"><a style="color:#5f0096; font-size:15px" href="../index.php">Sign up</a></p>
    </div>
</div>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src=''></script>
    <script type='text/Javascript'></script>
    </body>
</html>                    
              