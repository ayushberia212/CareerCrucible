<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">
      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div class="container-fluid">
    <div class="navbar navbar-default ">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Dashboard</a>
      </div>
      <nav class="collapse navbar-collapse" role="navigation">
        <ul id="menu-menu" class="nav navbar-nav navbar-right">
      <li class="menu-tutorials" role="presentation"><a href="addnews.php" title="Tutorials">Home</a></li>
      <!-- <li class="menu-learn" role="presentation"><a href="#" title="Learn"><span class="glyphicon glyphicon-user"></span>
        <?php echo " ".$_SESSION['user'];
        ?></a></li> -->
         <li class="menu-tutorials" role="presentation"><a href="#" title="Tutorials"><?php echo "$_SESSION[username]"; ?></a></li>
      <li class="menu-themes" role="presentation"><a href="../php/logout.php" title="Themes"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>

        </nav>
      </div>
    </div>