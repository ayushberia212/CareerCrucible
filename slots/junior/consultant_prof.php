<?php
session_start();
include '../../db_connect.php';
$con_id;
if (!$db) {
die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['user_id'])){
    if($_SESSION['role']=='junior')
    {
		if(!isset($_GET['id'])){
				header('location: student_view.php');
		}
		else {
				$con_id=$_GET['id'];
		}
    }
    else if($_SESSION['role']=='senior')
    {
        header('location: ../senior/freeslot.php');
        die();
    }
}
else{
	if(!isset($_GET['id'])){
				header('location: student_view.php');
		}
		else {
				$con_id=$_GET['id'];
		}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Consultant free slots</title>
		<!-- <link rel="stylesheet" href="css/style.login.css" > -->
		<!-- we use cdn but you can also include local files located in css directory-->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.student_view.css">
		<link rel="stylesheet" type="text/css" href="css/style.consultant_prof.css">
		<link rel="stylesheet" href="../slots/css/style.login.css">
		<!-- <link rel="stylesheet" href="css/style.student_view.css"> -->
		<!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
		<link rel="stylesheet" href="css/font-min.css">
		
		<script src="js/jquery.min.js"></script>
		<!-- Custom Fonts 
		<link rel="stylesheet" href="css/style.login.css" > -->
		<!-- Custom CSS -->
		<link href="css/simple-sidebar.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php
			include "../../header.php"
		?>
		
		
		
		<!-- Page Content -->
		
		<div class="page-title">
			<p>Free Slots</p>
		</div>

		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						
						<?php
						
						$sql = "SELECT slot_id,Consultant_Id, slot_date, from_time, to_time FROM freeslot WHERE Consultant_Id='$con_id' ";
						$result = $db->query($sql);
						if ($result->num_rows > 0) {
						echo"<table class='table-condensed'>";
							echo "<tr class='table-header'><th>Consultant ID</th><th>Slot Date</th><th>From Time</th><th>To Time</th><th></th></tr>";
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo "<tr><td>".$row["Consultant_Id"]."&nbsp"." </td><td>".$row["slot_date"]." </td><td>".$row["from_time"]." </td><td>".$row["to_time"]."</td><td><a href='php/book_slot.php?con_id=".$con_id."&slot_id=".$row['slot_id']."'class='btn btn-info' role='button'>Book</a></td></tr>";
							}
						echo "</table>";
						} else {
						echo "0 results";
						}
						?>
						
					</div>
				</div>
			</div>
		</div>
		<?php
			include "../../footer.php"
		?>
		<!-- /#page-content-wrapper -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Morris Charts JavaScript -->
		<script src="js/plugins/morris/raphael.min.js"></script>
		<script src="js/plugins/morris/morris.min.js"></script>
		<script src="js/plugins/morris/morris-data.js"></script>
	</body>
</html>