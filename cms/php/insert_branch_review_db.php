<?php
session_start();
include "..\..\db_connect.php";
if(!isset($_SESSION['username'])){
  echo "<script>window.open('../index.php','_self')</script>";
}
if(isset($_POST["sub"]))
{
$img1=$_FILES["img1"]["tmp_name"];
$img2=$_FILES["img2"]["tmp_name"];
$clg=mysqli_real_escape_string($db,addslashes($_POST["clg"]));
$branch=mysqli_real_escape_string($db,addslashes($_POST["branch"]));
$intro=mysqli_real_escape_string($db,addslashes($_POST["intro"]));
$infa_labs=mysqli_real_escape_string($db,addslashes($_POST["infa_labs"]));
$branch_scope=mysqli_real_escape_string($db,addslashes($_POST["branch_scope"]));
$branch_faculty=mysqli_real_escape_string($db,addslashes($_POST["branch_faculty"]));
$col=mysqli_real_escape_string($db,addslashes($_POST["col"]));
$about=mysqli_real_escape_string($db,addslashes($_POST["about"]));
if(!(getimagesize($img1)))
{
	echo "<script>
		alert('Please select Image properly...');
		window.history.go(-1);
		</script>";
}
else
{
$re=mysqli_query($db,"SELECT `id` FROM `branch_review` ORDER BY `id` DESC");
$row=mysqli_fetch_assoc($re);
	$temp=getimagesize($img1);
	$name="branch_info".($row['id']+1)."".image_type_to_extension($temp[2]);
	$target1="../../branchreview/img/".$name;
	move_uploaded_file($img1, $target1);
	$target1="img/".$name;
}
if(!(getimagesize($img2)))
{
	echo "<script>
		alert('Please select Image properly...');
		window.history.go(-1);
		</script>";
}
else
{
$re=mysqli_query($db,"SELECT `id` FROM `branch_review` ORDER BY `id` DESC");
$row=mysqli_fetch_assoc($re);
	$temp=getimagesize($img2);
	$name="branch_info_b".($row['id']+1)."".image_type_to_extension($temp[2]);
	$target2="../../branchreview/img/".$name;
	move_uploaded_file($img2, $target2);
	$target2="img/".$name;
}
 
$insert="INSERT INTO `branch_review` 
VALUES
(NULL,'$target1','$target2','$clg','$branch','$intro','$infa_labs','$branch_scope','$branch_faculty','$col','$about')";
echo $insert;
mysqli_query($db,$insert) or die("Not inserted");
echo "<script>
		alert('Inserted successfully...');
		window.history.go(-1);
		</script>";

}
?>