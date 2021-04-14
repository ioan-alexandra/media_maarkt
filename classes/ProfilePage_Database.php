<?php
include_once("database.php");

class ProfilePage_Connection extends dbConnection
{

/*public function GetLoginInfo(){  //Link profile info to Loginpgae
  return $this-> $Email, $this-> $Password
} */


  public function getALLUSERS ($First_Name, $Last_Name, $Email,  $Phone_Number, $Password,  $Birthday,  $Address, $Zip_Code ) {
  $sql = "SELECT First_Name, Last_Name, Email, Phone_Number, Password, Birthday, Address, Zip_Code
  FROM 'users'
   WHERE First_Name = :First_Name , Last_Name = :Last_Name, Email = :Email ,
    Phone_Number = :Phone_Number, Password = :Password, Birthday = :Birthday, Address  = :Address, Zip_Code = :Zip_Code ";
    $pfi = $this->connect()->prepare($sql);
    $pfi->bindValue(' :First_Name' , $First_Name);
    $pfi->bindValue(' :Last_Name' , $Last_Name );
    $pfi->bindValue(' :Email' , $Email);
    $pfi->bindValue(' :Phone_Number' , $Phone_Number);
    $pfi->bindValue(':Password' , $Password);
    $pfi->bindValue(' :Birthday' , $Birthday);
    $pfi->bindValue('  :Address' ,  $Address);
    $pfi->bindValue(':Zip_Code' ,  $Zip_Code);

    $Row = $pfi->fetchAll(PDO::FETCH_ASSOC);

    If(Count($Row ) == 1)
    {
      return $Row;
    }else {
      {
        return null;
      }
    }
  }
  public function setAllUser($First_Name, $Last_Name, $Email,  $Phone_Number, $Password,  $Birthday,  $Address, $Zip_Code) {
    $sql = "INSERT INTO users( First_Name, Last_Name, Email, Phone_Number, Password, Birthday, Address, Zip_Code) VALUES (?, ?, ?, ?, ?, ?, ?, ? )";
    $pfi = $this->connect() ->prepare($sql);
    $pfi -> execute ([$First_Name, $Last_Name, $Email,  $Phone_Number, $Password,  $Birthday,  $Address, $Zip_Code]);
  }
 }
