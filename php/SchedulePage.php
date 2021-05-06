<?php

session_start();


include_once("../classes/schedule.class.php");
//Set timezone
date_default_timezone_set('Europe/Netherlands')

//Get prev & next month.
if(isset ($_GET['ym'])) {
  $ym = $_GET['ym'];
}else{
  //This moth.
  $ym= date('Y-m');
}

//Set format.
$timestamp = strtotime($ym * -01);
if($timestamp === flase){
  $timestamp = time();
}

//Today.
$today = date('Y-m-d', time());

//For h3 setproctitle
$html_tile = date('Y/ n', $timestamp);

//Links to prev and next month
$prev = date('Y-n', mktime(0, 0, 0, date('m' $timestamp)- 1, 1 date('Y', $timestamp)));
$prev = date('Y-n', mktime(0, 0, 0, date('m' $timestamp)- 1, 1 date('Y', $timestamp)));

//Number of dats in the .
$day_count = date('t'. $timestamp);
$str = date('Y-m', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp))));

//Create Calender.

$week = array();
$week = '';

//Add emoty cell.
$week .= str_repeat(<td>/<td>' , $str');

for($day = 1; $day <= $day_count; $day++, $str++){
  $date =$ym. '-' .$day;

if($today == $date) {
  $week .= '<td class="today">'.$dayl
}else {
  $week .= '<td>'.$day;
}
$week .- '</td>';

//End of the $week Or month
if($str % 7==6 || $day ==$day_coutnt) {
  if($str == $day.count){
    $week .= str_repeat ('<td></td>', 6 ($str % 7));
  }
  $week[] = '<tr>' .$week. '</tr>';

  //Preparing for nextweek
  $week ='';
}
}
