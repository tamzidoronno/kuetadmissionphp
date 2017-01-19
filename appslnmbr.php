<?php
session_start();
$con = mysql_connect("localhost","root","") or die("Sam " . mysql_error());
mysql_select_db("signup",$con); 
$username = $_POST["username"];
$password = $_POST["password"];
//$username = "rabbi";
//$password = "111";
$query = "SELECT * FROM `student` WHERE `name`='".$username."' and `password`='".$password."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
//var_dump($row);
$_SESSION["username"] = $row['appsl'];
$_SESSION["pass"] = $row['password'];
//echo "From Session: ".$_SESSION["username"];
?>
<html>
<head>
<link href="css/styling.css" rel="stylesheet" type="text/css" />

<style>
.wrapper {
	width:960px;
	height:auto;
	margin:10px 150px;
	text-align:center;
	overflow:hidden;
	background color:red;
}


</style>
</head>

<?php
		
	$email	= $_POST['email'];
	$phone	= $_POST['phn'];
	$password	= $_POST['pswrd'];
	$image_link = "";
	
	$idst = 	$_POST['idst'];
	if($_FILES['image_link']['error']>0){
		echo 'error';
	}
	else{
		
		$upload_folder = 'upload/';

		$prefix = "";
		$link = $upload_folder.$prefix.$_FILES['image_link']['name'];
		move_uploaded_file($_FILES['image_link']['tmp_name'], $link);
		//move_uploaded_file($_FILES['image_link']['tmp_name'], $upload_folder.$_FILES['image_link']['name']);
		//move_uploaded_file($_FILES["image_file"]["tmp_name"],$link);
		$image_link = "F:/PHP/xampp/htdocs/motherpage/upload/".$_FILES['image_link']['name'];
	}
	
	$con = mysql_connect('localhost', 'root', '');
	/*if($con){
		echo 'success';
	 } */
	mysql_select_db('signup');



	//$query = "INSERT INTO `signup`.`student` (`name`, `hscroll`, `hscbrd`, `hscrslt`, `sscroll`, `sscbrd`, `sscrslt`, 'math', 'phy', 'che', 'eng', `email`, `phn`, `gender`, `pswrd`, `pswrd2`) VALUES ('$Name', '$Hscroll', '$Hscbrd', '$Hscrslt', '$Sscroll', '$Sscbrd', '$Sscrslt', '$Math', '$Phy', '$Che', '$Eng', '$Email', '$Phn', '$Gender', '$Pswrd', '$Pswrd2')";
	
		//$query = "insert into student (name,hsc_roll,hsc_board,hsc_result,ssc_roll,ssc_board,ssc_result,math,phy,che,eng,email,phone,gender,password,password2,image_link) values ('$name','$hsc_roll','$hsc_board','$hsc_result','$ssc_roll','$ssc_board','$ssc_result','$math','$phy','$eng','$email','$phone','$gender','$password','$password2','$image_link')";

		// mysql_query("insert into student (name,hsc_roll,hsc_board,hsc_result,ssc_roll,ssc_board,ssc_result,math,phy,che,eng,email,phone,gender,password,image_link) values ('$name','$hsc_roll','$hsc_board','$hsc_result','$ssc_roll','$ssc_board','$ssc_result','$math','$phy','$che','$eng','$email','$phone','$gender','$password','$image_link')");

		
		
		$query = "SELECT * FROM `student` WHERE `ssc_roll`='".$sscRoll."' and `hsc_roll`='".$hscRoll."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

 
 
		mysql_query("UPDATE  `signup`.`student` SET  `email` =  '$email',
`phone` =  '$phone',
`password` =  '$password',
`image_link` =  '$image_link',
`sign_link` =  '$sign_link' WHERE  `student`.`id` =$idst;
")


	//$result = mysql_query($query);
	//echo $result;
	
		/*$query="SELECT * FROM student ";
		$result = mysqli_query($con,$query);
		if($result){echo "success";}
		else echo "not successful";*/
		// while($row=mysqli_fetch_array($result)){
			// echo '<img height = "300" width = "300" src="data:image;base64,'.$row[image].'" >';
		


	 //header("Location:kuetadmission.php");
	
?>
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

 $appsl = 	 $_POST['idst'] +1000;
 
 mysql_query("UPDATE  `signup`.`student` SET  `appsl` =  '$appsl' WHERE  `student`.`id` =$idst;")
?>


<div class="wrapper">
<div align="center"
<div class="logo"><img src="images/kuet.png" />  </div>
  <div class="logo-title">Khulna University of Engineering & Technology</div>
  <div class="header">
    <h1> <b>Undergraduate Admission -2016 </b></h1>
  </div>

  <div class="menu">
    <ul>
      <li><a href="kuetadmission.php">Home</a></li>
	  <li><a href="instruction.php">Instruction</a></li>
      <li><a href="eligibility.php">Eligibility</a></li>
	  <li><a href="#">Notices</a></li>
	  
	  <li><a href="result.php">Result</a></li>
      <li><a href="FAQ.php">FAQ</a></li>
	  <li><a href="#">Contact</a></li>
	   <li><a href="admin.php">Admin Login</a></li>
	  <li>
	  <?php
	  if(!isset($_SESSION["username"]))
		  echo"<a href='kkk.php'>Log In </a>";
	  else{
		  echo "<a href='logout.php'>LogOut ( ".$_SESSION["username"]." )</a>";
	  }
	  
	  
	  ?></li>
  
    </ul>


</p></b>
  </div>
  <h1><br><br> Application Submitted Successfully! </h1>
  <h1><br><br><font color="red"> Your Application Serial Number is : </font></h1>
  <br><br><font size="20" color="navy"> <?php echo "$appsl"; ?> </font><br><br><br>
  <font size="4" color="red"> You must remember this for future reference</font></h1>
  
  <br><br>
  <font size="3">Now Application fee of Tk. 800 (Eight hundred) should be paid through DBBL Mobile Banking using Mobile. 
The instruction of 'How to Payment' is as follows:</font>
  
  <img src="images/DBBLBillPayment.jpg" />

  </html>