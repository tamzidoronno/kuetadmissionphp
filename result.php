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
?><html>
<?php $query=mysql_connect("localhost","root",""); mysql_select_db("signup",$query); ?> <html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <title>Untitled Document</title> <link rel="stylesheet" href="css/styles.css" type="text/css"><link rel="stylesheet" href="css/styleajax.css" type="text/css"><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="js/aj.js"></script>
  <script src="js/boot.js"></script>
<script type="text/javascript">
function fill(Value)
{
$('#name').val(Value);
$('#display').hide();
}

$(document).ready(function(){
$("#name").keyup(function() {
var name = $('#name').val();
if(name=="")
{
$("#display").html("");
}
else
{
$.ajax({
type: "POST",
url: "ajax.php",
data: "name="+ name ,
success: function(html){
$("#display").html(html).show();
}
});
}
});
});
</script>
<style>
#ajax {
    display: inline-block;
    padding: 1px;
    background-color: #929862;
    border-bottom: 2px solid #000000;
	margin: 0px 94px 10px 0px;
    width: 326px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	align: centre;

}
table {
	width: 111%;
    height: 163px;
    margin-top: 25px;
    margin-left: -21px;
    margin-bottom: 20px;
    text-align: center;
    font-size: 19px;
    background-color: #C1BD7F;
}
</style>

</head>
<body>

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
  <div id="content">
<?php
$val='';
if(isset($_POST['submit']))
{
if(!empty($_POST['name']))
{
$val=$_POST['name'];
}
else
{
$val='';
}
}
?>
  
<form method="post" action="result.php">
<h3>Enter Application SL No or Name: </h3><input type="text" name="name" id="name" autocomplete="off"
value="">
<input type="submit" name="submit" id="submit" value="Search">
</form>

<div id="display"></div>
<?php
$con = mysql_connect("localhost","root","") or die("Sam " . mysql_error());
mysql_select_db("signup",$con); 
$srch = $_POST["name"];
$query = "SELECT * FROM `student` WHERE `name`='".$srch."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

if(isset($_POST["name"])){
echo'<table><th >Application SL No.</th><th>Admission Roll</th><th>Name</th><th>Merit Position</th>';
	 
	  echo'<tr><td>'.$row['appsl'].'</td><td>'.$row['admsnroll'].'</td><td>'.$row['name'].'</td><td>'.$row['merit'].'</td></tr>';
	
	echo'</table>';
}
?>

</div>
</body>
</html>