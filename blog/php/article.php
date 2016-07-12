<!DOCTYPE html>
<?php
	include '../../db_connect.php';
	if(!$db){
		die("Connection Failed!");
	}
	$id = $_GET["id"];
	$query = "SELECT title, text, image, b_img FROM blog where blog_id=".$id.";";
	$res = $db->query($query);
	if($res->num_rows == 1){
		$row = $res->fetch_array();
	$string = stripslashes($row["text"]);
	$string=str_replace("http://careercrucible.com/%22http://", "http://",$string);
		
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $row["title"]; ?> | Career Crucible</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="all,follow">
		<!-- Bootstrap and Font Awesome css-->
		<!-- we use cdn but you can also include local files located in css directory-->
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
		<link rel="stylesheet" href="../css/font-min.css">
		<!-- theme stylesheet-->
		<link rel="stylesheet" href="../css/news.css" id="theme-stylesheet">
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
		include'../../header.php';
		?>
		<!-- /.navbar-->
		<!-- /.navbar-->
		<section id="intro" class="intro image-background img-responsive" style="margin-top:-30px;
			<?php if(isset($row["b_img"])){ ?>
			background: url('../<?php echo $row["b_img"]; ?>') center center no-repeat;
			<?php } ?>
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			-webkit-backface-visibility: hidden;">
			<div class="overlay"></div>
			<div class="content">
				<div class="container clearfix">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12">
							<h1 class="he">Blogs</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="container conta" style=" margin-top:20px;">
			<div class="col-md-9 " >
				<div class="bar">
					<p><a href="/"class="upper"><strong >Home</strong></a> || <a href="news.php"class="upper"><strong>NEWS</strong></a>
					|| <a href="#"class="upper"><strong > <?php echo trim(strip_tags($row['title'])); ?></strong> </a>  </p>
				</div>
			</div>
		</div>
		<!-- colg -->
		<div class="container conta" >
			<div class="col-md-9">
				
				<div id="branch" class="branch">
					<!-- colg Starts Here -->
					<div class="branch entertain_box" id="project">
						<div class="branch-info" style=" margin-bottom:40px; padding-bottom:10px; border-bottom: 1px solid #cccccc;">
							<h4 > <?php echo trim(strip_tags($row['title'])); ?> </h4>
							<p style="margin:0;">March 3, 2016</p>
							<!--<p>Each of our prjects involve the following stages of creation process.
										Elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia
							nisl. Curabitur tempus tellus et vulputate vestibulum. </p>-->
						</div>
						
						<div class="row ">
							<div class="col-md-4 mar">
								<div class="team-member">
									<div class="image"><a href="#"><img src='<?php echo '../'.$row["image"]; ?>' alt="" class="img-responsive"></a></div>
									
								</div>
							</div>
							<div class="col-md-8 mar">
								<p><?php echo $string; ?></p>
							</div>
							
							
						</div>
						<div class="row" style="margin-top:20px;padding-left:40px;">
							<p>
								<?php if(isset($remaining)) {echo $remaining;} ?>
								
							</p>
							<br>
						</div>
						
						
					</div>
					
				</div>
				
			</div>
			<div class="col-md-3 noscreen">
				<?php
				include'../../fblike.php'
				?>
				<?php
				include '../../populartags.php'
				?>
				<?php
				include '../../sidenews.php'
				?>
			</div>
		</div>
		<?php
			}
		?>
		<?php
		include'../../footer.php';
		?>
		
		
		<!-- Javascript files-->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>