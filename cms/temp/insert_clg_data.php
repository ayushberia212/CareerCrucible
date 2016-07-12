<?php
session_start();
require ("../../db_connect.php");
if(!isset($_SESSION['username'])){
  echo "<script>window.open('../index.php','_self')</script>";
} 
include 'header.php';
?>
<body>
<?php 
  include"sidebar.php";
?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <a href="#menu-toggle" id="menu-toggle"> Click hear for toggle menu</a> -->

              <form action="../php/insert_clg_data_db.php"  enctype="multipart/form-data" method="post" novalidate>
		<!DOCTYPE html>
          <div class="container conta"> 
		  
                       <div class="colabout" >
 
                              <div class="col-md-9 " >
							  <h3>College Name:</h3> <input type="text"  name="clg_name" class="form-control" required>
                                 <h3 >About The College</h3>
								 
								 <textarea rows="7" cols="120" placeholder="Write about college..." class="form-control" name="clg_about"></textarea>
								 <br><br>
                                  <h3 >College Youtube link</h3>
								 <input type="text" name="clg_youtube" class="form-control" >
								 <br><br>
                             </div>
                               
                                  
                        </div>
                     
                    </div>


<!-- about section -->
    <section class="about  " id="about">
       <div class="container conta ">
          <div class="col-md-9">
          <div class="row text-center">
            <h2 class="heading" style="margin-bottom:-20px;">At A Glance</h2>
        
              <div class="single-about-detail clearfix">
                <div class="about-details">
                                    <h2><strong>Enter Contact info.</strong></h2>
                  <p><strong>Official website:</strong> <input type="text"  name="clg_website" class="form-control" required></p>
                                   <p><strong>Address:</strong> <input type="text"  name="clg_addr" class="form-control" required></p>
                                 <p><strong>Email :</strong><input type="email" name="clg_email" class="form-control" required></p>
                                   <p><strong>Contact:</strong><input type="text"  name="clg_number" class="form-control" required></p>
                    
              </div>
            </div>
		<br>
          
              <div class="single-about-detail">
                <div class="about-details">

                  <h2><strong>Infrastructure Info.</strong></h2>
                  <p><strong>Area</strong>-<input type="text"  name="clg_area" class="form-control" required></p>
                  <p><strong>Extra Information:</strong>
					<input type="text"  name="clg_area_extra" class="form-control editor">
                </div>
              </div>
			<br>

              <div class="single-about-detail">

                <div class="about-details">
                  <h2><strong>Mode of Admission</strong></h2>
                  <p>Infomation related to admission precess.</p>
                   <textarea  rows="9" placeholder="Write about admission process..." class="form-control" name="clg_admission" required></textarea>
								
				  </div>
              
            </div>
			<div class="single-about-detail">

                <div class="about-details">
                  <h2><strong>Placement</strong></h2>
                  <p>Infomation related to placement.</p>
                   <textarea  rows="9" placeholder="Write about placement..." class="form-control" name="clg_plac" required></textarea>
								
				  </div>
              
            </div>
			<div class="single-about-detail">

                <div class="about-details">
                  <h2><strong>Location</strong></h2>
                   <textarea  rows="9" placeholder="Write about Location..." class="form-control" name="clg_loc" required></textarea>
								
				  </div>
              
            </div>

           <br>

         
          
          
              <div class="single-about-detail">
                
                <div class="about-details">
                  <h2><strong>Fee Structure</strong></h2>
                  <p><strong>Total tuition Fee</strong><input type="text"  name="clg_total_fee" placeholder="Total annal tuition fee in INR" class="form-control" required></p>
                  <p><strong>Total Hostel Fee</strong><input type="text"  name="clg_total_hostel" placeholder="Total annal hostel fee" class="form-control" required></p>
				  <p><strong>Fee Structure pdf link</strong><input type="text"  name="clg_total_link" placeholder="link of fee structure" class="form-control" ></p>
				  
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
 <h2 class="heading">Cover Image</h2>
<input type="file" name="coverimg" class="form-control" required>
 <h2 class="heading">Icon Image</h2>
<input type="file" name="iconimg" class="form-control" required>
 <h2 class="heading">College Gallery</h2>
<input type="file" name="img1" class="form-control" >
<input type="file" name="img2" class="form-control" >
<input type="file" name="img3" class="form-control" >
<input type="file" name="img4" class="form-control" >
<input type="file" name="img5" class="form-control" >
</div>
</div>
</div>
</div>

<script language="Javascript">
var count_btech=1;
function add_fields(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='course[]' placeholder='course name' class='form-control editor' ><br>";
document.getElementById("add_field").appendChild(ndiv);
count_btech++;
}
var count_barch=1;
function add_fields1(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='arch[]' placeholder='course name' class='form-control editor' ><br>";
document.getElementById("add_field1").appendChild(ndiv);
count_btech++;
}
var count_mtech=1;
function add_fields2(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='mtech[]' placeholder='course name' class='form-control editor' ><br>";
document.getElementById("add_field2").appendChild(ndiv);
count_mtech++;
}
var count_msc=1;
function add_fields3(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='msc[]' placeholder='course name' class='form-control editor' ><br>";
document.getElementById("add_field3").appendChild(ndiv);
count_msc++;
}
</script>

   <div class="container conta"  >


        <section id="text" class="col-md-9 section-gray" >
             
            <h3><strong>Courses Offered &amp; Reviews</strong></h3>
           
                <div class="courses">
                <h4>Add B.Tech Courses</h4>
                   <textarea  rows="9" placeholder="B.Tech" class="form-control" name="course" required></textarea>

           </div>
               
              <div class="courses">
              <h4>Add B.Arch Courses</h4>
                   <textarea  rows="9" placeholder="B.Arch" class="form-control" name="arch" required></textarea>

        </div>

          <div class="courses">
               <h4>Add Msc.Tech Courses</h4>
                   <textarea  rows="9" placeholder="Msc Tech." class="form-control" name="mtech" required></textarea>

      </div>

          <div class="courses">
               <h4>Add Integrated MSc Courses</h4>
                   <textarea  rows="9" placeholder="M.Sc." class="form-control" name="msc" required></textarea>
     </div>

   
    </section>

<!--Placements-->
  <script language="Javascript">
var count_p=1;
function add_fields4(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='placement_branch[]'  class='form-control editor'>";
document.getElementById("f1_placement").appendChild(ndiv);
var n1div=document.createElement('div');
n1div.innerHTML="<input type='text' name='placement_max_sal[]'  class='form-control editor'>";
document.getElementById("f2_placement").appendChild(n1div);
var n2div=document.createElement('div');
n2div.innerHTML="<input type='text' name='placement_avg_sal[]'  class='form-control editor'>";
document.getElementById("f3_placement").appendChild(n2div);
count_p++;
}

function add_fields5(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='past_recruties[]'  class='form-control editor'>";
document.getElementById("f5_placement").appendChild(ndiv);
}
function add_fields6(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='top_recruties[]'  class='form-control editor'>";
document.getElementById("f6_placement").appendChild(ndiv);
}

function add_fields7(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='tags[]'  class='form-control editor'>";
document.getElementById("f7_tags").appendChild(ndiv);
}
</script>
<style>
.widthp{
width:60%;
}
</style>

        <section id="text" class="col-md-9 section-gray" >
          
            <h3 id="placements"><strong>Placements</strong></h3>
            <div class="row">
   
                  <div class="popular-post-grids">
                    
                    <h4> Salary Range (Branchwise)</h4>
                    <div>
                    <div class="col-md-6 ">
                      <h5><b> Branch</b></h5>
                    </div>
                    <div class="col-md-3">
                      <h5><b> Max. salary</b></h5>
                    </div>
                    <div class="col-md-3">
                      <h5><b> Avg. Salary</b></h5>
                    </div>
                  </div>
                  <div>
                    <div class="col-md-6">
					<div class="widthp" id="f1_placement">
                      <input type="text"  name="placement_branch[]" required class="form-control">
                    </div>
					</div>
                    <div class="col-md-3">
                     <div class="widthp" id="f2_placement">
                      <input type="text"  name="placement_max_sal[]" required class="form-control">
                    </div>
                    </div>
                    <div class="col-md-3">
                      <div class="widthp" id="f3_placement">
                      <input type="text"  name="placement_avg_sal[]" required class="form-control">
                    </div>
					<br>
					<input type="button" value="Add Another" onClick="add_fields4()" class="form-control">
                    </div>
	  
                  </div>
                 
				</div>
				</div>
        <!--div>
                <h4>Salary Range</h4>
                   <textarea  rows="9" placeholder="Placement details" class="form-control" name="placement_branch" required></textarea>

           </div-->
              <div>
                <h4>Past Recruiters</h4>
                   <textarea  rows="9" placeholder="Past Recruiters" class="form-control" name="past_recr" required></textarea>

           </div>

               <div>
                <h4>Top Recruiters</h4>
                   <textarea  rows="9" placeholder="Top Recruiters" class="form-control" name="top_recr" required></textarea>

           </div>
                   
          <div>
          <div class="popular-post-grids">
         <h3 id="tags"><strong>Tags</strong></h3>
                   <div id="f7_tags">
                      <input type="text"  name="tags[]" required class="form-control">
                    </div>
          <br><input type="button" value="Add Another" onClick="add_fields7()" class="form-control">
                    
          </div>

            
</div>
<br><center>
<input type="submit" name="sub" value="Submit"></center>
                </form>





				
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php include'footer.php';?>

</body>
</html>