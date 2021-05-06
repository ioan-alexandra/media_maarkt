<?php
require '../includes/init.php';
require '../classes/user.class.php';
require '../class/schedule.class.php';
require '../php/Table.Page.php';

?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="icon" type="image/png"
    href="../media/favicon.ico">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
  <div class="sidebar">
    <img src="../media/logo.jpg" />
    <br />
    <button><i class="fa fa-user"></i> Profile page</button> <br />
    <button><i class="fa fa-calendar"></i> Schedule</button>
    <a href = "../php/logout.php"> <button type="button"><span class="iconify" data-icon="fa-solid:door-open" data-inline="false"></span> Log out</button></a>
  </div>

  <div class = "container">
    <ul.class = "list-inline">
    <li.class="List-inline-item><a.href = "#".class="btn.btn-link">&lt; .prev</a></li>
    <li.class="List-inline-item><span.class ="title" >August, 2018</span></li>
    <li.class="List-inline-item><a.href = "#".class="btn.btn-link"> next.&lt; </a></li>
     <br>
     <table class = "table.table-bordered"

     </table>
     <tr>
     <th></th>
     <th>Monday</th>
     <th>Tuesday</th>
     <th>Wednesday</th>
     <th>Thursday</th>
     <th>Friday</th>
     <th>Saturday</th>
     <th>Sunday</th>
     </tr>

<tr>
    <td></td>
    <td>1</td>
    <td>2</td>
	<td>3</td>
    <td>4</td>
	<td>5</td>
    <td>6</td>
	<td>7</td>
 </tr>
 <tr>
    <td></td>
    <td>8</td>
    <td>9</td>
	<td>10</td>
    <td>11</td>
	<td>12</td>
    <td>13</td>
	<td>14</td>
 </tr>
 <tr>
    <td></td>
    <td>15</td>
    <td>16</td>
	<td>17</td>
    <td>18</td>
	<td>19</td>
    <td>29</td>
	<td>21</td>
 </tr>
 <tr>
    <td></td>
    <td>22</td>
    <td>23</td>
	<td>24</td>
    <td>25</td>
	<td>26</td>
    <td>27</td>
	<td>28</td>
 </tr>
  <tr>
    <td></td>
    <td>29</td>
    <td>30</td>

 </tr>

 <h3>Shift</h3>

 <table style="width:100%">
     <tr>
         <th>Employee_Id</th>
         <th>Shift_Types</th>
         <th>Shift_Day</th>

       </tr>
   <?php
       foreach ($Shift->GetSchedule($_SESSION['userID']) as $Employee_Id => $shift)
       {
   ?>
       <tr>
           <td><?php echo $shift->Employee_Id(); ?></td>
           <td><?php echo $shift->Shift_Types(); ?></td>
           <td><?php echo $shift->Shift_Day(); ?></td>

          
       </tr>
   <?php
       }
   ?>

       </tr>


    </div>
  </body>
  </html>
