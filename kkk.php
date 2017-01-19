<html>
<head>
<link href="css/styling.css" rel="stylesheet" type="text/css" />

<style>

</style>
<div class="wrapper">
<div align="center">

<?php
/*
if(!isset($_POST['username']) || !isset($_POST['password'])){
	
}
else{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$sql = "select id from student where appsl='$user' AND password='$pass'" ;
	$res=mysql_query($sql);

while($row=mysql_fetch_array($res)){
	if($row['id']){
		session_start();
		$_SESSION['username'] = $user;

	 if(isset($_POST['rem'])){
		setcookie('user',$user,time()+5);		
	 }
  	
       	
		
	header("Location: kuetadmission.php");
		
	}
	
	
}

echo "<p style='color:red;bottom:0;display:inline;margin-left:10%'>Wrong Email and Password</p>";
}
*/
?>
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
	
  
    </ul>


</p></b>
  </div>
  <div class="logfixed">
  <div class="container">
<div class="login">
<form method="post" action="kuetadmission.php"> 
<br><br>
<p><label for="username"><h2>Applicantion SL No. <input type="text" name="username" id="username" /></label></p> 
<p><label for="password">Password   <input type="password" name="password" id="password" /></label></p> 
<p>&nbsp;<input type="checkbox" name="rem"/> Remember Me</p> 
<p><input type="submit" name="submit" value="Log In" /> </p> 
</form>
</h2>


</head>

</html>