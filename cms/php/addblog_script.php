<?php
session_start();
require ("../../db_connect.php");
if(!isset($_SESSION['username'])){
  echo "<script>window.open('../index.php','_self')</script>";
}
if(isset($_POST["submit"]))
{	
$img1=$_FILES["image"]["tmp_name"];
$img2=$_FILES["b_image"]["tmp_name"];
$text=addslashes($_POST["text"]);
$text=str_replace("http://careercrucible.com/%22http://", "http://",$text);	
$title=addslashes($_POST["title"]);
if(!(getimagesize($img1)))
{
	echo "<script>
		alert('Please select Image properly...');
		window.history.go(-1);
		</script>";
}
else
{
$re=$db->query("SELECT `blog_id` FROM `blog` ORDER BY `blog_id` DESC");
$row=$re->fetch_assoc();
	$temp=getimagesize($img1);
	$name="blog".($row['blog_id']+1)."".image_type_to_extension($temp[2]);
	$target1="../../blog/img/".$name;
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
$re=$db->query("SELECT `blog_id` FROM `blog` ORDER BY `blog_id` DESC");
$row=$re->fetch_assoc();
	$temp=getimagesize($img2);
	$name="blog_b".($row['blog_id']+1)."".image_type_to_extension($temp[2]);
	$target2="../../blog/img/".$name;
	move_uploaded_file($img2, $target2);
	$target2="img/".$name;
}
$in=$_POST["tags"];
$i=0;
foreach($in as $each)
{
	if($i==0)
	$tags=$each;
	else
	$tags.=",".$each;
	$i++;
}
$insert="INSERT INTO `blog` 
VALUES
(NULL,'$title','$text','$target1','$target2','$tags')";
$db->query($insert) or die("Not inserted");
echo "<script>
		alert('Inserted successfully...');
		window.history.go(-1);
		</script>";
}
?>