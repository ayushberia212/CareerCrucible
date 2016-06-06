<?php
session_start();
require ("..\..\db_connect.php");
if(!isset($_SESSION['username'])){
  echo "<script>window.open('../index.php','_self')</script>";
}
if(isset($_POST["sub"]))
{
$coverimg=$_FILES["coverimg"]["tmp_name"];
$iconimg=$_FILES["iconimg"]["tmp_name"];
$clg_plac=mysqli_real_escape_string($db,addslashes($_POST["clg_plac"]));
$clg_loc=mysqli_real_escape_string($db,addslashes($_POST["clg_loc"]));
$clg_name=mysqli_real_escape_string($db,addslashes($_POST["clg_name"]));
$clg_about=mysqli_real_escape_string($db,addslashes($_POST["clg_about"]));
$clg_youtube=mysqli_real_escape_string($db,addslashes($_POST["clg_youtube"]));
$clg_website=mysqli_real_escape_string($db,addslashes($_POST["clg_website"]));
$clg_addr=mysqli_real_escape_string($db,addslashes($_POST["clg_addr"]));
$clg_email=mysqli_real_escape_string($db,addslashes($_POST["clg_email"]));
$clg_number=mysqli_real_escape_string($db,addslashes($_POST["clg_number"]));
$clg_area=mysqli_real_escape_string($db,addslashes($_POST["clg_area"]));
$clg_area_extra=mysqli_real_escape_string($db,addslashes($_POST["clg_area_extra"]));
$clg_admission=mysqli_real_escape_string($db,addslashes($_POST["clg_admission"]));
$clg_total_fee=mysqli_real_escape_string($db,addslashes($_POST["clg_total_fee"]));
$clg_total_hostel=mysqli_real_escape_string($db,addslashes($_POST["clg_total_hostel"]));
$clg_fee_link=mysqli_real_escape_string($db,addslashes($_POST["clg_total_link"]));
$img1=$_FILES["img1"]["tmp_name"];
$img2=$_FILES["img2"]["tmp_name"];
$img3=$_FILES["img3"]["tmp_name"];
$img4=$_FILES["img4"]["tmp_name"];
$img5=$_FILES["img5"]["tmp_name"];
//to move image and rename it
$re=mysqli_query($db,"SELECT clg_id FROM college_info ORDER BY clg_id DESC");
$row=mysqli_fetch_assoc($re);

if($coverimg!=null){
	if(!(getimagesize($coverimg)))
	{
		echo "<script>
			alert('Please select Image properly...');
			window.history.go(-1);
			</script>";
	}
	else
	{
		$temp=getimagesize($coverimg);
		$name="co".($row['clg_id']+1)."".image_type_to_extension($temp[2]);
		$covtarget="../../engcolleges/php/pics/".$name;
		move_uploaded_file($coverimg, $covtarget);	
	}
}
else
	$covtarget=null;


if($iconimg!=null){
	if(!(getimagesize($iconimg)))
	{
		echo "<script>
			alert('Please select Image properly...');
			window.history.go(-1);
			</script>";
	}
	else
	{
		$temp=getimagesize($iconimg);
		$name="i".($row['clg_id']+1)."".image_type_to_extension($temp[2]);
		$icontargetm="../../engcolleges/php/pics/".$name;
		move_uploaded_file($iconimg, $icontargetm);	
		$icontarget="../engcolleges/php/pics/".$name;
	}
}
else
{
	$icontargetm=null;
	$icontarget=null;
}
if($img1!=null){
	if(!(getimagesize($img1)))
	{
		echo "<script>
			alert('Please select Image properly...');
			window.history.go(-1);
			</script>";
	}
	else
	{
		$temp=getimagesize($img1);
		$name="a".($row['clg_id']+1)."".image_type_to_extension($temp[2]);
		$target1="../../engcolleges/php/pics/".$name;
		move_uploaded_file($img1, $target1);	
	}
}
else
	$target1=null;
if($img2!=null){
	if(!(getimagesize($img2)))
	{
		echo "<script>
			alert('Please select Image properly...');
			window.history.go(-1);
			</script>";
	}
	else
	{
		$temp=getimagesize($img2);
		$name="b".($row['clg_id']+1)."".image_type_to_extension($temp[2]);
		$target2="../../engcolleges/php/pics/".$name;
		move_uploaded_file($img2, $target2);
	}
}
else
	$target2=null;
if($img3!=null){
	if(!(getimagesize($img3)))
	{
		echo "<script>
			alert('Please select Image properly...');
			window.history.go(-1);
			</script>";
	}
	else
	{
		$temp=getimagesize($img3);
		$name="c".($row['clg_id']+1)."".image_type_to_extension($temp[2]);
		$target3="../../engcolleges/php/pics/".$name;
		move_uploaded_file($img3, $target3);
	}
}
else
	$target3=null;
if($img4!=null){
	if(!(getimagesize($img4)))
	{
		echo "<script>
			alert('Please select Image properly...');
			window.history.go(-1);
			</script>";
	}
	else
	{
		$temp=getimagesize($img4);
		$name="d".($row['clg_id']+1)."".image_type_to_extension($temp[2]);
		$target4="../../engcolleges/php/pics/".$name;
		move_uploaded_file($img4, $target4);
	}
}
else
	$target4=null;
if($img5!=null){
	if(!(getimagesize($img5)))
	{
		echo "<script>
			alert('Please select Image properly...');
			window.history.go(-1);
			</script>";
	}
	else
	{
		$temp=getimagesize($img5);
		$name="e".($row['clg_id']+1)."".image_type_to_extension($temp[2]);
		$target5="../../engcolleges/php/pics/".$name;
		move_uploaded_file($img5, $target5);
	}
}
else
	$target5=null;

$in=$_POST["course"];
$i=0;

foreach($in as $each)
{
	if($i==0)
	$course=$each;
	else
	$course.=",".$each;
	$i++;
}

$in=$_POST["arch"];
$i=0;
foreach($in as $each)
{
	if($i==0)
	$arch=$each;
	else
	$arch.=",".$each;
	$i++;
}

$in=$_POST["mtech"];
$i=0;
foreach($in as $each)
{
	if($i==0)
	$mtech=$each;
	else
	$mtech.=",".$each;
	$i++;
}

$in=$_POST["msc"];
$i=0;
foreach($in as $each)
{
	if($i==0)
	$msc=$each;
	else
	$msc.=",".$each;
	$i++;
}

//placement
$in1=$_POST["placement_branch"];
$in2=$_POST["placement_max_sal"];
$in3=$_POST["placement_avg_sal"];
$i=0;
for($j=0;$j<sizeof($in);$j++)
{
	if($i==0)
	$placement_branch=$in1[$j].",".$in2[$j].",".$in3[$j];
	else
	$placement_branch.=";".$in1[$j].",".$in2[$j].",".$in3[$j];
	$i++;
}
$in=$_POST["past_recruties"];
$i=0;
foreach($in as $each)
{
	if($i==0)
	$past_recruiters=$each;
	else
	$past_recruiters.=",".$each;
	$i++;
}
$in=$_POST["top_recruties"];
$i=0;
foreach($in as $each)
{
	if($i==0)
	$top_recruiters=$each;
	else
	$top_recruiters.=",".$each;
	$i++;
}

$insert="INSERT INTO college_info 
( `clg_plac`,`clg_loc`,`clg_name`, `clg_about`,`clg_youtube`, `clg_website`, `clg_addr`, `clg_email`, `clg_number`, `clg_area`, `clg_area_extra`, `clg_admission`, `clg_total_fee`, `clg_total_hostel`, `clg_fee_link`,`clg_img1`, `clg_img2`, `clg_img3`, `clg_img4`, `clg_img5`, `clg_b_tech`, `clg_b_arch`, `clg_m_tech`, `clg_m_sc`, `clg_placement_branch`, `clg_placement_past_r`, `clg_placement_top_r`,clg_cover,clg_icon)
 VALUES 
('$clg_plac','$clg_loc','$clg_name', '$clg_about', '$clg_youtube', '$clg_website', '$clg_addr', '$clg_email', '$clg_number', '$clg_area', '$clg_area_extra', '$clg_admission', '$clg_total_fee', '$clg_total_hostel', '$clg_fee_link','$target1', '$target2', '$target3', '$target4', '$target5', '$course', '$arch', '$mtech', '$msc', '$placement_branch', '$past_recruiters', '$top_recruiters','$covtarget','$icontarget')";
echo $insert;
mysqli_query($db,$insert) or die(mysqli_error($db));
echo "<script>
		alert('Inserted successfully...');
		window.history.go(-1);
		</script>";
}
?>