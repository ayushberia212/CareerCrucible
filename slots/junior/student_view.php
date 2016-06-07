<?php
    session_start();
    require("../../db_connect.php");
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consultant free slots</title>
    <!-- <link rel="stylesheet" href="css/style.login.css" > -->

    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.student_view.css">
    <!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
    <link rel="stylesheet" href="css/font-min.css">

    <script src="js/jquery.min.js"></script>
    
        <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>

<body>
  <?php
include "../../header.php";
   // if($_SESSION['role']=='senior')
    //{

?>

        <!--form action="student_view.php" method="get">
            <label>College : </label>
            <input id="college" name="college" type="text" class="college" placeholder="VJTI-mumbai" />
            <label name="specialization">Specialization : </label>
            <input id="spec" name="spec" type="text" class="spec" placeholder="Computer Engg." />
            <label name="specialization">Language : </label>
            <input id="lang" name="lang" type="text" class="spec" placeholder="Hindi" />
            <input type="submit" class="button" value="ADD" name="login" />
        </form-->


        <?php
    //}
if(isset($_GET['college'])){
  $college = strtolower($_GET['college']);
  $spec = strtolower($_GET['spec']);
  $lang = strtolower($_GET['lang']);
$sql="SELECT * FROM consultant WHERE LOWER(college) LIKE '%$college%' AND LOWER(specialization) LIKE '%$spec%' AND LOWER(languages) LIKE '%$lang%'";
}
else{
$sql = "SELECT * FROM consultant";
}
$result = $db->query($sql);
if($result->num_rows > 0){
echo '<div class="wrapper">';
while($row=$result->fetch_assoc()){
    if(!isset($_SESSION['role']) || $_SESSION['role']=='junior')
    {
        $href="consultant_prof.php?id=".$row['Consultant_Id'];
    }
    else if($_SESSION['role']=='senior'){
        if($row['Consultant_Id']==$_SESSION['user_id'])
        {
            $href="../senior/freeslot.php";
        }
        else
        {
            $href="../senior/viewslot.php?con_id=".$row['Consultant_Id'];
        }
    }
   
echo'
        <div class="col-xs-18 col-sm-6 col-md-2">
          <div class="thumbnail">
            
              <div class="caption">
              <a href="'.$href.'" title="View">
                <h4>'.$row['name'].'</h4>
                <p><label>College:</label> <span>'.$row['college'].'</span></p>
                <p><label>Degree:</label> <span>'.$row['degree'].'</span></p>
                <p><label>Specialization:</label> <span>'.$row['specialization'].'</span></p></a>
                <p><label>Laguages:</label> <span>'.$row['languages'].'</span></p></a>
            </div>
          </div>
        </div>
';
}
echo '</div>';
}

    include "../../footer.php";
?>
            <!-- <img src="http://placehold.it/500x250/EEE"> -->
</body>
</html>