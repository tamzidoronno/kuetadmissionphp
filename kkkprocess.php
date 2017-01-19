<?php 
$username = $_POST['username'];
$password = $_POST['password']; 


if(!isset($_POST['username']) || !isset($_POST['password'])){
	echo "mo post";
}
else
{
	$con = mysql_connect("localhost", "root", "");
	
	mysql_select_db("signup");
	$sql = "SELECT * FROM `student` WHERE name=\"$username\" and password=\"$password\"" ;
	$res=mysql_query($sql,$con);
	while($row=mysql_fetch_array($res)){
		echo $row['name'];
		
		session_start();
		$_SESSION['name'] = $username ;
	}
	
	mysql_close($con);
	
	echo "session name: ";
	echo $_SESSION['name'];
}




?>

