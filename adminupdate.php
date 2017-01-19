<?php
ob_start();
	$idst= $_POST['payment'];
	$mathrq= $_POST['mathrq'];
	$phyrq= $_POST['phyrq'];
	$cherq= $_POST['chemrq'];
	$engrq= $_POST['engrq'];
	$merit= $_POST['result'];
	
	echo $idst.$mathrq.$phyrq.$cherq.$engrq;
	$seatara = array("CSE 101", "IEM 105", "Library Reading room","ECE 301");
	$seat = $seatara[rand(1, 4)];
	
	// $elq=mysql_query("UPDATE  student SET  eligible =  '1' WHERE  ((id=$pid) && (math<$mathrq) && (phy<$phyrq) && (che<$cherq) &&(eng<$engrq))");
	 $con = mysql_connect("localhost","root","") or die("Sam " . mysql_error());
		mysql_select_db("signup",$con); 
	 $pmntq=mysql_query("UPDATE  student SET  `payment` =  '1'  , eligible = '1'  , admsnroll = '5+$idst'  , seat = '$seat' result = '$merit' WHERE  ((id=$idst) && (math>=$mathrq) && (phy>=$phyrq) && (che>=$cherq) &&(eng>=$engrq))");
	 header("Location: admintablebackup.php");
	 
?>