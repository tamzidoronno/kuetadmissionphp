<?php
ob_start();

?>
<html>
<head>
<link href="css/styling.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	align: centre;

}
table {
	width: 100%;
    margin-top: 25px;
	margin-bottom: 20px;
    text-align: center;
    font-size: 19px;
    background-color: tan;
}
.btn-success {
    color: #fff;
    background-color: #45486D;
    border-color: #4cae4c;
    margin-left: 404px;
}
input[type=text],input[type=password] {
    margin: 5px;
    padding: 0 10px;
    width: 60px;
    height: 34px;
    color: #404040;
    background: rgba(51, 53, 47, 0);
    border: 1 solid;
    border-color: rgba(0, 0, 0, 0.21);
    border-radius: 2px;
}



</style>
</head>
<div class="wrapper">






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
	  <li>		<a href="admits.php">Logout(admin)</a>';
	  
	  
	  </li>
  
    </ul>


</p></b>
  </div>
  <a type="submit" class="btn btn-success" name="sbmit" href="xmlshow.php">View Table</a>
</p></b>
  
	<form method="post" action="adminupdate.php">
	<?php 
	mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('signup')  or die(mysql_error());
		$query=mysql_query("select * from student")  or die(mysql_error());
		
		
	echo'<table><th >Application SL No.</th><th>Name</th><th>HSC GPA</th><th>Physics</th><th>Chemistry</th><th>Math</th><th>English<th>Payment</th></th><th>Admission Roll</th><th>Seat Plan</th><th>Eligibility</th><th>Merit</th>';
	 while($row=mysql_fetch_array($query)) 
	{
	  echo'<tr><td>'.$row['appsl'].'</td><td>'.$row['name'].'</td><td>'.$res['hsc_result'].'</td><td>'.$row['phy'].'</td><td>'.$row['che'].'</td><td>'.$row['math'].'</td><td>'.$row['eng'].'</td><td><input type="checkbox" name="payment" value='.$row['id'].'></td> <td>'.$row['admsnroll'].'</td><td>'.$row['seat'].'</td><td>'.$row['eligible'].'</td><td><input type="text" name="result"></td></tr>';
	}
	echo'</table>';
	?>
<?php
	// $pmnt= $_POST['payment'];
	// $idst=$row['id'];
	// $pmntq=mysql_query("UPDATE  `signup`.`student` SET  `payment` =  '$pmnt' WHERE  `student`.`id` ='14'");
?>
		
	 


<h3> Eligibility Requirement:</h3>


<table style="width:30%;font-size:12px;border: 0px solid black;background-color:#92AF88;">
<tr>
    	
    <td>Math</td>
    <td><input type="text" name="mathrq"></td>

  </tr>
  <tr>
    	
    <td>Physics</td>
    <td><input type="text" name="phyrq"></td>

  </tr>
  <tr>
  
  <td>Chemistry</td>
    <td><input type="text" name="chemrq"></td>
	
</tr>
  <tr>
  
  <td>English</td>
    <td><input type="text" name="engrq"></td>
	
</tr>

</table>
<?php
	// $mathrq= $_POST['mathrq'];
	// $phyrq= $_POST['phyrq'];
	// $cherq= $_POST['cherq'];
	// $engrq= $_POST['engrq'];
	// $idst=$row['id'];
	
	// $elq=mysql_query("UPDATE  student SET  eligible =  '1' WHERE  ((id=$pid) && (math<$mathrq) && (phy<$phyrq) && (che<$cherq) &&(eng<$engrq))");
?>
<p><input type="submit" name="update" value="Update" /> </p>
</form>  
</div>
</html>