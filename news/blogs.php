<!DOCTYPE html>
<?php
	include '../db_connect.php';
	if(!$db){
		die("Connection Failed!");
	}
	if(!isset($_GET["page"])){
		$id = 1;
	}
	else {
		$id = $_GET["page"]; 
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>News | Career Crucible</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="all,follow">
		<!-- Bootstrap and Font Awesome css-->
		<!-- we use cdn but you can also include local files located in css directory-->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
		<link rel="stylesheet" href="css/font-min.css">
		<!-- theme stylesheet-->
		<link rel="stylesheet" href="css/news.css" id="theme-stylesheet">
		<!-- Favicon-->
		<link rel="shortcut icon" href="favicon.png">
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
		<!-- navbar-->
		<?php
		include'../header.php'
		?>
		<!-- /.navbar-->
		<!-- /.navbar-->
		<section id="intro" class="intro image-background img-responsive" style="margin-top:-30px;">
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
		<!-- colg -->
		<div class="container conta" style="margin-top:10px;">
			<div class="col-md-9">
				
				<div id="branch" class="branch">
					<!-- colg Starts Here -->
					<div class="branch entertain_box" id="project">
						<div class="branch-info" style=" margin-bottom:40px; padding-bottom:10px; border-bottom: 1px solid #cccccc;">
							<h3 >Blogs</h3>
							<!--<p>Each of our prjects involve the following stages of creation process.
								Elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia
							nisl. Curabitur tempus tellus et vulputate vestibulum. </p>-->
						</div>
						<?php 
							$query = "SELECT count(*) as c FROM blog;";
							$res = $db->query($query);
							$row = $res->fetch_array();
							$num = $row["c"];
							$query = "SELECT blog_id, title, text, image FROM blog WHERE blog_id ORDER BY blog_id DESC LIMIT 5 OFFSET ". ($id*5-5) .";";
							$res = $db->query($query);
							if($res->num_rows > 0){
								while($row = $res->fetch_assoc()){
									$string = strip_tags($row["text"]);
									if (strlen($string) > 200) {
									    $string = substr($string, 0, 200);
										$string = substr($string, 0, strrpos($string, ' ')).' ...'; 
									}
						?>
						<div class="row ">
							<div class="col-md-4 mar">
								<div class="team-member">
									<div class="image"><a href='blog/article.php?id=<?php echo $row["blog_id"]; ?>'><img src='<?php echo $row["image"]; ?>' alt="" class="img-responsive"></a></div>
									
								</div>
							</div>
							<div class="col-md-8  mar">
								<div class="team-member">
									<h3 class="head"><a href='blog/article.php?id=<?php echo $row["blog_id"]; ?>'> <?php echo $row["title"]; ?> </a></h3>
									<p> <?php echo $string ?>
										</p><a href='blog/article.php?id=<?php echo $row["blog_id"]; ?>' class="read" style="text-decoration:none;">READ MORE</a>
									</div>
								</div>
								
							</div>
							<?php
								}
							}
							?>
						</div>
						<center>
						<?php for ($i=1; $i <= ceil($num/5) ; $i++) { 
							if($i == $id) {
								echo "<a href='blogs.php?page=".$i."' style='margin-right:10px;'><u><b>".$i."</b></u></a>";
							}
							else {
								echo "<a href='blogs.php?page=".$i."' style='margin-right:10px;'><u>".$i."</u></a>";	
							}
						} ?>
						</center> 
					</div>
					
				</div>
				<div class="col-md-3 noscreen">
					<?php
					include '../fblike.php'
					?>
					<?php
					include'../populartags.php'
					?>
					<?php
					include'../sidenews.php'
					?>
				</div>
			</div>			
			<?php
			include'../footer.php'
			?>

			<!-- Javascript files-->
			<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
	</html>