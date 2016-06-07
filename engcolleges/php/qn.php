<?php
include "../../db_connect.php"; 
//$con=connect();
/*if(!isset($_SESSION['consultant_id'])){
  echo "<script>window.open('../','_self')</script>";
}*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
    <link href="css/dashboard2.css" rel="stylesheet">
    <!--link href="../css/questions.css" rel="stylesheet"-->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/font-min.css">

    <link rel="stylesheet" href="css/style.css" id="theme-stylesheet">

    <link rel="shortcut icon" href="favicon.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

include '../../header.php';

?>
<div class="container">
	 <div id="blog" class="row">      
      	<?php
        if(isset($_GET['Question_Id']) && !empty($_GET['Question_Id']) AND isset($_GET['clg_id']) && !empty($_GET['clg_id'])){ 
            $Question_Id=mysqli_real_escape_string($db,$_GET['Question_Id']);
            $clg_id=mysqli_real_escape_string($db,$_GET['clg_id']);
            $query1="Select clg_name from college_info where clg_id='$clg_id';";
            $result1=mysqli_query($db,$query1);
            $University="";
            while($row=mysqli_fetch_assoc($result1))
            {
              $University=$row['clg_name'];
            }
            $query="Select Question from question where Question_Id='$Question_Id';";
            $result=mysqli_query($db,$query);
            $Question="";
            while($row=mysqli_fetch_assoc($result))
            {
              $Question=$row['Question'];
            }
            echo "<h1>$University</h1><br>";  
            echo "<h2>$Question</h2><br>";    
        		$query="SELECT * FROM Review R,Consultant C WHERE clg_id=$clg_id and Question_Id=$Question_Id and Approved=1 and C.Consultant_Id=R.Consultant_Id";
      			$result=mysqli_query($db,$query);
      			$no_row=mysqli_num_rows($result);
      			if($no_row > 0)
      			{
      				while($row = mysqli_fetch_assoc($result)) { 
      				$review=addslashes($row['Review']);
      			 	echo "<div class='col-md-10 blogShort' style='background-color:#EEE;margin:10px auto'><h3>$row[name]</h3><article><p>$review</p></article></div>";	
      			 	}
      			}
        }
        else
        {
            echo "<div class='col-md-10 blogShort' style='margin-left:-15px;margin-top:30px;'><b>No College and Question was Selected.<b></div>";
        }
        ?>
        <div class='col-md-10 blogShort' style=" margin-left:-15px;margin-top:30px;">
        	<a class="btn btn-primary" data-toggle="modal" data-target="#myModal">Answer a Question</a>
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
                      
                <?php
                  if(isset($_GET['Question_Id']) && !empty($_GET['Question_Id']) AND isset($_GET['clg_id']) && !empty($_GET['clg_id'])){ 
                      echo "<input id='collegename' name='collegename' type='text' Value='$University' placeholder='College Name' readonly  class='form-control input-md' required=''>";
                  }
                  else {
                    echo " <select id='collegename' name='collegename' class='form-control'>";
                    $query="SELECT * FROM college_info;";
                    $result=mysqli_query($db,$query);
                    $no_row=mysqli_num_rows($result);
                    if($no_row > 0)
                    {
                      while($row = mysqli_fetch_assoc($result)) { 
                      echo " <option value='$row[clg_name]'>$row[clg_name]</option>";  
                      }
                    }
                    echo "</select>";
                  }
                ?>
            </div>
          </div>
                   <div class="form-group">
					  <label class="col-md-4 control-label" for="question">Select Question</label>
					  <div class="col-md-7">
					    <select id="question" name="question" class="form-control">
					      <?php
                if(isset($_GET['Question_Id']) && !empty($_GET['Question_Id']) AND isset($_GET['clg_id']) && !empty($_GET['clg_id'])){ 
                  echo " <option value='$Question_Id'>$Question</option>";
  					      $query="SELECT * FROM question where Question_Id != $Question_Id;";
                }
                else
                {
                  $query="SELECT * FROM question";
                }
								$result=mysqli_query($db,$query);
								$no_row=mysqli_num_rows($result);
								if($no_row > 0)
								{
									while($row = mysqli_fetch_assoc($result)) { 
								 	echo " <option value='$row[Question_Id]'>$row[Question]</option>";	
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
                        <button type="submit" data-toggle="modal" data-target="#feedbackModal" id="AddAnswer" name="AddAnswer"  class="btn btn-primary">Add Answer</button>
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
            <div class='col-md-10 blogShort' style=" margin-left:-15px;margin-top:30px;">
          <?php
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
              if(isset($_POST['AddAnswer'])       ) {
                $hash = md5(rand(0,1000));
                $University=mysqli_real_escape_string($db,$_POST['collegename']);
                $Question_Id= mysqli_real_escape_string($db,$_POST['question']);
                $user=$_SESSION['consultant_name'];
                $query1="Select clg_id from college_info where clg_name='$University';";
                $result1=mysqli_query($db,$query1);
                $clg_id=0;
                while($row=mysqli_fetch_assoc($result1))
                { 
                  $clg_id=$row['clg_id'];
                }
                $query="Select Question from question where Question_Id='$Question_Id';";
                $result=mysqli_query($db,$query);
                $Question="";
                while($row=mysqli_fetch_assoc($result)){
                  $Question=$row['Question'];
                }
                $consultant_Id= mysqli_real_escape_string($db,$_SESSION['consultant_id']); 
                $Answer= mysqli_real_escape_string($db,$_POST['answer']); 
                $InsertQuery="INSERT INTO review(Consultant_Id,clg_id,Question_Id,Review,Approved,hash) VALUES ($Consultant_Id,$clg_id,$Question_Id,'$Answer',0,'$hash')" ;
                if(mysqli_query($db,$InsertQuery)) {
                  $squery="Select Answer_Id from review where Question_Id=$Question_Id and Consultant_Id=$Consultant_Id and clg_id=$clg_id;";
                  $sresult=mysqli_query($db,$squery);
                  $Answer_Id=0;
                  while($row=mysqli_fetch_assoc($sresult)){
                    $Answer_Id=$row['Answer_Id'];
                  }
                  //      echo $Question_Id."  ".$clg_id." ".$Consultant_Id." ".$Answer_Id." ";
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
                    <b>College:</b> '.$University.'
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
                    //$headers = 'From:noreply@localhost'."\r\n"; // Set from headers        
                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        echo 'Message has been sent';
                    }
                    }
                else {
                  echo "<b>Your Answer was not Registered.Please write Again.<b>";
                }  
              }
            }
            ?>
            </div>
</div>

</div>


<?php

    include '../../footer.php';
?>

      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="js/jquery.min.js"></script>
    <!--script>window.jQuery || document.write('<script src="jquery-1.11.3.min.js"></script>'</script-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>