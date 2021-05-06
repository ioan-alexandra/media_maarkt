<?php
include_once("database.class.php");
include_once ("user.class.php");

class ScheduleDB extends dbConnection
{
  public function Schedule(])
  {
    sql = "SELECT * FROM  shift";
    $sche = $this ->dbh->connect()->prapare($sql)
    $sche->execute();
    $result = che -> fetchAll();

    $shift = [];
    foreach ($result as $row) {
      $shift[$row['Employee_Id']] = new shift($row['Employee_Id'],
      $row[Shift_Types], $row[Shift_Day]);
    }
    return $shift;
  }

  public fucntion GetSchedule($Employee_Id)
  {
    $sql = 'SELECT Shift_Types, Shift_Day FROM shift WHERE Employee_Id = :Employee_Id ';
    $sth = $this->connect()->prepare($sql);
    $sth->execute([':Employee_Id' => $Employee_Id]);
    //      Fetch first row as associate array
    $result = $sth->fetch();
    return $result;
  }

}
