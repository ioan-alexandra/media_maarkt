
<?php
include("../includes/init.php");
include("../classes/user.class.php");
$test = new UserDB();
$update = $test->updateUserData( $_SESSION["name"], $_POST["phone"], $_POST["address"], $_POST["zip"], $_POST["number"], $_POST["password"]);
$_SESSION['update'] = "Information has been updated!";
header("Location: ../views/profilePage.php");

?>
