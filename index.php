<?php
require_once('includes/init.php');
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" 
      href="media/favicon.ico">
  </head>
  <body>
      <center>

          <img src="media/logo.jpg">

          <h1>Welcome to Media Bazaar</h1>

          <form class="box-1" action="./php/Login.php" method="POST">

             <input type="text" name = "username" placeholder="Username"> <br>
             <input type="password" name = "password" placeholder="Password"> <br>
             <button type = "submit">Log In</button>

             <a href = "views/forgotPassword.php" >Forgot password?</a>

          </form>

      </center>

  </body>

  </html>

  
