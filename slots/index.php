<?php
session_start();
if(isset($_SESSION['user_id'])){
	if($_SESSION['role']=='junior')
	{
		header('location: junior/student_view.php');
		die();
	}
	else if($_SESSION['role']=='senior')
	{
		header('location: senior/freeslot.php');
		die();
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Counselling | Career Crucible</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="all,follow">
		<!-- Bootstrap and Font Awesome css-->
		<!-- we use cdn but you can also include local files located in css directory-->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
		<link rel="stylesheet" href="css/font-min.css">
		<!-- theme stylesheet-->
		<link rel="stylesheet" href="css/counselling.css" id="theme-stylesheet">
		<!-- Favicon-->
		<link rel="shortcut icon" href="favicon.png">
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-75009068-1', 'auto');
		ga('send', 'pageview');
		</script>
		<!-- Tweaks for older IEs--><!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	</head>
	<body data-spy="scroll" data-target="#navigation" data-offset="120">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!-- navbar-->
		<?php
		include '../header.php';
		?>
		
		<!-- /.navbar-->
		<!-- /.navbar-->
		<section id="intro" class="intro image-background img-responsive">
			<div class="overlay"></div>
			<div class="content">
				<div class="container clearfix">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12">
							<h1 class="he">Career Counselling</h1>
							<p id="tagline">Guide Student to choose Their Desired Career.</p>
							<a href="senior/"><button id="log">Login as Senior</button></a>
							<a href="junior/"><button id="log">Login as Junior</button></a>
							<a href="junior/student_view.php"><button id="slot">Available Slots</button></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--<div class="container conta" style="margin-top:10px;" >
			<div id="pop" class="col-md-6 noscreen">
				<?php
				
				?>
				<?php
				
				?>
			</div>
			<div class="col-md-6 noscreen">
				<?php
			
				?>
			</div>
		</div>	-->
		<?php
		include '../footer.php';
		?>
		
		
		<!-- Javascript files-->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>