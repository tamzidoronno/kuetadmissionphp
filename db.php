<?php
$con = mysql_connect("localhost","root","") or die("Sam " . mysql_error());
mysql_select_db("signup",$con); 

$query = "SELECT * FROM `student` ORDER BY `id`";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
//var_dump($row);
?>