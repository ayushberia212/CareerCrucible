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

                       
                                <form action="../php/addblog_script.php" method="post" role="form" enctype="multipart/form-data" novalidate>
                                  <div class="form-group">
                                  <h3>Title</h3><br>
                                  <textarea name="title" style="width: 100%;" required>title here</textarea><br>
                                  </div>
                                  <div class="form-group">
                                  <h3>Content</h3><br>
                                  <textarea name="text" style="width: 100%;" required>content here</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label>image : </label><input type="file" name="image">
                                  </div>
                                  <div class="form-group">
                                    <label>background image : </label><input type="file" name="b_image">
                                  </div>
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