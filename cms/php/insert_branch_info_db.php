<?php
session_start();
require ("..\..\db_connect.php");
if(!isset($_SESSION['username'])){
  echo "<script>window.open('../index.php','_self')</script>";
}
if(isset($_POST["sub"]))
{
$img1=$_FILES["img1"]["tmp_name"];
$img2=$_FILES["img2"]["tmp_name"];
$branch=mysqli_real_escape_string($db,addslashes($_POST["branch"]));
$about=mysqli_real_escape_string($db,addslashes($_POST["about"]));
$coursework=mysqli_real_escape_string($db,addslashes($_POST["coursework"]));
$job_oppor=mysqli_real_escape_string($db,addslashes($_POST["job_oppor"]));
$in=$_POST["top"];
$i=0;
$top="";
foreach($in as $each)
{
	if($i==0)
	$top=$each;
	else if($each!=null)
	$top.=", ".$each;
	$i++;
}
$s_salary=mysqli_real_escape_string($db,addslashes($_POST["s_salary"]));
$in=$_POST["best"];
$best="";
$i=0;
foreach($in as $each)
{
	if($i==0)
	$best=$each;
	else if($each!=null)
	$best.=", ".$each;
	$i++;
}
if(!(getimagesize($img1)))
{
	echo "<script>
		alert('Please select Image properly...');
		window.history.go(-1);
		</script>";
}
else
{
$re=mysqli_query($db,"SELECT `id` FROM `branch_info` ORDER BY `id` DESC");
$row=mysqli_fetch_assoc($re);
	$temp=getimagesize($img1);
	$name="branch_info".($row['id']+1)."".image_type_to_extension($temp[2]);
	$target1="../../branchinfo/img/".$name;
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
$re=mysqli_query($db,"SELECT `id` FROM `branch_info` ORDER BY `id` DESC");
$row=mysqli_fetch_assoc($re);
	$temp=getimagesize($img2);
	$name="branch_info_b".($row['id']+1)."".image_type_to_extension($temp[2]);
	$target2="../../branchinfo/img/".$name;
	move_uploaded_file($img2, $target2);
	$target2="img/".$name;
}
$insert="INSERT INTO `branch_info` 
VALUES
(NULL,'$target1','$target2','$branch','$about','$coursework','$job_oppor','$top','$s_salary','$best')";
mysqli_query($db,$insert) or die("Not inserted");
echo "<script>
		alert('Inserted successfully...');
		window.history.go(-1);
		</script>";
}
?>