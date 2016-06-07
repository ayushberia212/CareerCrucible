<?php
session_start();
include '../../../db_connect.php';
if(isset($_SESSION['user_id'])){
    if($_SESSION['role']=='junior')
    {
        header('location: ../junior/student_view.php');
        die();
    }
}
else
{
    header('location: ../../');
    die();
}
$slot_id=$_GET['id'];
$con_id=$_SESSION['user_id'];
if (!$db) {
    	die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM freeslot WHERE	slot_id='$slot_id' ";
$result = $db->query($sql);
if($result){
	echo"<script>alert('slot is deleted')</script>";
	header('location: ..\freeslot.php');
}
?>