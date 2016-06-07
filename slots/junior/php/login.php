<?php
session_start();
include '../../../db_connect.php';
$email=$_POST['email'];
$password=$_POST['password'];
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$query="SELECT * FROM student WHERE email='$email' and password='$password' ";
$result=mysqli_query($db,$query);
$no_row=mysqli_num_rows($result);
if($no_row == 1)
{
	$row = $result->fetch_assoc();
	// echo"<script>alert('welcome');</script>";
  $_SESSION['user_id']=$row["student_id"];
  $_SESSION['user_name']=$row["name"];
  $_SESSION['role']='junior';
  echo "<script>

  window.location.href='../../junior/student_view.php';
  </script>";
}
else {
  echo $no_row;
  echo $email;
  echo $password;
  echo"alert('user does not exist!')";
}
?>
