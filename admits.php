<?php
ob_start();
// if(isset($_COOKIE["username"])){
	// session_start();
	// $_SESSION["username"]
// }


?>
<!DOCTYPE>
<html>
<head>

<link href="css/styles.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/reset-font-min.css">
<link rel="stylesheet" href="css/clearfix.css">
<link rel="stylesheet" href="css/jquery.newsticker.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/custbootstrap.css" type="text/css" />
  <script src="js/aj.js"></script>
  <script src="js/boot.js"></script>
  
  
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin:;
  }
  .modal-content {
    position: relative;
    background-color: rgb(140, 167, 129);
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
    box-shadow: 0 3px 9px rgba(0,0,0,.5);
}

button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    background-color: #83AF5A;
    cursor: pointer;
    width: 130px;
	margin-left: 220px;
}
.btn-success {
    color: #FFF;
    background-color: #5cb85c;
    border-color: #000000;
    width: 164px;
    margin-left: 489px;
    margin-top: 10px;
}
  </style>
</head>
<body>
<div class="wrapper">
<div class="logo"><img src="images/kuet.png" />  </div>
  <div class="logo-title">Khulna University of Engineering & Technology</div>
  <div class="header">
    <h1> <b>Undergraduate Admission -2016 </b></h1>
  </div>


  <div class="menu">
    <ul>
      <li><a href="admits.php">Home</a></li>
	  <li><a href="instruction.php">Instruction</a></li>
      <li><a href="eligibility.php">Eligibility</a></li>
	  <li><a href="notices.php">Notices</a></li>
	  
	  <li><a href="result.php">Result</a></li>
      <li><a href="FAQ.php">FAQ</a></li>
	  <li><a href="#">Contact</a></li>
	   <li><a href="admin.php">Admin Login</a></li>
	  <li>
	
	  <?php
	  
	  
	  if(isset($_COOKIE["user"])){
		
		 echo '<a href="admlogout.php">Logout ('.$_COOKIE['user'].')</a>';
		} 
	  			  
	  else{
		  
	header("Location: prox.php");

			  echo '<a href="kkk.php">Login</a>';
		  
	  }
	  ?>
	  </li>
  
    </ul>


</p></b>
  </div>
  
<body>
<div class="newsticker">
    <ul class="newsticker-list">
        <li class="newsticker-item">
        	Deadline of Online Application Submission	11 October, 2015, Sunday, 11:59 PM
        </li>
        <li class="newsticker-item">
        	Deadline to Pay the Application Fees through DBBL Mobile Banking	12 October (Monday), 2015, 11:59 PM
        </li>
        <li class="newsticker-item">
        	Publishing the List of Qualified Candidates for Admission Test	27 October (Tuesday), 2015
        </li>
		<li class="newsticker-item">
        	Date and Time of Admission Test	6 November (Friday), 2015 (Duration: 09:30 - 12:00PM)
		</li>
    </ul>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.newsticker.js"></script>

<?php
	 if((isset($_SESSION["username"]))){
		  if($_SESSION["eligible"]==1)
		  echo '<a type="submit" class="btn btn-success" name="sbmit" href="pdfmysqc\pdfwrt.php">Download Admit Card</a>';
		  else{
			 echo '<h2 style="color:red;margin-left:277px;">Sorry! You are not eligible for the admission test</h2>';
	  }
	  }else{
		  echo '<div class="apply">
	
		<input type="image" src="applybutton.gif"  data-toggle="modal" data-target="#myModal">
	</div>';
	  }
	  
	  ?>
	
	
	
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="signup.php"> 
<h2>SSC Roll <input type="text" name="sscRoll" id="sscRoll" /> <br><br>
HSC Roll <input type="text" name="hscRoll" id="hscRoll" /> <br><br>
<p> <button name="submit">Enter </button> </p> 
</h2>
        </div>
    </div>
  </div>
  
</div>
	
	
	
	
    <div class="floating-box">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
	  <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="kuetpic/8.jpg" width="960" height="345">
      </div>

      <div class="item">
        <img src="kuetpic/13.jpg"  width="960" height="550">
      </div>
    
      <div class="item">
        <img src="kuetpic/5.jpg"  width="960" height="345">
      </div>

      <div class="item">
        <img src="kuetpic/4.jpg"  width="960" height="345">
      </div>
	  <div class="item">
        <img src="kuetpic/5.jpg"  width="960" height="345">
      </div>
	  <div class="item">
        <img src="kuetpic/6.jpg"  width="960" height="345">
      </div>
	  <div class="item">
        <img src="kuetpic/7.jpg"  width="960" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
   
  </div>
</div>

  <div class="copy-rights"> Copyright (c) reserved by Tamzid Rahman Oronno <br> Photos from: https://www.facebook.com/km.inceptionist/media_set?set=a.624454417575612.1073741837.100000331771063&type=3&pnref=story
  </div>

  

</body>

</html>
