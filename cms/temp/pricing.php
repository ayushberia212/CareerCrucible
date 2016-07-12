<?php
session_start();
require ("../../db_connect.php");
if(!isset($_SESSION['username'])){
  echo "<script>window.open('../index.php','_self')</script>";
}
include'header.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['submit'])){
		$eliteprice=mysqli_real_escape_string($db,$_POST['eliteprice']);
		$elitedisc= mysqli_real_escape_string($db,$_POST['elitedisc']);
		$genprice=mysqli_real_escape_string($db,$_POST['genprice']);
		$gendisc= mysqli_real_escape_string($db,$_POST['gendisc']);	
		$colprice=mysqli_real_escape_string($db,$_POST['colprice']);
		$coldisc= mysqli_real_escape_string($db,$_POST['coldisc']);
		$elitesql="Update pricing set Price=$eliteprice,Discount=$elitedisc where Category='elite'";
		$gensql="Update pricing set Price=$genprice,Discount=$gendisc where Category='general'";
		$colsql="Update pricing set Price=$colprice,Discount=$coldisc where Category='college'";
		if(mysqli_query($db,$elitesql)&&mysqli_query($db,$gensql)&&mysqli_query($db,$colsql))
		{
			echo "<script>alert('Updated Succesfully.')</script>";
		}
		else
		{
			echo "<script>alert('Something's wrong.Try Again.')</script>";
		}	
	}
} 
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Images\logo.png ">

    <title>login</title>
  
    <!-- Bootstrap core CSS -->
    <link href="..\css\bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..\css\ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="..\js\ie-emulation-modes-warning.js"></script>

	<style>
		.error{color:#FF0000;p}	
		ComfirmPassword-error{}
	</style>
</head>
<body>
	<?php 
          include"sidebar.php";
        ?>
	<div class="conntainer">
		<form class="form-horizontal col-sm-offset-4" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
			<legend>Pricing Details</legend>
			<div class="form-group">
			    <label for="inputText" class="col-sm-2 control-label">Elite Price</label>
			    <div class="col-sm-10">
			      <input type="number" min="0" name="eliteprice" class="form-control" id="eliteprice" placeholder="Price in INR" style="width:40%">
			   	  <span id="ep-error" class="error"></span>
			    </div>
			</div>
			<div class="form-group">
			    <label for="inputText" class="col-sm-2 control-label">Elite Discount</label>
			    <div class="col-sm-10">
			      <input type="number" min="0" max="100" name="elitedisc" class="form-control" id="elitedisc" placeholder="Discount in %" style="width:40%">
			      <span id="ed-error" class="error"></span>
			    </div>
			</div>
			<div class="form-group">
			    <label for="inputText" class="col-sm-2 control-label">General Price</label>
			    <div class="col-sm-10">
			      <input type="number" min="0" name="genprice" class="form-control" id="genprice" placeholder="Price in INR" style="width:40%">
			      <span id="gp-error" class="error"></span>
			    </div>
			</div>
			<div class="form-group">
			    <label for="inputText" class="col-sm-2 control-label">General Discount</label>
			    <div class="col-sm-10">
			      <input type="number" min="0" max="100" name="gendisc" class="form-control" id="gendisc" placeholder="Discount in %" style="width:40%">
			      <span id="gd-error" class="error"></span>
			    </div>
			</div>
			<div class="form-group">
			    <label for="inputText" class="col-sm-2 control-label">College Price</label>
			    <div class="col-sm-10">
			      <input type="number" min="0" name="colprice" class="form-control" id="colprice" placeholder="Price in INR" style="width:40%">
			   	  <span id="cp-error" class="error"></span>
			    </div>
			</div>
			<div class="form-group">
			    <label for="inputText" class="col-sm-2 control-label">College Discount</label>
			    <div class="col-sm-10">
			      <input type="number" min="0" max="100" name="coldisc" class="form-control" id="coldisc" placeholder="Discount in %" style="width:40%">
			      <span id="cd-error" class="error"></span>
			    </div>
			</div>
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="button" class="btn btn-primary" id="set">Set</button>
			    </div>
			</div>
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary" id="submit" name="submit" style="display:none;">Set</button>
			    </div>
			</div>
		</form>
	</div>
<?php include'footer.php';?>
	<script src="..\js\jquery-1.11.3.min.js"></script>
    <!--script>window.jQuery || document.write('<script src="jquery-1.11.3.min.js"></script>')</script-->
    <script src="..\js\bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="..\js\holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="..\js\ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
		$("#set").click(function()
		{
			var output=valid();
			//alert(output+" "+e_flag+" "+u_flag+" "+p_flag+" "+c_flag);
			if(output)
			{	
				$("#submit").click();
			}
		});
		function valid() {
			var output=true;
			if(!($("#eliteprice").val())) {
					output = false;
					$("#ep-error").html("Required");
				}
			if(!($("#elitedisc").val())) {
				output = false;
				$("#ed-error").html("Required");
			}
			if(!($("#genprice").val())) {
					output = false;
					$("#gp-error").html("Required");
				}
			if(!($("#gendisc").val())) {
				output = false;
				$("#gd-error").html("Required");
			}	
			if(!($("#colprice").val())) {
					output = false;
					$("#cp-error").html("Required");
				}
			if(!($("#coldisc").val())) {
				output = false;
				$("#cd-error").html("Required");
			}		
			return output;
		}
		$("#elitedisc,#eliteprice").keyup(function()
		{
			var ep=$("#eliteprice").val();
			var ed=$("#elitedisc").val();
			if(ep&&ed&&ed<=100&&ed>=0)
			{
				var cal=ep-(ep*(ed)/100);
				$('#ed-error').css('color','#00FF00');
				$("#ed-error").html("Discounted Price:Rs."+cal);
			}	
			else if(ed>100||ed<0)
			{
				$('#ed-error').css('color','#FF0000');
				$("#ed-error").html("invalid discount");	
			}	
			else
			{
				$('#ed-error').css('color','#FF0000');
				$("#ed-error").html("");
			}
		});
		$("#gendisc,#genprice").keyup(function()
		{
			var gp=$("#genprice").val();
			var gd=$("#gendisc").val();
			if(gp&&gd&&gd<=100&&gd>=0)
			{
				var cal=gp-(gp*(gd)/100);
				$('#gd-error').css('color','#00FF00');
				$("#gd-error").html("Discounted Price:Rs."+cal);
			}	
			else if(gd>100||gd<0)
			{
				$('#gd-error').css('color','#FF0000');
				$("#gd-error").html("invalid discount");	
			}	
			else
			{
				$('#gd-error').css('color','#FF0000');
				$("#gd-error").html("");
			}
		});
		$("#coldisc,#colprice").keyup(function()
		{
			var cp=$("#colprice").val();
			var cd=$("#coldisc").val();
			if(cp&&cd&&cd<=100&&cd>=0)
			{
				var cal=cp-(cp*(cd)/100);
				$('#cd-error').css('color','#00FF00');
				$("#cd-error").html("Discounted Price:Rs."+cal);
			}	
			else if(cd>100||cd<0)
			{
				$('#cd-error').css('color','#FF0000');
				$("#cd-error").html("invalid discount");	
			}	
			else
			{
				$('#cd-error').css('color','#FF0000');
				$("#cd-error").html("");
			}
		});
    </script>
</body>