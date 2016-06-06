	<?php
session_start();
require ("..\..\db_connect.php");
if(!isset($_SESSION['username'])){
  echo "<script>window.open('../index.php','_self')</script>";
}
if(isset($_POST["submit"]))
{
$img1=$_FILES["image"]["tmp_name"];
$img2=$_FILES["b_image"]["tmp_name"];
$text=mysqli_real_escape_string($db,addslashes($_POST["text"]));
$title=mysqli_real_escape_string($db,addslashes($_POST["title"]));
$link=mysqli_real_escape_string($db,addslashes($_POST["link"]));

if(!(getimagesize($img1)))
{
	echo "<script>
		alert('Please select Image properly...');
		window.history.go(-1);
		</script>";
}
else
{
$re=$db->query("SELECT `news_id` FROM `news` ORDER BY `news_id` DESC");
$row=$re->fetch_assoc();
	$temp=getimagesize($img1);
	$name="news".($row['news_id']+1)."".image_type_to_extension($temp[2]);
	$target1="../../news/img/".$name;
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
$re=$db->query("SELECT `news_id` FROM `news` ORDER BY `news_id` DESC");
$row=$re->fetch_assoc();
	$temp=getimagesize($img2);
	$name="news_b".($row['news_id']+1)."".image_type_to_extension($temp[2]);
	$target2="../../news/img/".$name;
	move_uploaded_file($img2, $target2);
	$target2="img/".$name;
}
$insert="INSERT INTO `news` 
VALUES
(NULL,'$title','$text','$target1','$link','$target2')";
$db->query($insert) or die("Not inserted");
echo "<script>
	 	alert('Inserted successfully...');
		window.history.go(-1);
		</script>";
}
?>