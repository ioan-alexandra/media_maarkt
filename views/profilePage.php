<?php
require '../includes/init.php';
require '../classes/user.class.php';

$test = new UserDB();
$email = $_SESSION["name"];
$user = $test ->getUserData($email);
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <link rel="icon" type="image/png"
      href="../media/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  </head>
  <body>
    <div class="sidebar">
      <img src="../media/logo.jpg" />
      <br />
      <button><i class="fa fa-user"></i> Profile page</button> <br />
      <button><i class="fa fa-calendar"></i> Schedule</button>
      <a href = "../php/logout.php"> <button type="button"><span class="iconify" data-icon="fa-solid:door-open" data-inline="false"></span> Log out</button></a>
    </div>

    <form class="content" action = "../php/update.php" method = "POST" >

      <img src="../media/profile.png" />

      <button class = "sbmt" type = "submit">Edit profile picture</button>
      <div class="tbs">
      <input type="text" name="fname" value = "<?php echo $user['First_Name']; echo " "; echo $user['Last_Name'];?>" disabled/>
      <input type="text" name="email" value = "<?php echo $user['Email'] ?>" disabled/>
      <input type="text" name="phone" value = "<?php echo $user['Phone_Number'] ?>" />
      <input type="text" name="address" value = "<?php echo $user['Address'] ?>" />
      <input type="text" name="number" value = "<?php echo $user['House_Number'] ?>" />
      <input type="text" name="zip" value = "<?php echo $user['Zip_Code'] ?>" />
      <input type="date" name="date" value = "<?php echo $user['Birthday'] ?>" disabled/>
      <input type="text" name="password" value = "<?php echo $user['Password'] ?>" />
      </div>
      <button class ="btn" type = "submit"><i class="fa fa-cog"></i> Edit personal info</button>
      <?php if (isset($_SESSION['update'])) {
        $update = $_SESSION['update'];
        echo "<span class='update'>$update</span>";
      } ?>
    </form>

  </body>
</html>
