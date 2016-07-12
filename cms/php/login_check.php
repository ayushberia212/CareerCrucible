<?php
//to check login password
session_start();		
require ("../../db_connect.php");
if(isset($_POST["sub"]))
{
	$user=mysqli_real_escape_string($db,$_POST["username"]);
	$pass=mysqli_real_escape_string($db,$_POST["password"]);
	$check="SELECT * FROM signin WHERE `email`='$user' AND `pass`='$pass'";
	$result=mysqli_query($db,$check);
	$count=mysqli_num_rows($result);
	if(!($count>0))
	{
		echo "<script>
		alert('Wrong username or Password');
		window.location.href='../index.php';
		</script>";
	}
	else{
	$_SESSION['username']=$user;
	header("location:../temp/addnews.php");
	}
}
else
{
  	echo "<script>window.open('../index.php','_self')</script>";
}
?>