<?php
include "..user_id..user_iddb_connect.php";
$id=$_GET["id"];
$search = "SELECT * FROM `college_info` WHERE clg_id=$id";
$rs=mysqli_query($db,$search);
$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $row["clg_name"] ?> | Career Crucible</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="cssuser_iddashboard2.css" rel="stylesheet">

    <!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
    <link rel="stylesheet" href="css/font-min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.css" id="theme-stylesheet">
        <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">

  </head>
  <!--Show hide js-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>-->
<!--<script >

$(document).ready(function(){

$(".slidingDiv").hide();
$(".show_hide").show();

$('.show_hide').click(function(){

$(this).next().slideToggle(300);
});

});




function diffImage(img) 
{
   if(img.src.match(/images/iit roorkee/)) img.src = "images/iit roorkee/1.jpg";
   else img.src = "images/iit roorkee/accArrow.png";
}

</script>-->

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

include '..user_id..user_idheader.php';

?>

<section id="intro" class="intro image-background"style="margin-top:-30px;

  background: url('<?php echo $row["clg_cover"]; ?>') center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  -webkit-backface-visibility: hidden;">
                     <div class="overlay"></div>
                     <div class="cont">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12"> 
              <h1 class="he"><?php echo $row["clg_name"] ?></span></h1>
            </div>
          </div>
        </div>
      </div>
                   </section>



          <div class="container conta"> 
                       <div class="colabout" >
 
                              <div class="col-md-9 " >
                                 <h3 >About</h3>
                                 <p><?php echo $row["clg_about"]; ?></p>
                             </div>
                               <?php
                 if($row['clg_youtube']!=null){
                 ?>
                                  <div class="col-md-3">
                               <iframe  height="315" src="<?php echo $row['clg_youtube']; ?>" frameborder="0" allowfullscreen="">
                                </iframe>
                               </div>
                 <?php } ?>
                        </div>
                     
                    </div>


<!-- about section -->
    <section class="about  " id="about">
       <div class="container conta ">
          <div class="col-md-9">
          <div class="row text-center">
            <h2 class="heading" style="margin-bottom:-20px;">At A Glance</h2>
        
            <div class="col-md-4 col-sm-6">
              <div class="single-about-detail clearfix">
                <div class="about-details">
                                    <h2><strong>Contact</strong></h2>
                  <p><strong>Official website:</strong> <a href="<?php echo $row['clg_website']; ?>" target="_blank"><?php echo $row['clg_name']; ?></a></p>
                                   <p><strong>Address:</strong> <?php echo $row['clg_addr']; ?></p>
                                 <p><strong>Email :</strong><?php echo $row['clg_email']; ?></p>
                                   <p><strong>Contact:</strong><?php echo $row['clg_number']; ?></p>
                    
                </div>
              </div>
            </div>

          
            <div class="col-md-4 col-sm-6">
              <div class="single-about-detail">
                <div class="about-details">

                  <h2><strong>Infrastructure</strong></h2>
                  <p><strong>Area: </strong><?php echo $row['clg_area']; ?></p>
  
          <?php 
          if(!($row['clg_area_extra']==null || empty($row['clg_area_extra']))){
          ?>
                  <p><strong>Extra Information: </strong><?php echo $row["clg_area_extra"]; ?></p>
          <?php
          }
          ?>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-6">
              <div class="single-about-detail">

                <div class="about-details">
                  <h2><strong>Mode of Admission</strong></h2>
                  <p>It is a simple process. </p>
                  <p>-<?php echo $row["clg_admission"]; ?></p>
          </div>
              
              </div>
            </div>
      <div class="col-md-4 col-sm-6">
              <div class="single-about-detail">

                <div class="about-details">
                  <h2><strong>Placement</strong></h2>
                  <p><?php echo $row["clg_plac"]; ?></p>
          </div>
              
              </div>
            </div>
      <div class="col-md-4 col-sm-6">
              <div class="single-about-detail">

                <div class="about-details">
                  <h2><strong>Location</strong></h2>
                  <p><?php echo $row["clg_loc"]; ?></p>
          </div>
              
              </div>
            </div>

            <div class="col-md-4 col-sm-6">
              <div class="single-about-detail">
                
                <div class="about-details">
                  <h2><strong>Fee Structure</strong></h2>
                  <p><strong>Total Fee: </strong><?php echo $row["clg_total_fee"]; ?> INR</p>
                  <p><strong>Total Hostel Fee: </strong><?php echo $row["clg_total_hostel"]; ?> INR</p>
          <?php 
          if(!($row['clg_fee_link']==null || empty($row['clg_fee_link']))){
          ?>
                  <p><strong><a href="<?php echo $row['clg_fee_link']; ?>" target="_blank">Click here</a></strong> for detailed fee structure for students.</p>
          <?php
          }
          ?>
        </div>
              </div>
            </div>


          </div>
        </div>
       

        <div class="col-md-3 noscreen " >
          
          <?php
          include '..user_id..user_idfblike.php'
          ?>

          <?php
          include'..user_id..user_idpopulartags.php'
          ?>

                 </div>
  </section>
<section class="about  " id="about">
       <div class="container conta ">
          <div class="col-md-9">
            <h2 class="heading" style="margin-bottom:-20px;">Most Answered Questions</h2>
          <div class="row text-center" style="padding-left:24.5%;">
               <?php
                $query="SELECT Question,Q.Question_Id,Count(*) FROM Question Q,Review R WHERE clg_id=$id  and Q.Question_Id=R.Question_Id and Approved=1 group by Q.Question_Id,Question order by Count(*) desc;";
                $result=mysqli_query($db,$query);
                $no_row=mysqli_num_rows($result);
                if($no_row > 0)
                {
                  while($tuple = mysqli_fetch_assoc($result)) { 
                  echo " 
                  <span class='col-md-6 minicard' style='background:#EEEEEE'>
                  <a href='qn.php?Question_Id=$tuple[Question_Id]&clg_id=$id'>
                <article>
                    <figure>
                        <div class='listText'>
                            <h3 class='ng-binding'>".$tuple['Count(*)']."</h3>";
                  if($no_row==1)
                  {
                          echo  "<span class='ng-binding'>Answer</span>
                        </div>
                    </figure> 
                    <p class='ng-binding'>".$tuple['Question']."</p>
                </article>
                </a>
              </span>
              "; 
              }
              else {
                 echo  "<span class='ng-binding'>Answers</span>
                        </div>
                    </figure>
                    <p class='ng-binding'>".$tuple['Question']."</p>
                </article>
                </a>
              </span>
              "; 
               } 
                  }
                }
              ?>
          
          </div>
           <div class="row placeholders col-md-offset-5" id="colleges" style="margin-left:43.5%;">
          <a class="btn btn-primary" data-toggle="modal" data-target="#myModal" Style="Margin:10px;">Answer a Question</a>
        </div>
          </div>
           <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Answer</h4>
              </div>
              <div class="modal-body">
                  <?php
                  if(!isset($_SESSION['user_id']))
                  {
                    echo "You must be logged in as a Senior to Add an Answer.";
                    echo "<br><br><a href='../../slots/senior' class='btn btn-primary'>Login as Senior</a>";
                  }
                    else if(isset($_SESSION['user_id']))
                    {
                          if($_SESSION['role']='junior')
                          {
                            echo "You must be logged in as a Senior to Add an Answer.";
                            echo "<br><br><a href='../../slots/junior/php/logout.php' class='btn btn-primary'>Log out as Junior</a>";
                          }
                          else
                          {       
                  ?>
                  <form class="form-horizontal" name="answerform" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                  <fieldset>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="collegename">College Name</label>  
                      <div class="col-md-7">
                      <input id="collegename" name="collegename" type="text" readonly Value="<?php echo $row["clg_name"] ?>" placeholder="Theme Name" class="form-control input-md" required="">
                      </div>
                    </div>
                   <div class="form-group">
            <label class="col-md-4 control-label" for="question">Select Question</label>
            <div class="col-md-7">
              <select id="question" name="question" class="form-control"> 
                <?php
                    $query="SELECT * FROM question;";
                $result=mysqli_query($db,$query);
                $no_row=mysqli_num_rows($result);
                if($no_row > 0)
                {
                  while($tuple = mysqli_fetch_assoc($result)) { 
                  echo " <option value='$tuple[Question_Id]'>$tuple[Question]</option>";  
                  }
                }
                ?>
              </select>
            </div>
          </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Answer">Review</label>
                      <div class="col-md-7">                     
                        <textarea class="form-control" id="answer" name="answer" style="height:300px;"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="AddAnswer"></label>
                      <div class="col-md-4">
                        <button type="submit"  id="AddAnswer" name="AddAnswer"  class="btn btn-primary">Add Answer</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
                <?php
                  }
                }
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
              </div>
              </div>
            </div>
            <div class='col-md-10 ' style="">
        <?php
                          if(isset($_SESSION['consultant_id']))
                          {
                            if(isset($_POST['AddAnswer'])){
                              $hash = md5(rand(0,1000));
                              $collegename=mysqli_real_escape_string($db,$_POST['collegename']);
                              $Question_Id= mysqli_real_escape_string($db,$_POST['question']);
                              $user=$_SESSION['consultant_name'];
                              $clg_id=$id;
                              $query="Select Question from question where Question_Id='$Question_Id';";
                              $result=mysqli_query($db,$query);
                              $Question="";
                              while($tuple=mysqli_fetch_assoc($result))
                              {
                                $Question=$tuple['Question'];
                              }
                              $Consultant_Id= mysqli_real_escape_string($db,$_SESSION['consultant_id']); 
                              $Answer= mysqli_real_escape_string($db,$_POST['answer']); 
                              $InsertQuery="INSERT INTO review(Consultant_Id,clg_id,Question_Id,Review,Approved,hash) VALUES ($Consultant_Id,$clg_id,$Question_Id,'$Answer',0,'$hash')" ;
                              if(mysqli_query($db,$InsertQuery)){
                                $squery="Select Answer_Id from review where Question_Id=$Question_Id and Consultant_Id=$Consultant_Id and clg_id=$clg_id;";
                                $sresult=mysqli_query($db,$squery);
                                $Answer_Id=0;
                                while($tuple=mysqli_fetch_assoc($sresult))
                                {
                                  $Answer_Id=$tuple['Answer_Id'];
                                }
                                echo "<b>Thanks for your review.Your Answer has been send to the Admin for Approval.<b>";
                                require '../PHPMailer-master/PHPMailerAutoload.php';
                  $mail = new PHPMailer;
                  $mail->isSMTP();                    // Set mailer to use SMTP
                  $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
                  $mail->SMTPAuth = true;                     // Enable SMTP authentication
                  $mail->Username = 'aagreat11@gmail.com';          // SMTP username
                  $mail->Password = 'greatest'; // SMTP password
                  $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
                  $mail->Port = 587;                          // TCP port to connect to
                  $mail->setFrom('careercrucible@gmail.com', 'Career Crucible');//$mail->addReplyTo('aagreat11@gmail.com', 'Career Crucible');
                  $mail->addAddress('ayush.beria212@gmail.com');// Add a recipient
                  $mail->addAddress('careercrucible@gmail.com');
                  $mail->isHTML(true);  // Set email format to HTML
                  $subject="Answer Approval";
                          $message = '
                          <html>
                          <head>
                              <title>ApprovalMail</title>
                              <style>
                              a.button {
                                  -webkit-appearance: button;
                                  -moz-appearance: button;
                                  appearance: button;

                                  text-decoration: none;
                                  color: initial;
                              }
                              </style>
                          </head> 
                    <body>
                    <p>
                    ------------------------
                    <br>
                    <b>College:</b>'.$collegename.'
                    <br>
                    <b>Question:</b> '.$Question.'
                    <br>
                    <b>User:</b> '.$_SESSION['consultant_name'].'
                    <br>
                    <b>Answer:-</b> <p>'.$Answer.'</p>
                    <br>
                    ------------------------
                    <br>
                    </p>
                    <h3>Click this link to Approve the Answer:</h3>
                    <a href="//localhost/CareerC/slots/php/verify.php?Answer_Id='.$Answer_Id.'&hash='.$hash.'" class="button">Approve</a>
                     <h3>or,this link to disapprove it</h3> 
                     <a class="button" href="//localhost/CareerC/slots/php/delete.php?Answer_Id='.$Answer_Id.'&hash='.$hash.'">Reject</a>
                      </body>
                    </html>'; // Our message above including the link
                    $message = wordwrap($message, 70);
                    $mail->Subject=$subject;
                    $mail->Body=$message;
                    //$headers = 'From:noreply@localhost'."user_idruser_idn"; // Set from headers        
                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        echo 'Message has been sent';
                    }
                              }
                              else{
                                echo "<b>Your Answer was not Registered.Please write Again.<b>";
                              }   
                            }
                          }
                      ?>
            </div>
        </div>
      </div>
</div>

      </div>
</section>


<!--content-->
<div class="container conta" >
  <div class="cont col-md-9">
    <div style="margin-top:40px;">
      <div class="content-top-bottom">
        <h2 class="heading">College Gallery</h2>



       <div class="col-md-6 col-sm-6 men">
          <div  class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo $row['clg_img1']; ?>" alt=""> 
          </div>
        </div>
    <?php
    if($row["clg_img2"]!=null){
    ?>
        <div class="col-md-6 col-sm-6">
          <div class="col-md1 ">
            <div class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo $row['clg_img2']; ?>" alt="">
            </div>
            
          </div>
          
        </div>
    <?php
    }
    ?>
        <div class="clearfix"> </div>
      </div>
      <div class="content-top">
        <h1></h1>
    
        <div class="grid-in">
    <?php
    if($row["clg_img3"]!=null){
    ?>
          <div class="col-md-4 col-sm-6 grid-top ">
           <img class="img-responsive" src="<?php echo $row['clg_img3']; ?>" alt="">
          
   
          </div>
      <?php } 
      if($row["clg_img4"]!=null){
      ?>
          <div class="col-md-4 col-sm-6 grid-top ">
           <img class="img-responsive" src="<?php echo $row['clg_img4']; ?>" alt="">
              
          </div>
          <?php
      }
      if($row["clg_img5"]!=null){
      ?>
      <div class="col-md-4 col-sm-6 grid-top">
            <img class="img-responsive" src="<?php echo $row['clg_img5']; ?>" alt="">
             

          </div>
              <?php } ?>
        </div>
      </div>
    </div>

  </div>
  <div class="col-md-3">
  <?php 
  include '../../sidenews.php';
  ?>
</div>
</div>
<div class="container conta"  >

        <section id="text" class="col-md-9 section-gray" >
      
            <h3><strong>Courses Offered &amp; Reviews</strong></h3>
           
                <div class="courses">
               <h4>B.Tech</h4>

         <div class="slidingDiv" id="btech">
       <ul>
     <?php
     $r=explode(",",$row['clg_b_tech']);
     $i=0;
     foreach($r as $p)
     {
     $i++;
     echo "<li> $p</li>";
     }
     if($i==0)
     echo "<li> No B. TECH. courses available. </li>";
     ?>
        
      </ul>
      </div>
      </div>
               
              <div class="courses">
               <a href="#mtech"  style="text-decoration:none;" ><h4>B.Arch</h4></a>
         <div class="slidingDiv" id="barch">
           <ul>
            <?php
     
     if($row['clg_b_arch']==null)
     echo "<li> No B. ARCH. courses available. </li>";
     else
     {
     $r=explode(",",$row['clg_b_arch']);
    
     foreach($r as $p)
     {
     echo "<li> $p</li>";
     }
     }  
     ?>
          </ul>
        </div>
      </div>

          <div class="courses">
               <a href="#msc"  style="text-decoration:none;" ><h4>Integrated M.Tech.</h4></a>
         <div class="slidingDiv" id="mtech">
        <ul>
          <?php
     $r=explode(",",$row['clg_m_tech']);
     $i=0;
     foreach($r as $p)
     {
     $i++;
     echo "<li> $p</li>";
     }
     if($row['clg_m_tech']=null)
     echo "<li> No M. TECH. courses available. </li>";
     ?>
        </ul>
      </div>
      </div>

          <div class="courses">
               <a href="#las"  style="text-decoration:none;" ><h4>Integrated M.Sc.</h4></a>
         <div class="slidingDiv" id="msc">
        <ul>
          <?php
     
     if($row['clg_m_sc']==null)
     echo "<li> No M. SC. courses available. </li>";
     else{
     $r=explode(",",$row['clg_m_sc']);
     foreach($r as $p)
     {
     $i++;
     echo "<li> $p</li>";
     }
     }
     ?>
        </ul>
      </div>
      </div>
     

   
    </section>

    <?php

    include'side.php'
    ?>
 



<!--FEE-->

    
       


<!--Placements-->
  
        <section id="text" class="col-md-9 section-gray" >
          
            <h3 id="placements"><strong>Placements</strong></h3>
            <div class="row">
            

        <div class="list_vertical">
                <div  class="accordation_menu">
              <div>
                <input id="label-1" name="lida" type="radio" checked/>
               <label for="label-1" id="item1"><i class="ferme"> </i><strong><h4>Placement Statistics</h4></strong><i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                <div class="content" id="a1">
                  <div class="scrollbar" id="style-2">
                 <div class="force-overflow">
                  <div class="popular-post-grids">
                    
                    <h4> Salary Range (Branchwise)</h4>
                    <div>
                    <div class="col-md-6 ">
                      <h5> Branch</h5>
                    </div>
                    <div class="col-md-3">
                      <h5> Max. salary</h5>
                    </div>
                    <div class="col-md-3">
                      <h5> Avg. Salary</h5>
                    </div>
                  </div>
          <hr>
        <?php
     
     $r=explode(";",$row['clg_placement_branch']);
     foreach($r as $each)
     {
     $s=explode(",",$each);
     ?>
                  <div>
                    <div class="col-md-6">
                      <p> <?php echo $s[0]; ?></p>
                    </div>
                    <div class="col-md-3">
                      <p> <?php echo $s[1]; ?></p>
                    </div>
                    <div class="col-md-3">
                      <p><?php echo $s[2]; ?></p>
                    </div>
                  </div>
                  
         <?php
    }
      ?>
                  </div>
                  </div>
                    </div>
                    </div>
              </div>
              <div>
                <input id="label-2" name="lida" type="radio"/>
                <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i><h4><strong>Past Recruiters</strong></h4><i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                <div class="content" id="a2">
                   <div class="scrollbar" id="style-2">
                   <div class="force-overflow">
                  <div class="popular-post-grids">
                      <ul>
            <?php
            $temp=explode(",",$row["clg_placement_past_r"]);
            foreach($temp as $each)
            echo "<li>$each</li>"
            ?>
            </ul>
                    </div>
                  </div>
                </div>
                </div>
              </div>


              <div>
                <input id="label-3" name="lida" type="radio"/>
                <label for="label-3" id="item3"><i class="icon-trophy" id="i3"></i><h4><strong>Top Recruiters</strong></h4><i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                <div class="content" id="a3">
                   <div class="scrollbar" id="style-2">
                  <div class="force-overflow">
                 <div class="popular-post-grids">
                  <ul>
                    <?php
            $temp=explode(",",$row["clg_placement_top_r"]);
            foreach($temp as $each)
            echo "<li>$each</li>"
            ?>
                  </ul>
          </div>
          </div>
             </div>
                </div>
              </div>






            </div>
           </div>
</div>
    </section>
  


<!--
<style>
/*

=====================
college
=====================

*/
.team-member {
  text-align: left;
  margin-bottom: 20px;
}
.team-member p {
  font-size: 16px;
  margin-bottom: 5px;
  letter-spacing: 0.06em;
  font-family:myriad pro;
}
.team-member p a {
  color: #555555;
  text-decoration: none;
}
.team-member a  {
  text-decoration: none;
}
.team-member .image {
  margin-bottom: 20px;
}

.head {
  text-align: center;
  padding-bottom: -5px;
}

.img-responsive{
  min-height:150px;
}
.mar{
  margin-bottom:15px;
}
</style>

 <section id="text" class="col-md-9 section-gray" >
      
            <h3><strong>Related Colleges</strong></h3>
           <div class="col-md-3">
                <div class="team-member">
                <div class="image"><a href="iit_kgp.php"><img src="images/iit delhi/604673IIT Delhi.jpg" alt="" class="img-responsive"></a></div>
                <p class="head"><a href="iit_kgp.php">IIT Kharagpur</a></p>
              </div>
           </div>
           <div class="col-md-3">
                <div class="team-member">
                <div class="image"><a href="iit_delhi.php"><img src="images/iit kgp/cover_iitkgp.jpg" alt="" class="img-responsive"></a></div>
                <p class="head"><a href="iit_delhi.php">IIT Delhi</a></p>
              </div>
           </div>
           <div class="col-md-3">
                <div class="team-member">
                <div class="image"><a href="iit_tirupati.php"><img src="images/iit tirupati/ws5.jpg" alt="" class="img-responsive"></a></div>
                <p class="head"><a href="iit_tirupati.php">IIT Tirupati</a></p>
              </div>
           </div>
           <div class="col-md-3">
                <div class="team-member">
                <div class="image"><a href="iit_bbs.php"><img src="images/iit bbs/1432292222phpnHsMxs.jpeg" alt="" class="img-responsive"></a></div>
                <p class="head"><a href="iit_bbs.php">IIT Bhubaneshwar</a></p>
              </div>
           </div>
    </section>

</div>-->
<?php

    //include '..user_id..user_idfoot.php';

?>


</div>



<div class="container conta " style="margin-top:10px;">
  <div class="cont col-md-9">
<div class="fb-comments" data-href="http://careercrucible.com/engcolleges/colleges_old/see_college.php?id=<?php echo $id; ?>" data-width="752" data-numposts="7"></div>
</div>
</div>


<?php

    include '..user_id..user_idfooter.php';

?>







 <!-- Javascript files-->
 
    <script src="js/jquery-1.11.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><user_id/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>










