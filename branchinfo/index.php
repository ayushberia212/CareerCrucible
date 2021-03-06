<?php
include "../db_connect.php";
$find="SELECT COUNT(`id`) FROM `branch_info`";
$row=mysqli_fetch_array(mysqli_query($db,$find));
$size=$row[0];
$total_page=ceil($size/9);
if(isset($_GET["page"]))
  $page=$_GET["page"];
else
  $page=0;
$offset=$page*9;
$rec=9;
$find="SELECT * FROM `branch_info` LIMIT $offset,$rec";
$rs=mysqli_query($db,$find);
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Branch Information | Career Crucible</title>
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
    <link rel="stylesheet" href="css/engstyle.css" id="theme-stylesheet">

    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
   
    <script type="text/javascript" src="js/jquery.min.js"></script>
<style>
.box1{
border: 1px solid green ;
}
</style>
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75009068-1', 'auto');
  ga('send', 'pageview');

</script>
     <!-- navbar-->
     <?php
     include'../header.php'
     ?>


<section id="intro" class="intro image-background img-rsponsive">
                     <div class="overlay"></div>
                     <div class="content">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12"> 
              <h1 class="he">Engineering<br /><span class="bold">Branch Information</span></h1>
            </div>
          </div>
        </div>
      </div>
                   </section>


<!-- colg -->
<div class="container" style="margin-top:10px;">
<div class="col-md-9">
  
<div id="colg" class="colg">
  <!-- colg Starts Here -->
  <div class="colgs entertain_box" id="project">

      <div class="colg-info" style=" margin-bottom:10px;">
        <h3 >Engineering Branch Information</h3><br><hr>
        <!--<p>Each of our prjects involve the following stages of creation process.
          Elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia 
          nisl. Curabitur tempus tellus et vulputate vestibulum. </p>-->
      </div>
      <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
          <script type="text/javascript">
            $(document).ready(function () {
              $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
              });
            });
            
          </script>
<?php
while(1)
{
if($row=mysqli_fetch_assoc($rs))
{
 ?>
 <div class="row">
		   <a href="see_branch_info.php?id=<?php echo $row['id']; ?>">
            <div class="col-md-4 col-sm-6 mar">
			  <div class="Image"><img src="<?php echo $row['img'] ?>" width="100%" height="200"></div>
			 
                <h3 class="head"><?php echo $row['branch']; ?></h3>
                 </div>
			  </a>
			  <div class="col-md-2 col-sm-3 mar">
			  </div>
<?php
}
else
{
echo "</div>";
break;
}
if($row=mysqli_fetch_assoc($rs))
{
?>
			  
			   <a href="see_branch_info.php?id=<?php echo $row['id']; ?>">
            <div class="col-md-4 col-sm-6 mar">
			  <div class="Image"><img src="<?php echo $row['img'] ?>" width="100%" height="200"></div>
                <h3 class="head"><?php echo $row['branch']; ?></h3>
                 </div>
			  </a>
			  
<?php
}
else
{
echo "</div>";
break;
}
echo "</div>";
}
?>

</div>
</div>
</div>
</div>
<?php
if($size>9)

{

?>
<center>
<div class="page">

<?php

for($i=0;$i<$total_page;$i++)
{

?>
<ul class="pagination">
  
  <?php 
  if($page==$i){
  ?>
  <li class="active disable"><a href="#"><?php echo ($i+1) ?></a></li>
  <?php
  }
  else
  {
  ?>
  <li><a href="index.php?page=<?php echo $i ?>"><?php echo ($i+1) ?></a></li>
  <?php
  }
  ?>
</ul>
<?php
}
?>

</div>
</center>

 <?php
 }
 include '../footer.php';
          ?>


    <!-- Javascript files-->

  
    <script src="js/bootstrap.min.js"></script>



  </body>
</html>