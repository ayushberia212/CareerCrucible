<?php
include "db_connect.php";
if(isset($_POST["sub"]))
{
	$name=$_POST["name"];
	$user=$_POST["username"];
	$pass=$_POST["password"];
	$check="INSERT INTO `signin` (`id`, `name`, `email`, `pass`) VALUES (NULL, '$name', '$user', '$pass')";
	
$result=mysqli_query($db,$check) or die("Problem to insert");
echo "<script>
		alert('Account created successfully! PLease login...');
		window.location.href='login.php';
		</script>";
	
}

?>