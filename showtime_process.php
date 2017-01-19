<html>
<head>
<style>
table {
    width:100%;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    font-size:150%;
	font-family:cursive;
    background-color: #f2e5ff;
}
table#t01 tr:nth-child(odd) {
   font-size:150%;
   font-family:cursive;
   background-color: #e5ccff;
}
table#t01 th	{
    font-size:160%;
	font-family:cursive;
    background-color: black;
    color: white;
}
</style>
</head>
<?php

 session_start();
 include "db.php";

$search_text = urldecode(filter_var(trim($_GET['q'])));

$details="Select * from `student` where `name`='$search_text'";

$result=mysql_query($details);
echo "<br><br><br>";
?>
 <table id="t01">
  <tr>
    <th>Hall</th>
    <th>Date</th> 
    <th>Time</th>
  </tr>
<?php
while($row = mysql_fetch_array($result))
{
$q=mysql_query("select * from `student` where `id`='$row[id]'");
$hall=mysql_fetch_array($q);
?>
   
  <tr>
    <td><?php echo $hall['name']; ?></td>
    <td><?php echo $row['hsc_roll']; ?></td> 
    <td><?php echo $row['hsc_board']; ?></td>
  </tr>

<?php
}
?>
</table>
</html>