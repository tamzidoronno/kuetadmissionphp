<?php
session_start();
$con = mysql_connect("localhost","root","") or die("Sam " . mysql_error());
mysql_select_db("signup",$con); 
$username = $_POST["username"];
$password = $_POST["password"];
//$username = "rabbi";
//$password = "111";
$query = "SELECT * FROM `student` WHERE `appsl`='".$username."' and `password`='".$password."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
//var_dump($row);
//$_SESSION["username"] = $row['appsl'];
//$_SESSION["password"] = $row['password'];
//echo "From Session: ".$_SESSION["username"];
?>
<html>
<head>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/reset-font-min.css">
<link rel="stylesheet" href="css/clearfix.css">
<link rel="stylesheet" href="css/jquery.newsticker.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin:;
  }
  </style>
</head>

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
	  if(isset($_SESSION["username"])){
		  echo '<a href="admlogout.php">Logout ('.$_SESSION['username'].')</a>';
	  }else{
		  echo '<a href="kkk.php">Login</a>';
	  }
	  ?>
	  </li>
  
    </ul>


</p></b>
  </div>

  <div id="innerdiv">
        <div style="padding: 34px 0px 50px 0;">
            
    <div class="content" style="font-family: Verdana; font-size: 16px;">
        <h2>
            Eligibility to Apply</h2>
        <div style="text-align: justify;">
            <ul style="list-style-type: disc">
                <li>Candidate must be a citizen of Bangladesh.</li>
                <br />
                <li>Candidate must pass the HSC or equivalent examination in the year 2015 or obtained
                    'A' level after November, 2014.</li>
                <br />
                <li>Candidate must obtain at least GPA 4.0 in SSC or equivalent examination from any
                    Board of Intermediate and Secondary Education/Madrasha Education Board/Technical
                    Educational Board in Bangladesh or obtain equivalent grade in equivalent examination.
                </li>
                <br />
                <li>Candidate must obtain total GP 18.00 in Mathematics, Physics, Chemistry and English
                    in HSC or equivalent examination from any Board of Intermediate and Secondary Education/Madrasa
                    Education Board/Technical Educational Board in Bangladesh and must obtain at least
                    GP 3.50 in Mathematics, Physics and Chemistry individually and GP 3.00 in English
                    in HSC/Alim or equivalent examination or obtain equivalent grade from Foreign Education
                    Board. </li>
                <br />
                <li>If the candidate passed GCE 'O' level and/or 'A' level, s/he must be passed in at
                    least 5 subjects including physics, chemistry, mathematics and english with B grade
                    in each at GCE 'O' level and must obtain minimum 'B' grade in Physics, Chemistry
                    and Mathematics individually at GCE 'A' level. </li>
            </ul>
        </div>
        <!-- end .content -->
    </div>
    <div class="content" style="text-align: justify; font-family: Verdana; font-size: 16px;">
        <h2>
            Selection Criteria for Qualified Applicants for Admission Test</h2>
        <ul style="list-style-type: disc">
            <li>A merit list will be prepared among the valid applications submitted within the
                deadline, based on the applicant's acquired grade points in the subjects of Mathematics,
                Physics, Chemistry and English. If the number of candidates exceeds 7500, the top
                7500 candidates will be eligible for the admission test. If the 7500 th candidates
                are more than one, then the least number of candidates will be selected on the basis
                of the applicant's acquired HSC subject-wise grade points in the subjects of Mathematics,
                Physics, Chemistry and English or even the grade point average of HSC and SSC respectively.<br />
            </li>
            <br />
            <li>The final list of the qualified applicants will be displayed on the notice board
                of KUET. The list will also be available in the assigned website. The candidate
                has to collect all these information with his/her own responsibility.<br />
            </li>
        </ul>
        <!-- end .content -->
    </div>

        </div>
    </div>
	
	</div>
	</body>
</html>