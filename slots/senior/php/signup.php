<?php
session_start();
require("../../../db_connect.php");

// $f_name=$_POST['f_name'];
// $m_name=$_POST['m_name'];
// $l_name=$_POST['l_name'];
// $email=$_POST['email'];
// $password=sha1($_POST['password']);
// $phone=$_POST['phone'];
// $dob=$_POST['birth_date'];
// $edu=$_POST['qualification'];

$name=$_POST['name'];
$email=$_POST['email'];
$password=sha1($_POST['password']);
$phone=$_POST['phone'];
$college=$_POST['college'];
$degree=$_POST['degree'];
$spec=$_POST['spec'];
$passyear=$_POST['passyear'];
$lang=$_POST['lang'];
$langs = "";
foreach ($lang as $l) {
    $langs = $langs.$l." "; 
}

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$query="SELECT * FROM consultant WHERE email='$email' ";
$result=mysqli_query($db,$query);
$no_row=mysqli_num_rows($result);
if($no_row > 0)
{
  echo "<script>
  alert('Username already exist');
  window.location.href='../index.php';
  </script>";
}
else {
 // $query="INSERT INTO consultant (name, email, password, phone, college, degree, specialization, passing_year) VALUES ('$f_name','$m_name','$l_name','$email','$password','$phone','$dob','$edu')";
//$result=mysqli_query($db,$query);
// $result=mysqli_query($db,$query);

// prepare and bind
$sql = "INSERT INTO consultant (name,email,password,contactno,college,degree,specialization,passing_year,languages) VALUES ('$name', '$email', '$password', '$phone', '$college', '$degree', '$spec', '$passyear','$langs')";
// $stmt->bind_param($name, $email, $password, $phone, $college, $degree, $spec, $passyear);

$result=$db->query($sql);

echo($result);
echo ("hi");
//print_r($array);
if($result)
{
	?>
        <script>alert('successfully registered ');</script>
        <?php

		// $_SESSION['consultant_id']=$username;
    	header('location: ../index.php');
}
else
{
	?>
        <script>alert('registeration failed ');</script>
        <?php
}
}
?>
