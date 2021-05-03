<?php
include('C:/xampp/php/pear/Mail.php');
include("../classes/user.class.php");
class Forgot
{
    static function Mode()
    {
        $Login_Con = new UserDB();
        if(!isset($_SESSION["Mode"]))
        {
            $_SESSION["Mode"] = 0;
        }
        if($_SESSION["Mode"] == 0)
        {
             $Profile = $Login_Con->getUserData($_POST["email"]);
            if($Profile != null)
            {
                Forgot_Password();
                echo "<script> (document).getElementById('email').placeholder = 'Add the email password' </script>";
                echo "<script> (document).getElementById('email').type = 'text' </script>";
                $_SESSION["Mode"] = 1;
                $_SESSION["name"] = $_POST["email"];
            }
            else 
            {
                echo "This email doesnt exist in our database";
            }
        }
        else if($_SESSION["Mode"] == 1)
        {
            if($_SESSION["E_Pass"] == $_POST["email"])
            {
                echo "<script> (document).getElementById('Confirm').style = 'visibility: visible;'  </script> ";
                echo "<script> (document).getElementById('email').type = 'password'  </script> ";
                echo "<script> (document).getElementById('email').placeholder = 'new password'  </script> ";
                echo "<script> (document).getElementById('Toggle_Password').style = 'visibility: visible;'  </script> ";
                echo "<script> (document).getElementById('TP').style = 'visibility: visible;'  </script> ";
                $_SESSION["Mode"] = 2;
                unset($_SESSION["E_Pass"]);
            }
        }
        else if($_SESSION["Mode"] == 2)
        {
            if($_POST["email"] == $_POST["Confirm"])
            {
                $Login_Con->updateUserPassword($_SESSION["name"], $_POST["email"]);
                unset($_SESSION["Mode"]);
                header("Location: ../views/profilePage.php");
            }
        }
    }
}
    function Forgot_Password()
    {
        $Temp = Password();
        $from = "<testing.thomas.pouw@gmail.com>";
        $to = $_POST["email"];
        $subject = "Forgotten password";
        $body =
"Dear Miss/Mister,
We heard that you forgot your password...
Luckily we can give you a password just to log in.
You will be change your password after the system confirms this temporary password.
Here is the code: " . $Temp . "


With kind regards, 

Media Bazaar forgot password service.";

        $host = "smtp.gmail.com";
        $port = "587";
        $username = "testing.thomas.pouw@gmail.com";
        $password = "lgfmmoqijxdokaoc";

        $headers = array(
            'From' => $from,
            'To' => $to,
            'Subject' => $subject
        );
        $smtp = Mail::factory(
            'smtp',
            array(
                'host' => $host,
                'port' => $port,
                'auth' => true,
                'username' => $username,
                'password' => $password
            )
        );

        $mail = $smtp->send($to, $headers, $body);

        if (PEAR::isError($mail)) {
            echo ("<p>" . $mail->getMessage() . "</p>");
        } else {
            echo ("<p>Message successfully sent!</p>");
        }
    }
    function Password()
    {
        
        $Temp_Password = "";
        for ($I = 0; $I < 10; $I++) {
            $J = rand(48, 123);
            $Temp_Password .= chr($J);
        }
        $_SESSION["E_Pass"] = $Temp_Password;
        return $Temp_Password;
    }
?>
