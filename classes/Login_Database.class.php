<?php
include_once("database.class.php");

class Login_Connection extends dbConnection
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
    
}
