<?php
  session_start();
  $_SESSION['selectedAppID'] = 0;

  $_SESSION['appList'] = NULL;

  //check validity of the user
  $currentUserID=$_SESSION['currentUserID'];
  if($currentUserID==NULL){
    header("Location:index.php");
  }

  // Connect to database
    $conn = new mysqli("localhost","root","","sms");

  // Checks Connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

  $getName = "select S.firstName, S.middleName, S.lastName from student S where S.studentID = '".$_SESSION['currentUserID']."'";

  $nameResult = mysqli_query($conn,$getName);

  // Get every row of the table formed from the query
    while($rows9=mysqli_fetch_row($nameResult)){
      foreach ($rows9 as $key => $value){
	 	    if($key == 0){
          $_SESSION['currentUserName'] = $value;
		    }
    		if($key == 1){
    			$_SESSION['currentUserName'] = $_SESSION['currentUserName'] . " " . $value;
    		}
        if($key == 2){
          $_SESSION['currentUserName'] = $_SESSION['currentUserName'] . ". " . $value;
  		  }
	    }
    }
?>

<!DOCTYPE HTML>
<html>
  <head>


      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">


      <title>VidyaFund - About Us</title>

      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="css/main.css" rel="stylesheet">
      <link href="css/tempAboutUS.css" rel="stylesheet">
  </head>

  <body class = "no-sidebar">
    <div id = "page-wrapper">

      <!-- Header -->
        <header id = "header">
          <h1 id = "logo"><a href = "student/tempUserHome.php">VidyaFund <span>Empowering Futures</span></a></h1>
          <nav id = "nav">
            <ul>
              <li><a href = "student/tempUserHome.php">Home</a></li>
              <li><a href = "student/tempUserProfile.php">User Profile</a></li>
              <li><a href = "student/tempUserApply.php">Apply</a></li>
              <li><a href = "student/tempUserView.php">View Scholarship Status</a></li>
              <li><?php echo $_SESSION['currentUserName']. " (ID:" . $_SESSION['currentUserID'] . ")"?></li>
              <li><a href = "backend/logout.php" class = "button special">Logout</a></li>
            </ul>
          </nav>
        </header>

    <!--image-->

      <section>
        <!-- <section id="cta" > -->
          <div class="row">
            <img src="images/bg8.jpg" alt="VidyaFund Campus" style="width:100%" >
            <div class="text-block">
              <div class="transbox">
                <p>VIDYAFUND - INDIA'S PREMIER SCHOLARSHIP PLATFORM<p>
              </div>
            </div>
          </div>
        </section>

      <article id="main" >
        <section class="wrapper style3 container special">
              <div class="test2">
                <img src="images/call-us.png" style="float:right;margin-left:2%" >
                <p style="text-align:justify">A large segment of India’s potential workforce is unemployable without higher education. With 76.04% literacy rate and an increasing number of dropouts failing to enroll or complete any form of higher education, financial assistance is vital. Financial constraints and lack of know-how about education funding schemes are some of the key hurdles students face.</p>
                <p style="text-align:left">VidyaFund is endeavouring to bridge the gap between scholarship providers and scholarship seekers. As India’s premier scholarship portal, we help students across the nation by connecting the right opportunities with deserving scholars. Backed by a streamlined application system, VidyaFund is the dedicated platform that allows seekers and scholarship signatories to seamlessly coordinate education funding.</p>
              </div>
        </section>
    </article>

              <section class="wrapper style3 container special">
                <div class="row">
                  <div class="6u 12u(narrower)">

                    <section>
                      <a href="#" class="image featured"><img src="images/about-learning.jpg" alt="" style="height:300px"/></a>
                      <header>
                        <h3><b>Who We Are</b></h3>
                      </header>
                      <p>India’s premier scholarship network dedicated to making quality education accessible for all ambitious students through transparent financial support. VidyaFund unifies curated merit and need-based scholarships.</p>
                    </section>

                  </div>

                  <div class="6u 12u(narrower)">

                    <section>
                      <a href="#" class="image featured"><img src="images/our-mission.jpg" alt="" style="height:300px" /></a>
                      <header>
                        <h3><b>What We Do</b></h3>
                      </header>
                      <p>We provide easy access to verified scholarships with end-to-end application tracking for students, alongside comprehensive evaluation and disbursement management for institutions.</p>
                    </section>

                  </div>
                </div>
</div>

<!-- Footer -->
  <footer id="footer">

    <ul class="icons">
      <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
      <li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
      <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
      <li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
      <li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
    </ul>

    <ul class="copyright">
      <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>

  </footer>

      <!-- Scripts -->
      <!-- jQuery --
      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/jquery.scrolly.min.js"></script>
        <script src="js/jquery.scrollgress.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="js/main.js"></script>
  </body>
</html>
