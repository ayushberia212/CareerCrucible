<?php
include "..\..\db_connect.php";
if(isset($_POST["sub"]))
{
	$name=mysqli_real_escape_string($db,$_POST["name"]);
	$user=mysqli_real_escape_string($db,$_POST["username"]);
	$pass=mysqli_real_escape_string($db,$_POST["password"]);
	$check="INSERT INTO `signin` (`id`, `name`, `email`, `pass`) VALUES (NULL, '$name', '$user', '$pass')";
	
$result=mysqli_query($db,$check) or die("Problem to insert");
echo "<script>
		alert('Account created successfully! PLease login...');
		window.location.href='../index.php';
		</script>";
	
}
else{
  echo "<script>window.open('../temp/signup.php','_self')</script>";
}
?>