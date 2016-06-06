<?php
//to check login password
include "db_connect.php";
if(isset($_POST["sub"]))
{
	$user=$_POST["username"];
	$pass=$_POST["password"];
	$check="SELECT * FROM signin WHERE `email`='$user' AND `pass`='$pass'";
$result=mysqli_query($db,$check);

$count=mysqli_num_rows($result);
	if(!($count>0))
	{
		echo "<script>
		alert('Wrong username of Password');
		window.location.href='login.php';
		</script>";
	}
	else{
	$_SESSION["username"]=$user;
	header("location:insert_clg_data.php");
	}
}

?>