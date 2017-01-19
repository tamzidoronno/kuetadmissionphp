<?php
ob_start();
include 'db.php';
?>
<html>
<head>
<link href="css/styling.css" rel="stylesheet" type="text/css" />

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
input[type=text], input[type=password] {
	background-color: transparent;
	margin: 0px;
    padding: 0px 0px;
    width: 56px;
    height: 26px;
    border: 1px solid;
    border-color: black;
}
input[type=submit] {
	margin-left:400px;
	height: 47px;
    width: 75px;
    font-size: 18px;
}

input {
    font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
    font-size: 15px;
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
      <li><a href="kuetadmission.php">Home</a></li>
      <li><a href="#">Notices</a></li>
      <li><a href="#">Prospectus</a></li>
      <li><a href="#">Eligibility</a></li>
	  <li><a href="#">Result</a></li>
      <li><a href="#">FAQ</a></li>
	  <li><a href="#">Contact</a></li>
	  
    </ul>
  </div>
  
<table>
  <tr>
    <td>Application SL No</td>
    <td>Name</td>		
    <td>HSC GPA</td>
    <td>Physics</td>
	<td>Chemistry</td>
	<td>Math</td>
	<td>English</td>
	<td>Payment</td>
	<td>Admission Roll</td>
	<td>Seat Plan</td>
	
  </tr>
  <?php for($i=0;$i<10;$i++){
	?> <tr>
     <td><?php echo '10001'?> </td>
    <td><?php echo $row['name'];?></td>		
    <td><?php echo '5.00'?></td>
    <td><?php echo '5.00'?></td>
	<td><?php echo '5.00'?></td>
	<td><?php echo '5.00'?></td>
	<td><?php echo '5.00'?></td>
	<td><input type="checkbox" name="payment"></td>
	<td><?php echo '5000'?></td>
	<td><?php echo 'CSE 101'?></td>
	
  </tr>
	<?php } ?>
 
</table>

<h3> Eligibility Requirement:</h3>


<table style="width:30%;font-size:12px;border: 0px solid black;background-color:#92AF88;">
<tr>
    	
    <td>HSC GPA</td>
    <td><input type="text" name="gparq"></td>

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
<p><input type="submit" name="submit" value="Update" /> </p>
  
</html>