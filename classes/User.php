<?php  //CLASS FOR GETTING ID
include_once("Login_Database.class.php");
class User extends Login_Connection

  private $User_Id;

  public function __construct($User_Id){
    $this->$User_Id = $User_Id;
  } */

/*  public function Data($User_Id)
  {
    $sql = "SELECT * FROM users WHERE User_Id = ?";
    $stmt = $this->connect()->prepare($sql);

    $stmt->execute([$User_Id]);
    $result = $stmt->fetchAll();

    return $result;
    //foreach ($result as $name) {
    //    echo $name['uname'] . '<br>';
    //    echo $name['dob'] . '<br>';
    //}
    }

    public function getUsers() {
        // not with prepared statement
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
} */
//to insert into the database
