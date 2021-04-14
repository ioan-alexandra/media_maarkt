<?php
include_once("../classes/Login_Database.php");
static $Forgot =0;
if(($_SERVER["REQUEST_METHOD"] == "POST"))
{
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $Email = $_POST['username'];
            $Password = $_POST['password'];
            $Login_Con = new Login_Connection();
            $Login_Details = $Login_Con->Login($Email, $Password);
            if ($Login_Details != null) {
                header("Location: profilePage.html");
            } else {
                header("Location: index.html");
            }
        }
}
?>
