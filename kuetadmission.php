<?php
ob_start();
session_start();
//need some checking on cookie and sesion so they cant feed a value to session vars
if( ($_SERVER['REQUEST_METHOD'] === 'POST') || (isset($_SESSION["username"]))){
	$con = mysql_connect("localhost","root","") or die("Sam " . mysql_error());
	mysql_select_db("signup",$con); 
	$username = $_POST["username"];
	$password = $_POST["password"];
	$query = "SELECT * FROM `student` WHERE `appsl`='".$username."' and `password`='".$password."'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	//var_dump($row);
	$_SESSION["username"] = $row['appsl'];
	$_SESSION["password"] = $row['password'];
	$_SESSION["eligible"] = $row['eligible'];
	$user = $_SESSION["username"];
	$ii=$row['eligible'];
	?>
	<input type="hidden" name="idst"  value=<?php echo $ii;?> >
	<?php
	
	if($_POST['rem']=='on'){
		setcookie('user',$user,time()+20*60);		
	}
	

	echo "From Session: ".$_SESSION["username"];

	header("Location: admits.php");
}else{
	header("Location: kkk.php");
}
?>
