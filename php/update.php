
<?php
include("../includes/init.php");
include("../classes/ProfilePage_Database.php");
$test = new ProfilePage_Connection();
$update = $test->updateUserData( $_SESSION["name"], $_POST["phone"], $_POST["address"], $_POST["zip"], $_POST["number"], $_POST["password"]);
header("Location: ../views/profilePage.php");
?>
