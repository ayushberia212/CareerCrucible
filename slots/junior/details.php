<?php
session_start();
include '../../db_connect.php';
if (!$db) {
die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['user_id'])){
    if($_SESSION['role']=='senior')
    {
        header('location: ../senior/freeslot.php');
        die();
    }
}
else{
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
		<title>User Details</title>
		<!-- <link rel="stylesheet" href="css/style.login.css" > -->
		<!-- we use cdn but you can also include local files located in css directory-->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="../slots/css/style.student_view.css"> -->
		<link rel="stylesheet" type="text/css" href="css/style.consultant_prof.css">
		<link rel="stylesheet" href="css/style.details.css">

        <link rel="stylesheet" href="css/mandatoryTheme.css">
		<!-- <link rel="stylesheet" href="css/style.student_view.css"> -->
		<!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
		<link rel="stylesheet" href="css/font-min.css">
		
		<script src="js/jquery.min.js"></script>
		<!-- Custom Fonts 
		<link rel="stylesheet" href="css/style.login.css" > -->
		<!-- Custom CSS -->
		<link href=".css/simple-sidebar.css" rel="stylesheet">
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
			<p>User Details</p>
		</div>

		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="login-top sign-top"> 
											<form action="php/get_details.php" method="post">
												<label>Rank : </label>
												<input id="rank" name="rank" type="text"  placeholder="Rank" required="" /><br>
												<label>Jee Main Marks : </label>
												<input id="main" name="main" type="text"  placeholder="Jee Main Marks" required="" /><br>
												<label>Jee Advanced Marks : </label>
												<input id="adv" name="adv" type="text"  placeholder="Jee Advanced Marks" required="" /><br>
												<label>Bits Marks : </label>
												<input id="bits" name="bits" type="text"  placeholder="Bits Marks" required="" /><br>
												<!-- <input id="qualification" name="qualification" type="text" class="qualification" placeholder="B-tech/B.com/M.phil" required=""/>  -->
												<label>Other1 Exam Name : </label>
												<input id="on1" name="on1" type="text"  placeholder="Other Exam name" required="" /><br>
												<label>Other1 Exam Marks : </label>
												<input id="om1" name="om1" type="text"  placeholder="Other Exam marks" required="" /><br>
												<label>Other2 Exam Name : </label>
												<input id="on2" name="on2" type="text" placeholder="Other Exam name" required="" /><br>
												<label>Other2 Exam Marks : </label>
												<input id="om2" name="om2" type="text"  placeholder="Other Exam marks" required="" /><br>
												<label>Other3 Exam Name : </label>
												<input id="on3" name="on3" type="text" placeholder="Other Exam name" required="" /><br>
												<label>Other3 Exam Marks : </label>
												<input id="om3" name="om3" type="text"  placeholder="Other Exam marks" required="" /><br>
												<label>Board Exam marks: </label>
												<input id="board" name="board" type="text"  placeholder="Board Exam marks" required="" /><br>
												<label>Branch Preference1: </label>
												<input id="bp1" name="bp1" type="text"  placeholder="Branch preference 1" required="" /><br>
												<label>Branch Preference2: </label>
												<input id="bp2" name="bp2" type="text"  placeholder="Branch preference 2" required="" /><br>
												<label>Branch Preference2: </label>
												<input id="bp3" name="bp3" type="text"  placeholder="Branch preference 3" required="" /><br>
												<label>State Preference: </label>
												<select id="state" name="state">
													<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
													<option value="Andhra Pradesh">Andhra Pradesh</option>
													<option value="Arunachal Pradesh">Arunachal Pradesh</option>
													<option value="Assam">Assam</option>
													<option value="Bihar">Bihar</option>
													<option value="Chandigarh">Chandigarh</option>
													<option value="Chhattisgarh">Chhattisgarh</option>
													<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
													<option value="Daman and Diu">Daman and Diu</option>
													<option value="Delhi">Delhi</option>
													<option value="Goa">Goa</option>
													<option value="Gujarat">Gujarat</option>
													<option value="Haryana">Haryana</option>
													<option value="Himachal Pradesh">Himachal Pradesh</option>
													<option value="Jammu and Kashmir">Jammu and Kashmir</option>
													<option value="Jharkhand">Jharkhand</option>
													<option value="Karnataka">Karnataka</option>
													<option value="Kerala">Kerala</option>
													<option value="Lakshadweep">Lakshadweep</option>
													<option value="Madhya Pradesh">Madhya Pradesh</option>
													<option value="Maharashtra">Maharashtra</option>
													<option value="Manipur">Manipur</option>
													<option value="Meghalaya">Meghalaya</option>
													<option value="Mizoram">Mizoram</option>
													<option value="Nagaland">Nagaland</option>
													<option value="Orissa">Orissa</option>
													<option value="Pondicherry">Pondicherry</option>
													<option value="Punjab">Punjab</option>
													<option value="Rajasthan">Rajasthan</option>
													<option value="Sikkim">Sikkim</option>
													<option value="Tamil Nadu">Tamil Nadu</option>
													<option value="Tripura">Tripura</option>
													<option value="Uttaranchal">Uttaranchal</option>
													<option value="Uttar Pradesh">Uttar Pradesh</option>
													<option value="West Bengal">West Bengal</option>
												</select>
												<br>
												<label>College Preference1: </label>
												<input id="cp1" name="cp1" type="text"  placeholder="College preference 1" required="" /><br>
												<label>College Preference2: </label>
												<input id="cp2" name="cp2" type="text"  placeholder="College preference 2" required="" /><br>
												<label>College Preference2: </label>
												<input id="cp3" name="cp3" type="text"  placeholder="College preference 3" required="" /><br>
												<label>Comments: </label>
												<textarea name="com" id="com" cols="30" rows="10" placeholder="Write Comments Here..."></textarea>
												<div class="login-bottom">
													<div class="submit">
														<input class="button" type="submit" value="SUBMIT" name="login" />
													</div>
												</form>
												<!--<ul class="loginAlt">
														<li>
																<span style="color:#777" class="or">OR</span>
																<span style="line-height:10px;float:right;font-size:10px;height:20px;margin:10px;font-family:'Roboto';text-align:right;display:block">CONTINUE<BR>WITH</span>
														</li>
														<li><a href="#" class="button" style="background-color:#3b5998"><span class='fa'>&#xf230;</span></a></li>
														<li><a href="#" class="ggl button" style="background-color: #ea4e55"><span class="fa">&#xf0d5;</span></a></li>
												</ul>-->
												<div class="clear"></div>
											</div>
											<!--
												<div class="login-bottom">
														<div class="submit">
																<input type="submit" value="SIGNUP" name="signup" />
												</form>
											</div>
											<ul class="loginAlt">
													<li>
															<p>Or login with</p>
													</li>
													<li><a href="#"><span class='fa'>&#xf230;</span></a></li>
													<li><a href="#" class="ggl" style=" background-color: #ea4e55"><span class="fa">&#xf0d5;</span></a></li>
											</ul>
											<div class="clear"></div>
										</div>
										-->
									</div>
				</div>
			</div>
		</div>
		<!-- /#page-content-wrapper -->
		
		
		<?php
			include "../../footer.php"
		?>
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