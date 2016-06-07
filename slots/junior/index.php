<?php
session_start();
require("../../db_connect.php");
if (!$db) {
die("Connection failed: " . mysqli_connect_error());
}
 
if(isset($_SESSION['user_id'])){
    if($_SESSION['role']=='junior')
    {
        header('location: ../junior/student_view.php');
        die();
    }
    else if($_SESSION['role']=='senior')
    {
        header('location: ../senior/freeslot.php');
        die();
    }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login | Career Crucible</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="all,follow">
		<!-- Bootstrap and Font Awesome css-->
		<!-- we use cdn but you can also include local files located in css directory-->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/mandatoryTheme.css">
		<!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
		<link rel="stylesheet" href="css/font-min.css">
		<!-- theme stylesheet-->
		<link rel="stylesheet" href="css/style.login.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true // 100% fit in a container
				});
			});
		</script>
		<!-- Tweaks for older IEs-->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	</head>
	<body data-spy="scroll" data-target="#navigation" data-offset="120">
		<?php
			include '../../header.php';
		?>
		<!-- main -->
		<div class="main">
			<h2 class="heading">Login / signup </h2>
			<div class="login-form ">
				<div class="login-right section-gray" style="background:#454545">
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>LOGIN</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>SIGN UP</span></li>
								<div class="clear"> </div>
							</ul>
							<div class="resp-tabs-container " style="background:#454545">
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="login-top">
										<form action="php/login.php" method="post">
											<label>Email : </label>
											<input id="email" name="email" type="email" class="email" placeholder="Email" required="" />
											<label>Password : </label>
											<input id="password" name="password" type="password" class="password" placeholder="Password" required="" />
											<!--<div class="login-text">
												<ul>
													<li><label><input type="checkbox" value="Remember-Me" /> Remember Me?</label></li>
													<li><a href="#">Forgot password?</a></li>
												</div>-->
												<div class="login-bottom login-bottom1">
													<div class="submit">
														<input class="button" type="submit" value="LOGIN" name="login" />
													</form>
												</div>
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
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="login-top sign-top">
											<form action="php/signup.php" method="post">
												<label>Name : </label>
												<input id="name" name="name" type="text" class="name active" placeholder="John" required="" />
												<label>Email : </label>
												<input id="email" name="email" type="email" class="email" placeholder="xyz@abc.com" required="" />
												<label>Password : </label>
												<input id="password" name="password" type="password" class="password" placeholder="Password" required="" />
												<label>Phone no. : </label>
												<input id="phone" name="phone" type="text" class="phone" placeholder="Phone no." required="" />
												<!-- <input id="qualification" name="qualification" type="text" class="qualification" placeholder="B-tech/B.com/M.phil" required=""/>  -->
												<div class="login-bottom">
													<div class="submit">
														<input class="button" type="submit" value="SIGN UP" name="login" />
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
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!--//main -->
		<!-- <div class="foot">
			<div class="footer-section">
				<div class="container">
					<div class="footer-grids">
							<ul class="footerlinks">
								<li><a href="#">About Us</a></li>
									<li><a href="#">Our Team</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="../contactus.html">Contact</a></li>
									<li><a href="#">FAQs</a></li>
								<li><a href="#">Feedback</a></li>
							</ul>
							<div class="copyright">&copy; Career Crucible. All Rights Reserved.</div>
					</div>
				</div>
			</div>
		</div>-->
		<?php
		include '../../footer.php';
		?>
		<!-- Javascript files-->
		<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
	</body>
</html>