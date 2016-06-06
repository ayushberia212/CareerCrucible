<?php
session_start();
require ("..\..\db_connect.php");
if(!isset($_SESSION['username'])){
  echo "<script>window.open('../index.php','_self')</script>";
} 
include'header.php';
?>
<div id="wrapper">

        <?php 
          include"sidebar.php";
        ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <a href="#menu-toggle" id="menu-toggle"> Click hear for toggle menu</a> -->

                       
<form action="../php/insert_branch_review_db.php" method="post" novalidate enctype="multipart/form-data" >
         <div class="container conta" style="margin-top:10px;" >
          <div class="col-md-9">
		  <div  class="  section-gray" style="margin-bottom:30px;">
          
            <h4>Image</h4>
            <div class="row">
              <div class="col-sm-12">
               <input type="file" name="img1" class="form-control" required>
                </div>
         </div>
       </div>
	    <div  class="  section-gray" style="margin-bottom:30px;">
          
            <h4>Background Image</h4>
            <div class="row">
              <div class="col-sm-12">
               <input type="file" name="img2" class="form-control" >
                </div>
         </div>
       </div>
		  <div  class="  section-gray" >
          
            <h4>College Name</h4>
            <div class="row">
              <div class="col-sm-12">
               <input type="text" name="clg" class="form-control" required></textarea>
                </div>
         </div>
       </div>
		  <div  class="  section-gray" >
          
            <h4>Branch Name</h4>
            <div class="row">
              <div class="col-sm-12">
               <input type="text" name="branch" class="form-control" required></textarea>
                </div>
         </div>
       </div>
        <div  class="  section-gray">
          
            <h4>Introduction </h4>
            <div class="row">
              <div class="col-sm-12">
               <textarea name="intro" rows="7" class="form-control" required></textarea>
                </div>
         </div>
       </div>
    


        <div class="section-gray">
          
            <h4>Infrastructure and Labs</h4>
            <div class="row">
              <div class="col-sm-12">
               
                <textarea name="infa_labs" rows="7" class="form-control" required></textarea>
				</div>
         </div>
       </div>



        <div  class="  section-gray">
          
            <h4>Branch Scope review</h4>
            <div class="row">
              <div class="col-sm-12">
               
                <textarea name="branch_scope" rows="7" class="form-control" required></textarea>
              </div>
         </div>
       </div>

      <div  class="  section-gray" >
          
            <h4>Branch faculty review</h4>
            <div class="row">
              <div class="col-sm-12">
               
                <textarea name="branch_faculty" rows="7" class="form-control" required></textarea>
              </div>
         </div>
       </div>

	 <div  class="  section-gray" >
          
            <h4>Collaboration/Tie-ups</h4>
            <div class="row">
              <div class="col-sm-12">
               
                <textarea name="col" rows="7" class="form-control" required></textarea>
              </div>
         </div>
       </div>
         <div  class="  section-gray">
          
            <h4>about</h4>
            <div class="row">
              <div class="col-sm-12">
               
                <textarea name="about" rows="7" class="form-control" required></textarea>
              </div>
         </div>
       </div>

        <div  class="section-gray" style="margin-bottom:30px;">
          
            
		 <center>
		  <input type="submit" name="sub" value="Submit" >
		  <input type="reset" value="Reset" >
		  </center>
        </div>
         </div>
</form>

                     
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php include'footer.php';?>