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
	  <li><a href="#">Notices</a></li>
	  
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
            
    <div style="font-family: Verdana; font-size: 12px;">
        <div>
            <h2>
                Notice</h2>
        </div>
        <div class="ticker stretched" style="font-family: Verdana; font-size: 16px; color: Green;">
            <ul id="latestNews">
                
                
                
                
                <li>
                    <div>
                        [25/01/2016] Call from Waiting List-2451-2750 [25/01/2016]</div>
                </li>
            </ul>
        </div>
        <br />
        <br />
        <div class="notice">
            <h2>
                <a href="Information/Notice_25_01_2016/Call from Waiting List-2451-2750.pdf">[25/01/2016]
                    Call from Waiting List-2451-2750 [25/01/2016]</a></h2>
        </div>
        <br />
        <br />
        <div class="notice">
            <h2>
                <a href="Information/Notice_25_01_2016/AvailableDepartment (18).pdf">[25/01/2016] Undergraduate
                    Admission Available Seats</a>
                <br />
                <img id="MainContent_Img25" src="Information/Notice_25_01_2016/AvailableSeat.png" style="width:930px;" />
            </h2>
        </div>
        <br />
        <br />
        <div class="notice">
            <h2>
                <a href="Information/Notice_25_01_2016/Department_Obtained_Level_19.pdf">[25/01/2016]
                    List of Admitted Students and their Obtained Department according to Merit From
                    Merit 1 to 2450</a></h2>
        </div>
        <br />
        <br />
        <div class="notice">
            <a href="Information/Notice_12_01_2016/Call from Waiting List-2151-2450.pdf">[12/01/2016]
                Call for Waiting List from Merit 2151 to 2450 [25/01/2016]</a>
        </div>
        <br />
        <br />
        <div class="notice">
            <a href="Information/Notice_12_01_2016/AvailableDepartment (16).pdf">[12/01/2016] Undergraduate
                Admission Available Seats</a>
        </div>
        <br />
        <br />
        <div class="notice">
            <a href="Information/Notice_12_01_2016/Department_Obtained_Level_17.pdf">[12/01/2016]
                List of Admitted Students and their Obtained Department according to Merit From
                Merit 1 to 2150</a>
        </div>
        <br />
        <br />
        <div class="notice">
            <a href="Information/Notice_29_12_2015/Call from Waiting List-1851-2150.pdf">[29/12/15]
                Call for Waiting List from Merit 1851 to 2150 [11/01/2016]</a>
        </div>
        <br />
        <br />
        <div class="notice">
            <a href="Information/Notice_29_12_2015/AvailableDepartment (13).pdf">[29/12/15] Undergraduate
                Admission Available Seats</a>
            
        </div>
        <br />
        <br />
        <div class="notice">
            <a href="Information/Notice_29_12_2015/Department_Obtained_Level_14.pdf">[29/12/15]
                List of Admitted Students and their Obtained Department according to Merit From
                Merit 1 to 1850</a>
            
        </div>
        <br />
        <br />
        <div class="notice">
            <a href="Information/Notice_21_12_2015/AvailableDepartment_11.pdf">[21/12/15] Undergraduate
                Admission Available Seats</a>
            
        </div>
        <br />
        <br />
        <div class="notice">
            <a href="Information/Notice_21_12_2015/Call from Waiting List-1571-1850.pdf">[21/12/15]
                Call for Waiting List from Merit 1571 to 1850 [28/12/2015]</a>
        </div>
        <br />
        <br />
        <div class="notice">
            <a href="Information/Notice_21_12_2015/Department_Obtained_Level_11.pdf">[21/12/15]
                List of Admitted Students and their Obtained Department according to Merit From
                Merit 1 to 1570</a>
            
        </div>
        <br />
        <br />
        
        
        
        <br />
        <div class="notice">
            List of Eligible Candidate for Admission Test <a href="Information/Eligble_Candidate_List.pdf">
                Click here to download...</a></div>
        <br />
        <br />
        <div class="notice">
            Acceptable Calculator List for Admission 2015 - 2016 Session <a href="Information/List_of_ACCEPTABLE_Calculators_List.pdf">
                Click here to download...</a></div>
        <br />
        <br />
        <div class="notice">
            Admission Notice 2015 - 2016 Session <a href="Information/Admission Notice (2015-2016).pdf">
                Click here to download...</a></div>
        <br />
    </div>

        </div>
    </div>
    <div id="bottomdiv" style="font-family: Verdana; font-size: 11px; color: White;"
        align="center">
        <div style="margin-top: 10px;">
            Copyright &copy; KUET 2015, Powered by: IICT, Developed by: Engr. Md. Nazim Uddin,
            Engr. S. M. Saifur Rahman, Engr. Mehirlal Sarker, Engr. Prodip Kumer Das. <a style="font-family: Verdana;
                color: White;" href="Information/Credit.aspx">[ Details... ]</a>
        </div>
    </div>
    </form>
</body>
</html>
