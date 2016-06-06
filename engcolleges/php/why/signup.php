<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LogIn | Career Crucible</title>
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
    <link rel="stylesheet" href="css/style.css" id="theme-stylesheet">
        <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
	<style>
	.bottom{
	left: 0;
    position: fixed;
    text-align: center;
    bottom: 0;
    width: 100%;
	}
	.login{
	 box-shadow: 1px 1px 1px #888888;
	width:40%;
	margin-left:30%;
	margin-top:8%;
	}
	</style>
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


<?php

include 'header.php';

?>
			  
<div class="login">
<h2><a href="login.php">LogIn</a>/<a href="signup.php">SignUp</a></h2><hr>
<form action="signup_insert.php" name="login" method="post">
<div class="form-group">
	<label for="email">Name:</label>
    <input type="text" class="form-control" name="name">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="username">
 
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password">
  <br>
  <button type="submit" name="sub" class="btn btn-default">Submit</button>
  <button type="reset" name="sub" class="btn btn-default">Clear</button>
  <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="-2">Or do not have account? </font><font size="-1" color="red">SIGNIN</font>-->
</form>
</div>

<div class="footer-section bottom">
         <div class="container">
          <div class="footer-grids">

            <ul class="footerlinks">
              <li><a href="../../aboutus.html">About Us</a></li>
                <li><a href="../../team/team.html">Our Team</a></li>
                <li><a href="../../privacy.html">Privacy Policy</a></li>
                <li><a href="../../contactus.html">Contact Us</a></li>
                <li><a href="../../FAQ/faq.html">FAQs</a></li>
               <li><a href="../../feedback.php">Feedback</a></li>
            </ul>
            <div class="copyright">&copy; Career Crucible. All Rights Reserved.</div>
        </div>  



          </div>
        </div>
</body>

</html>