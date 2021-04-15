<?php
require '../includes/init.php';

?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" type="image/png" 
      href="../media/favicon.ico">
  </head>
  <body>
      <center>

          <img src="../media/logo.jpg">

          <h1>Please insert your email address</h1>

          <form class="box-1" method = "POST" action = "">
             <input type="email" name = "email" placeholder="Email Address"> <br>
             <button type = "submit">Send</button>
             <a href = "../index.php" >Back to login</a>
          </form>
      </center>

  </body>

  </html>

  
