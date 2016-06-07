 <?php
 if (@session_id() == "") @session_start();
 ?>
 <header class="header">
      <div class="sticky-wrapper">
        <div role="navigation" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#intro" class="navbar-brand scroll-to" id="top"><p>CareerCrucible</p></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li ><a href="../../index.html">Home</a></li>
              
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"id="test">Resources<span class="caret"></span></a>
                <ul class="dropdown-menu">
            <li><a href="../../engcolleges/college"id="test1" >Engineering colleges</a></li>
            <li><a href="../../engexams/"id="test1" >Engineering exams</a></li>
             <li><a href="#" id="test1">Exam calender</a></li>
             <li><a href="../../branchinfo/branchmain.html"id="test1" >Branch Info</a></li>
             <li><a href="../../branchreview/" id="test1">Branch Review</a></li>
          </ul>
        </li>

          <li><a href="../../news/news.html">News</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Counselling</a></li>
                
                  <?php
                  if(isset($_SESSION['user_id']))
                  {
                    echo '<li><a href="#">'.$_SESSION['user_name'].'</a></li><li><a href="//localhost/cc/slots/senior/php/logout.php">Logout</a></li>';
                  }
                  else{
                    echo '<li><a href="//localhost/cc/slots">Login</a></li>';
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>