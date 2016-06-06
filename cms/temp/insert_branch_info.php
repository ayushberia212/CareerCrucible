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
                        <!-- <a href="#menu-toggle" id="menu-toggle"> Click hear for toggle menu</a> akash-->

      <form action="../php/insert_branch_info_db.php" method="post" enctype="multipart/form-data" novalidate  >
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
               <input type="file" name="img2" class="form-control" required>
                </div>
         </div>
       </div>
		  <div  class="  section-gray" style="margin-bottom:30px;">
          
            <h4>Branch Name</h4>
            <div class="row">
              <div class="col-sm-12">
               <input type="text" name="branch" class="form-control" required>
                </div>
         </div>
       </div>
        <div  class="  section-gray" style="margin-bottom:30px;">
          
            <h4>ABOUT THE DISCIPLINE </h4>
            <div class="row">
              <div class="col-sm-12"><!-- akash-->
               <textarea name="about" rows="7" class="form-control" required></textarea>
                </div>
         </div>
       </div>
    


        <div class="section-gray" style="margin-bottom:30px;">
          
            <h4>THE COURSEWORK</h4>
            <div class="row">
              <div class="col-sm-12">
               
                <textarea name="coursework" rows="7" class="form-control" required></textarea>
				</div>
         </div>
       </div>



        <div  class="  section-gray" style="margin-bottom:30px;">
          
            <h4>JOB OPPORTUNITIES </h4>
            <div class="row">
              <div class="col-sm-12">
               
                <textarea name="job_oppor" rows="7" class="form-control" required></textarea>
              </div>
         </div>
       </div>

<script language="Javascript">
function add(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='top[]' class='form-control' ><br>";
document.getElementById("add").appendChild(ndiv);

}
function add1(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='best[]' class='form-control' ><br>";
document.getElementById("add1").appendChild(ndiv);

}
</script>
        
        <div  class="section-gray" style="margin-bottom:30px;">
          
            <h4>TOP Recruiters</h4>
            <div class="row">
              <div class="col-sm-12" >
			  <div id="add">
               <input type="type" name="top[]" class="form-control" required><br>
			   </div>
                
				<br><input type="button" name="top[]" onClick="add()" value="Add More" >
         </div>
		 </div>
       </div>


        <div  class=" section-gray" style="margin-bottom:30px;">
          
            <h4>Starting Salary</h4>
            <div class="row">
              <div class="col-sm-12">
               <input type="type" name="s_salary" class="form-control" required><br>
			    
        </div>
         </div>
       </div>


        <div  class="section-gray" style="margin-bottom:30px;">
          
            <h4>Best from</h4>
            <div class="row">
              <div class="col-sm-12">
               <div id="add1">
               <input type="type" name="best[]" class="form-control" required><br>
			   </div>
                
				<br><input type="button" name="best[]" onClick="add1()" value="Add More" >
			<br><br>
		 <center>
		  <input type="submit" name="sub" value="Submit" >
		  <input type="reset" value="Reset" >
		  </center>
        </div>
         </div>
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