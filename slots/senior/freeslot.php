<?php
session_start();
include '../../db_connect.php';
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}       
if(isset($_SESSION['user_id'])){
    if($_SESSION['role']=='junior')
    {
        header('location: ../junior/student_view.php');
        die();
    }
}
else
{
    header('location: ../');
}
?>  
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
        <link rel="stylesheet" href="css/style.freeslot.css" />
        <!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
        <link rel="stylesheet" href="css/font-min.css">

        <script src="js/jquery.min.js"></script>


        <!-- Custom Fonts -->
        <link rel="stylesheet" href="css/style.login.css">

        <!-- Custom CSS -->
        <link href="css/simple-sidebar.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>


        <?php
        include '../../header.php';
    ?>
            <div id="wrapper">


                <!-- Sidebar -->
               <!-- <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="#">
                                <?php //echo($_SESSION['user_name'])?>
                            </a>
                        </li>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="#">Free Slot</a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>

                    </ul>
                </div>-->
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper" >
                    <h3>&nbsp;&nbsp;Add Free Slots</h3>
                    <div class="container-fluid">
                        <p>Each slot is of 20 Minute and only one student can be consulted in one slot</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="php/add_slot.php" method="post">
                                    <label>Slot Date:</label>
                                    <input id="slot_date" name="slot_date" type="date" class="date" placeholder="dd/mm/yyyy" required="" />
                                    <br>
                                    <label>Slot Time From: </label>
                                    <input id="from_time" name="from_time" type="time" class="bfh-timepicker" value="08:20:00" step="1200" placeholder="" required="" />
                                    </br>
                                    <label>Num of slot: </label>
                                    <input id="num_slot" name="num_slot" type="number" min="1" step="1" max="10" class="bfh-timepicker" placeholder="" required="" />
                                    </br>
                                    <input type="submit" value="ADD" name="login" />
                                </form>
                            </div>
                            <div class="col-lg-12">
                                <?php
                        $con_id=$_SESSION['user_id'];
                        $sql = "SELECT slot_id,Consultant_Id, slot_date, from_time, to_time FROM freeslot WHERE Consultant_Id='$con_id' ";
                        $result = $db->query($sql);

                        if ($result->num_rows > 0) {
                          echo"<table class='table-condensed'>";
                          echo "<tr><th>Consultant ID</th><th>Slot Date</th><th>From_time</th><th>To_time</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo "<tr><td>".$row["Consultant_Id"]."&nbsp"." </td><td>".$row["slot_date"]." </td><td>".$row["from_time"]." </td><td>".$row["to_time"]."</td><td><a href='php/delete_slot.php?id=".$row["slot_id"]."'class='btn btn-info' role='button'>Delete</a></td></tr>";
                        }
                        echo "</table>";
                        } else {
                        echo "0 results";
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->

            </div>

            <?php
    include '../../footer.php';
?>


                <!-- jQuery -->
                <script src="js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>

               

    </body>

    </html>