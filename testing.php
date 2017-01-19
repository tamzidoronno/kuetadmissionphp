<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	align: centre;

}
</style>
</head>
<body>

<table style="width:75%;text-align:center; font-size: 19px;">
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
     <td><?php echo '10001';?> </td>
    <td><?php echo 'Oronno';?></td>		
    <td><?php echo '5.00';?></td>
    <td><?php echo '5.00';?></td>
	<td><?php echo '5.00';?></td>
	<td><?php echo '5.00';?></td>
	<td><?php echo '5.00';?></td>
	<td><input type="checkbox" name="payment"></td>
	<td><?php echo '5000'?>;</td>
	<td><?php echo 'CSE 101';?></td>
	
  </tr>
	<?php } ?>
 
</table>

</body>
</html>
