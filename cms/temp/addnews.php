<?php
session_start();
require("../../db_connect.php");
if(!isset($_SESSION['username'])){
  //echo $_SESSION['username']; 
  echo "<script>window.open('../index.php','_self')</script>";
} 
include'header.php';
?>

<script>

function add_fields7(){
var ndiv=document.createElement('div');
ndiv.innerHTML="<input type='text' name='tags[]'  class='form-control'>";
document.getElementById("f7_tags").appendChild(ndiv);
}
</script>
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

                       
                                <form action="../php/addnews_script.php" method="post" role="form" enctype="multipart/form-data" novalidate>
                                  <div class="form-group">
                                  <h3>Title</h3><br>
                                  <input type="text" name="title" style="width: 100%;" placeholder="title here" required></input><br>
                                  </div>
                                  <div class="form-group">
                                  <h3>Content</h3><br>
                                  <textarea id="newscontent" name="text" style="width: 100%;" placeholder="content here" required></textarea>
                                  </div>
                                  <div class="form-group">  

                                  <div class="form-group">
                                    <label>image : </label><input type="file" name="image">
                                  </div>
                                  <div class="form-group">
                                    <label>background image : </label><input type="file" name="b_image">
                                  </div>
                                  <div class="popular-post-grids">
                                 <h3 id="tags"><strong>Tags</strong></h3>
                                           <div id="f7_tags">
                                              <input type="text"  name="tags[]" required class="form-control">
                                            </div>
                                  <br><input type="button" value="Add Another" onClick="add_fields7()" class="form-control">
                                            
                                  </div>
                                  <br>
                                  <div class="form-group">
                                  <input type="submit" value="submit" name=submit></div>
                                </form>

                     
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php include'footer.php';?>