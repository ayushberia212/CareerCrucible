<?php
session_start();
include '../../db_connect.php';
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['user_id'])){
    if($_SESSION['role']=='junior')
    {
		if(!isset($_GET['slot_id'])){
				header('location: student_view.php');
		}
		else {
				$slot_id=$_GET['slot_id'];
		}
    }
    else if($_SESSION['role']=='senior')
    {
        header('location: ../senior/freeslot.php');
        die();
    }
}
else{
?>
  <script>alert("Login as a junior to Book slots.");</script>
<?php
  header('location: ../');
  die();
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
		<!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
		<link rel="stylesheet" href="css/font-min.css">
		<link rel="stylesheet" href="css/style.student_view.css">
		<link rel="stylesheet" type="text/css" href="css/style.booked_slot.css">
		<script src="js/jquery.min.js"></script>
		<!-- Custom Fonts
		<link rel="stylesheet" href="css/style.login.css" -->
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
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h4>Your slot is booked</h4>
						<br>
						<div class="tile">
							<?php
								$slot_id=$_GET['slot_id'];
								$sql1="SELECT * FROM booked_slot natural join consultant WHERE slot_id=$slot_id";
								$result1=$db->query($sql1);
								$row=$result1->fetch_assoc();
								echo "<p>Your Slot id. : ".$row['slot_id']."</p><br>
									<h3>Details of consultant</h3>
									<p>Name : ".$row['name']."</p><br>
									<p>email : ".$row['email']."</p><br>
									<p>contact no. :".$row['contactno']."</p><br>
									<p>Slot date : ".$row['slot_date']."</p><br>
									<p>slot time : ".$row['from_time']."</p><br>";
							?>
							<a href="details.php" class='btn btn-info' role='button' style="margin-bottom: 10px;">Continue</a>
						</div>
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