<?php
session_start();
include '../../../db_connect.php';
if (!$db) {
  die("Connection failed: ".mysqli_connect_error());
}

if(isset($_SESSION['user_id'])){
    if($_SESSION['role']=='senior')
    {
        header('location: ../../senior/freeslot.php');
        die();
    }
}
else{
  header('location: ../');
  ?>
  <script>alert("Login as a junior to Book slots.");</script>
  <?php
  die();
}
$slot_id=$_GET["slot_id"];
$con_id=$_GET["con_id"];
$sql1="SELECT slot_date,from_time,to_time FROM freeslot WHERE slot_id=$slot_id";
$result=$db->query($sql1);
$row=$result->fetch_assoc();
$slot_date=$row['slot_date'];
$from_time=$row['from_time'];
$to_time=$row['to_time'];

$user=$_SESSION['user_id'];
$sql="INSERT INTO booked_slot(slot_id,user_id,Consultant_Id,slot_date,from_time,to_time) VALUES ('$slot_id','$user','$con_id','$slot_date','$from_time','$to_time')";
  $result1=$db->query($sql);
  echo($result1);
  if($result1){
  echo ("hi");

  $sql1="DELETE FROM freeslot WHERE slot_id=$slot_id";
  $result1=$db->query($sql1);

  if($result1)
  {
    ?>
        <script>alert('successfully registered ');</script>
        <?php
      header('location: ../booked_slot.php?slot_id='.$slot_id);
  }
  else
  {
    ?>
        <script>alert('registeration failed ');</script>
        <?php
  }


  }



?>
