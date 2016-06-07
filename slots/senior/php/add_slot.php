<?php
session_start();
include '../../../db_connect.php';
if(isset($_SESSION['user_id'])){
    if($_SESSION['role']=='junior')
    {
        header('location: ../junior/student_view.php');
        die();
    }
}
else
{
    header('location: ../../');
    die();
}
$slot_date=$_POST['slot_date'];
$from_time=$_POST['from_time'];
$num_slot=$_POST['num_slot']; 
$con_id=$_SESSION['user_id'];
for($i=0;$i<$num_slot;$i++){
$to_time = date("H:i:s", strtotime( "$from_time + 20 mins"));

$query="INSERT INTO freeslot (Consultant_Id,slot_date,from_time,to_time) VALUES ('$con_id','$slot_date','$from_time','$to_time')";
$from_time=$to_time;
$result=mysqli_query($db,$query);
echo($result);

if($result)
{
  ?>
      <script>alert('slot added successfully ');</script>
      <?php
    header('location: ../freeslot.php');
}
else
{
  ?>
      <script>alert('fail to add slot ');</script>
      <?php
}

  }
?>
