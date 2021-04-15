<?php
include_once("../includes/init.php");
include_once("../classes/user.class.php");
static $Forgot = 0;

if(($_SERVER["REQUEST_METHOD"] == "POST"))
{

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $email = trim($_POST['username']);
            $password = trim($_POST['password']);
            $Login_Con = new UserDB();
            $Login_Details = $Login_Con->Login($email, $password);
            if ($Login_Details != null) {
                $_SESSION["name"] = $email;
                header("Location: ../views/profilePage.php");
            } else {    
                $_SESSION["error"] = "Wrong credentials";
                header("Location: ../index.php");
            }
        }
    
}
