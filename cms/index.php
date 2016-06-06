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


<!-- navbar-->
    <header class="header">
      <div class="sticky-wrapper">
        <div role="navigation" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#intro" class="navbar-brand scroll-to" id="top"><p>CareerCrucible</p></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li ><a href="../../index.html">Home</a></li>
              
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"id="test">Resources<span class="caret"></span></a>
                <ul class="dropdown-menu">
            <li><a href="../../eng colleges/engcol.html"id="test1" >Engineering colleges</a></li>
            <li><a href="../../engexams/engExams.html"id="test1" >Engineering exams</a></li>
             <li><a href="../../calender/examcalender.html" id="test1">Exam calender</a></li>
             <li><a href="../../branch info/branchmain.html"id="test1" >Branch Info</a></li>
             <li><a href="../../branchreview/br.html" id="test1">Branch Review</a></li>
          </ul>
        </li>

          <li><a href="../../news/news.php">News</a></li>
                <li><a href="../../Forum/forum.php">Forum</a></li>
                <li><a href="../../counselling/counselling.php">Counselling</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /.navbar-->
              
<div class="login">
<h2><a href="index.php">LogIn</a>/<a href="temp/signup.php">SignUp</a></h2><hr>
<form action="php/login_check.php" name="login" method="post">
<div class="form-group">
    <label for="email">Uername:</label>
    <input type="email" class="form-control" name="username">
 
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password">
  <br>
  <button type="submit" id="sub" name="sub" class="btn btn-default">Submit</button>
  
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