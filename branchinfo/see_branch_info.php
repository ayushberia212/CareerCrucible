<?php
include "../db_connect.php";
$id=$_GET["id"];
$find="SELECT * FROM `branch_info` WHERE `id`='$id'";
$rs=mysqli_query($db,$find) or die("nit");
$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $row['branch']; ?> | Career Crucible</title>
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
    <link rel="stylesheet" href="css/style.branch-info.css" id="theme-stylesheet">

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
     <?php

include '../header.php';

?>
    
    <!-- /.navbar-->

<section id="intro" class="intro image-background img-responsive" style="margin-top:-30px;
  <?php
if(isset($row["b_img"])){?>
  background: url('<?php echo $row["b_img"]; ?>') center center no-repeat;
  <?php
  }?>
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
              <h1 class="he"><?php echo $row['branch']; ?></span></h1>
            </div>
          </div>
        </div>
      </div>
                   </section>

<div class="container conta" style=" margin-top:20px;"> 
                              <div class="col-md-9 " >
                                <div class="bar">
                                 <p><a href="/"class="upper"><strong >Home</strong></a> || <a href="index.php"class="upper"><strong>Branch Info</strong></a>
                                  || <a href="#"class="upper"><strong ><?php echo $row['branch']; ?></strong> </a>  </p>
                             </div>
                           </div>

                    </div>




<!-- branch -->
<div class="container" >
<div class="col-md-9">
  
<div id="branch" class="branch">

  <div class="branch entertain_box" id="project">

      <div class="branch-info" style=" margin-bottom:40px;  ">
        <h3 class="heading"><?php echo $row['branch']; ?> Branch Information</h3>
        <!--<p>Each of our prjects involve the following stages of creation process.
          Elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia 
          nisl. Curabitur tempus tellus et vulputate vestibulum. </p>-->
      </div>          
</div>
</div></div></div>
      

         <div class="container conta" style="margin-top:10px;" >
          <div class="col-md-9">
        <div  class="  section-gray" style="margin-bottom:30px;">
          
            <h4>ABOUT THE DISCIPLINE </h4>
            <div class="row">
              <div class="col-sm-12">
               <p><?php echo $row['about']; ?>
			   </p>
			   </div>
         </div>
       </div>
    


        <div class="section-gray" style="margin-bottom:30px;">
          
            <h4>THE COURSEWORK</h4>
            <div class="row">
              <div class="col-sm-12">
               <p><?php echo $row['coursework']; ?>
			   </p></div>
         </div>
       </div>



        <div  class="  section-gray" style="margin-bottom:30px;">
          
            <h4>JOB OPPORTUNITIES </h4>
            <div class="row">
              <div class="col-sm-12">
               <p><?php echo $row['job_oppor']; ?>
			   </p>
			   </div>
         </div>
       </div>
        
        <div  class="section-gray" style="margin-bottom:30px;">
          
            <h4>TOP Recruiters</h4>
            <div class="row">
              <div class="col-sm-12" >
			  <p><?php echo $row['top']; ?>
			   </p>
			  </div>
		 </div>
       </div>


        <div  class=" section-gray" style="margin-bottom:30px;">
          
            <h4>Starting Salary</h4>
            <div class="row">
              <div class="col-sm-12">
               <p><?php echo $row['s_salary']; ?>
			   </p>
        </div>
         </div>
       </div>


        <div  class="section-gray" style="margin-bottom:30px;">
          
            <h4>Best from</h4>
            <div class="row">
              <div class="col-sm-12">
              
			   <p><?php echo $row['best']; ?>
			 
			   </p>
		 <center>
		  </center>
        </div>
         </div>
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

<div class="container conta " style="margin-top:10px;">
  <div class="cont col-md-9">
<div class="fb-comments" data-href="http://careercrucible.com/branchinfo/see_branch_info.php?id=<?php echo $id; ?>" data-width="752" data-numposts="7"></div>
</div>
</div>
<?php

include '../footer.php';

?>


    
   
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>