<?php
require '../includes/init.php';
require '../php/forgotPassword.php';
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="icon" type="image/png" href="../media/favicon.ico">
</head>

<body>
  <center>

    <img src="../media/logo.jpg">

    <h1>Please insert your email address</h1>

    <form class="box-1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="email" name="email" id="email" placeholder="Email Address"> <br>
      <input type="password" name="Confirm" id="Confirm" placeholder="Confirm password" style="visibility: hidden;" ;> <br>
      <input type="checkbox" name="Toggle_Password" id="Toggle_Password" style="visibility: hidden;" onclick="MyFunction()" ;>
      <label for="See" style="visibility: hidden;" id="TP"> Toggle Password</label>
      <button type="submit">Send</button>
      <a href="../index.php">Back to login</a>
    </form>
  </center>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  Forgot::Mode();
}
?>
<script>
  function MyFunction() {
    var checkBox = document.getElementById("Toggle_Password");
    if (checkBox.checked == true) {
      (document).getElementById('email').type = "text";
      (document).getElementById('Confirm').type = "text";
    } else if (checkBox.checked == false) {
      (document).getElementById('email').type = 'password';
      (document).getElementById('Confirm').type = 'password';
    }
  }
</script>