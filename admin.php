<?php
ob_start();
?>
<html>
<head>
<link href="css/styling.css" rel="stylesheet" type="text/css" />

<style>
.login:before {
    background: rgba(38, 121, 130, 0.43);
}


</style>
</head>
<div class="wrapper">
<div align="center">





<br><br>
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
	  
	  
    </ul>
  </div>
  <div class="logfixed">
  <div class="container">
<div class="login">
<form method="post" action="admin.php"> <h2>
<p>Admin Username <input type="text" name="adminin"/></p> 
<p>Password <input type="password" name="adminps"/></p> 
<p><input type="submit" name="submit" value="Log In" /> </p> 
</h2>

<?php
if(isset($_POST["adminin"]) && isset($_POST["adminps"]))
{
if(($_POST["adminin"]=="admin") && ($_POST["adminps"]=="admin"))
{
	header("Location: admintablebackup.php");
}

else
	echo "<h3> <p style='color:red; size:20'>Wrong Username or Password </p> </h3>";
}
?></html>