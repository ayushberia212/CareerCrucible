<?php
session_start();
include '../../../db_connect.php';
$email=$_POST['email'];
$password=$_POST['password'];

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$query="SELECT * FROM consultant WHERE email='$email' and password='$password' ";
$result=mysqli_query($db,$query);
$no_row=mysqli_num_rows($result);
if($no_row > 0)
{
	$row = $result->fetch_assoc();
	// echo"<script>alert('welcome');</script>";

  $_SESSION['user_id']=$row["Consultant_Id"];
  $_SESSION['user_name']=$row["name"];
  $_SESSION['role']='senior';
  echo "<script>

  window.location.href='../freeslot.php';
  </script>";
}

else {
  echo"alert('user does not exist!')";
}
  
?>
