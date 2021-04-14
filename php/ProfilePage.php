<?php
include_once("../classes/ProfilePage_Database.php");
include_once("../classes/Login.php");
static $Forgot = 0;

if(($_SERVER ['REQUEST_METHOD']== "POST"))
 {
   if(isset($_POST ['Login.php'])) {
    $First_Name = $_POST ['fname'];
    $Last_Name = $_POST ['lname'];
    $Email = $_POST ['email'];
    $Phone_Numbere = $_POST ['phone'];
    $Password= $_POST ['password'];
    $Birthday = $_POST ['date'];
    $Address = $_POST ['address'];
    $Zip_Code = $_POST ['zip'];
    $Profile_Con =  new ProfilePage_Connection();
    $Profile_Details = $Profile_Con->Profile($First_Name, $Last_Name, $Email, $Phone_Number, $Password, $Birthday, $Address, $Zip_Code );

    //if($)

   }
 }
