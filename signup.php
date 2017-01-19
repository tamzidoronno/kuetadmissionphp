<!DOCTYPE HTML> 
<html>

 <script type="text/javascript">
 function check2(){
	 var pass2 = document.getElementById('p2');
      var message = document.getElementById('c'); 
	 
 }
    function checkPassImg(){
 
      var pass1 = document.getElementById('p1');
      var pass2 = document.getElementById('p2');
      var message = document.getElementById('confirmMessage');
      var ms=document.getElementById('cm');
      var goodColor = "#096E1D";
      var badColor = "#F60707";
        
      if(pass1.value == pass2.value){
     
        pass2.style.borderColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Password Matched :)";
      }else{
  
        pass2.style.borderColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Password Doesn't Match";
      }
    }  
	function checklength()
	{
		
		 var pass1 = document.getElementById('p1');
      var pass2 = document.getElementById('p2');
      var message = document.getElementById('confirmMessage');
      var ms=document.getElementById('cm');
      var goodColor = "#096E1D";
      var badColor = "#F60707";
	     var value=pass1.value;
		 var len=value.length;
        if(value.length<8){
			  pass1.style.borderColor = badColor;
		 ms.style.color = badColor;
        ms.innerHTML = "    Too short";	
		}
		else{
			  pass1.style.borderColor = goodColor;
			 ms.style.color = goodColor;
        ms.innerHTML = " ";
		}
		
		
	}
	  
	
	
	
  </script>

<head>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/custbootstrap.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>

</style>

<div class="wrapper">
<div align="center">
	
<div class="logo"><img src="images/kuet.png" />  </div>
  <div class="logo-title">Khulna University of Engineering & Technology</div>
  <div class="header"> <br>
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
	  
  
    </ul>


</p></b>
  </div>
 <?php

// $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $name = $email = $gender = $comment = $website = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // if (empty($_POST["name"])) {
     // $nameErr = "Name is required";
   // } else {
     // $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
     // if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       // $nameErr = "Only letters and white space allowed"; 
     // }
   // }
   
   // if (empty($_POST["email"])) {
     // $emailErr = "Email is required";
   // } else {
     // $email = test_input($_POST["email"]);
   //  check if e-mail address is well-formed
     // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       // $emailErr = "Invalid email format"; 
     // }
   // }
     
   // if (empty($_POST["website"])) {
     // $website = "";
   // } else {
     // $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     // if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       // $websiteErr = "Invalid URL"; 
     // }
   // }

   // if (empty($_POST["comment"])) {
     // $comment = "";
   // } else {
     // $comment = test_input($_POST["comment"]);
   // }

   // if (empty($_POST["gender"])) {
     // $genderErr = "Gender is required";
   // } else {
     // $gender = test_input($_POST["gender"]);
   // }
// }

// function test_input($data) {
   // $data = trim($data);
   // $data = stripslashes($data);
   // $data = htmlspecialchars($data);
   // return $data;
// }
// ?>
<?php
$con = mysql_connect("localhost","root","") or die("Sam " . mysql_error());
mysql_select_db("signup",$con); 
$sscRoll = $_POST["sscRoll"];
$hscRoll = $_POST["hscRoll"];
//$username = "rabbi";
//$password = "111";
$query = "SELECT * FROM `student` WHERE `ssc_roll`='".$sscRoll."' and `hsc_roll`='".$hscRoll."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

 $idst = 	$row['id'];
//var_dump($row);
?>
<font size="4">
<body>
		<div class="grad"></div>
<div align="center">
<b>
<h2>Application Form</h2>
<br>
<div class="wrapper">

<div align="left">
<p><span class="error">* All fields are required</span></p>
<form action="appslnmbr.php" method="POST" enctype="multipart/form-data"> 
   Name: <input type="text" style="background-color:#c2c2a3;" size="60" name="name" value=<?php echo 	$row['name'];?> readonly >
   <br><br>
   HSC Roll: <input type="text" style="background-color: #c2c2a3;" name="hscroll"  value=<?php echo 	$row['hsc_roll'];?> readonly>
   Board: <input type="text" style="background-color: #c2c2a3;" name="hscbrd"  value=<?php echo 	$row['hsc_board'];?> readonly >
Result:  <input type="text" style="background-color: #c2c2a3;" size="4" name="hscrslt"  value=<?php echo 	$row['hsc_result'];?> readonly>
 <br><br>
   SSC Roll: <input type="text" style="background-color: #c2c2a3;" name="sscroll"  value=<?php echo 	$row['ssc_roll'];?> readonly>
   Board: <input type="text" style="background-color: #c2c2a3;" name="hscroll"   value=<?php echo 	$row['ssc_board'];?> readonly>
Result:  <input type="text" style="background-color: #c2c2a3;" size="4" name="sscrslt"  value=<?php echo 	$row['ssc_result'];?> readonly>
   <br><br>
   HSC GPA of:<br> Mathematics: <input type="text" style="background-color: #c2c2a3;" size="2" name="math"  value=<?php echo 	$row['math'];?> readonly>
   
   <input type="hidden" style="background-color: #c2c2a3;" size="2" name="idst"  value=<?php echo 	$row['id'];?> >
   
   Physics: <input type="text" style="background-color: #c2c2a3;" size="2" name="phy"  value=<?php echo 	$row['phy'];?> readonly>
   Chemistry: <input type="text" style="background-color: #c2c2a3;" size="2" name="che"  value=<?php echo 	$row['che'];?> readonly>
   English: <input type="text" style="background-color: #c2c2a3;" size="2" name="eng"  value=<?php echo 	$row['eng'];?> readonly><br><br>
   E-mail: <input type="text" name="email">
   Phone No: <input type="text" name="phn">
   <br><br>
   Password:<input type="password" name="pswrd" id="p1" onkeyup="checklength()" />
   <span id="cm" >  </span>
<br><br>
Repeat password:<input type="password" name="pswrd2" id="p2" onkeyup="checkPassImg()"; return false; />
<span id="confirmMessage" >  </span>
<br><br>  

   Upload your photo:
    <input type="file" name="image_link">
<br>
    Upload your signature:
    <input type="file" name="sign_link">
	<br>
	
   <button margin-left="200px" type="submit" class="btn btn-success" name="sbmit">Submit</button>
  </form>


</head> 


</html>