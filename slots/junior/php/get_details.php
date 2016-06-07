<?php
session_start();
unset($_SESSION['consultant_id']);
include '../../../db_connect.php';
if(isset($_SESSION['user_id'])){
    if($_SESSION['role']=='senior')
    {
        header('location: ../../senior/freeslot.php');
        die();
    }
}
else{
  header('location: ../');
  ?>
  <script>alert("Login as a junior to Book slots.");</script>
  <?php
  die();
}
$id;
$id=$_SESSION["user_id"]; 
$rank=$_POST['rank'];
$main=$_POST['main'];
$adv=$_POST['adv'];
$bits=$_POST['bits'];
$on1=$_POST['on1'];
$om1=$_POST['om1'];
$on2=$_POST['on2'];
$om2=$_POST['om2'];
$on3=$_POST['on3'];
$om3=$_POST['om3'];
$board=$_POST['board'];
$bp1=$_POST['bp1'];
$bp2=$_POST['bp2'];
$bp3=$_POST['bp3'];
$state=$_POST['state'];
$cp1=$_POST['cp1'];
$cp2=$_POST['cp2'];
$cp3=$_POST['cp3'];
$comment=$_POST['com'];

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$query="SELECT * FROM student_details WHERE id='$id' ";
$result=mysqli_query($db,$query);
$no_row=mysqli_num_rows($result);
if($no_row > 0)
{
  echo "<script>
  alert('Details already exist');
  window.location.href='../index.php';
  </script>";
}
else {

// prepare and bind

$sql = "INSERT INTO `student_details` (`id`, `rank`, `main`, `adv`, `bits`, `other1name`, `other1marks`, `other2name`, `other2marks`, `other3name`, `other3marks`, `board`, `branch1`, `branch2`, `branch3`, `state`, `college1`, `college2`, `college3`, `comment`) VALUES ('$id', '$rank', '$main', '$adv', '$bits', '$on1', '$om1', '$on2', '$om2', '$on3', '$om3', '$board', '$bp1', '$bp2', '$bp3', '$state', '$cp1', '$cp2', '$cp3', '$comment')";

$result=$db->query($sql);
if($result)
{
	?>
        <script>alert('successfully registered ');</script>
        <?php
        header('location: ../student_view.php');
}
else
{
	?>
        <script>alert('registeration failed ');</script>
        <?php
}
}
?>
