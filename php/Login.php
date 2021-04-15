<?php
include_once("../includes/init.php");
include_once("../classes/Login_Database.class.php");
static $Forgot = 0;

if(($_SERVER["REQUEST_METHOD"] == "POST"))
{

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $email = trim($_POST['username']);
            $password = trim($_POST['password']);
            $Login_Con = new Login_Connection();
            $Login_Details = $Login_Con->Login($email, $password);
            if ($Login_Details != null) {
                $_SESSION["name"] = $email;
                header("Location: ../views/profilePage.php");
            } else {
                header("Location: ../index.php");
            }
        }
    
}
