<html>
<head>
<link href="css/styling.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/custbootstrap.css" type="text/css" />

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
<?php
$load=simplexml_load_file('student.xml');
echo'<table><th >Application SL No.</th><th>Name</th><th>HSC GPA</th><th>Physics</th><th>Chemistry</th><th>Math</th><th>English<th>Payment</th></th><th>Admission Roll</th><th>Seat Plan</th><th>Eligibility</th><th>Merit</th>';
for($i=0;$i<15;$i++){
	 echo'<tr><td>'.$load->student[$i]->appsl.'</td><td>'.$load->student[$i]->name.'</td><td>'.$load->student[$i]->hsc_result.'</td><td>'.$load->student[$i]->phy.'</td><td>'.$load->student[$i]->che.'</td><td>'.$load->student[$i]->math.'</td><td>'.$load->student[$i]->eng.'</td><td>'.$load->student[$i]->id.'</td><td>'.$load->student[$i]->admsnroll.'</td><td>'.$load->student[$i]->seat.'</td><td>'.$load->student[$i]->eligible.'</td><td>'.$load->student[$i]->merit.'</td></tr>';
	
}
echo'</table>';

?>
</html>