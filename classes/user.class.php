<?php
include_once("database.class.php");

class UserDB extends dbConnection
{
    public function Login($Email, $Password)
    {
        $sql = "SELECT * FROM `users` WHERE Email = :Email AND Password = :Password";
        $command = $this->connect()->prepare($sql);
        $command->bindValue(':Email', $Email);
        $command->bindValue(':Password', $Password);
        $command->execute();

        $Row = $command->fetchAll(PDO::FETCH_ASSOC);

        if (Count($Row) == 1) {
            return $Row;
        } else {
            return null;
        }
    }
    function getUserData($User_Id)
    {

        $sql = 'SELECT * FROM users WHERE Email = :email ';
        $sth = $this->connect()->prepare($sql);
        $sth->execute([':email' => $User_Id]);
        //      Fetch first row as associate array
        $result = $sth->fetch();
        return $result;
    }

    function updateUserData($email, $phone, $address, $zip, $house, $pass, $gender)
    {

        $sql = 'UPDATE users SET Phone_Number = :phone , Address = :adress, Zip_Code = :zip, House_Number = :house, Password = :password , Gender = :gender WHERE Email = :email ';
        $sth = $this->connect()->prepare($sql);
        $sth->execute([':email' => $email, ':adress' => $address, ':phone' => $phone, ':zip' => $zip, ':house' => $house, ':password' => $pass, ':gender' => $gender]);
    }

    public function setAllUser($First_Name, $Last_Name, $Email,  $Phone_Number, $Password,  $Birthday, $Gender, $BSN,  $Address, $Zip_Code, $First_Day, $Last_Day)
    {
        $sql = "INSERT INTO users( First_Name, Last_Name, Email, Phone_Number, Password, Birthday, Gender, Role, BSN ,Address, Zip_Code, First_Day, Last_Day) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
        $pfi = $this->connect()->prepare($sql);
        $pfi->execute([$First_Name, $Last_Name, $Email,  $Phone_Number, $Password,  $Birthday, $Gender, $BSN,  $Address, $Zip_Code, $First_Day, $Last_Day ]);
    }
    function updateUserPassword($email,$password)
    {
      $sql = 'UPDATE users SET Password = :password WHERE Email = :email ';
      $sth = $this->connect()->prepare($sql);
      $sth->execute([':email' => $email,':password' => $password]);
    }

    /*public function GetLoginInfo(){  //Link profile info to Loginpgae
  return $this-> $Email, $this-> $Password
} */


    /*    public function getAllUsers($Email) {
        // with prepared statement
        $sql = "SELECT User_Id FROM users WHERE Email = ;
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$Email, $Password]);
        $result = $stmt->fetchAll();

        foreach ($result ) {
            echo $First_Name['fname'] . '<br>';
            echo $Last_Name['lname'] . '<br>';
            echo $Email['email'] . '<br>';
            echo $Phone_Number['phone'] . '<br>';
            echo $Password['password'] . '<br>';
            echo $Birthday['date'] . '<br>';
            echo $Address['address'] . '<br>';
            echo $Zip_Code['zip'] . '<br>';
        }
    }*/

    /*  public function getALLUSERS ($First_Name, $Last_Name, $Email,  $Phone_Number, $Password,  $Birthday,  $Address, $Zip_Code ) {
  $sql = "SELECT *
  FROM 'users'
   WHERE Email = :First_Name , Last_Name = :Last_Name, Email = :Email ,
    Phone_Number = :Phone_Number, Password = :Password, Birthday = :Birthday, Address  = :Address, Zip_Code = :Zip_Code ";
    $pfi = $this->connect()->prepare($sql);
    $pfi->bindValue(':First_Name' , $First_Name);
    $pfi->bindValue(':Last_Name' , $Last_Name );
    $pfi->bindValue(':Email' , $Email);
    $pfi->bindValue(':Phone_Number' , $Phone_Number);
    $pfi->bindValue(':Password' , $Password);
    $pfi->bindValue(':Birthday' , $Birthday);
    $pfi->bindValue(':Address' ,  $Address);
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
  } */
}
