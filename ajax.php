<html>
<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("signup",$query);
if(isset($_POST['name']))
{
$name=trim($_POST['name']);
$query2=mysql_query("SELECT * FROM student WHERE name LIKE '%$name%' OR hsc_roll LIKE '%$name%'");
echo '<ul id="ajax">';
while($query3=mysql_fetch_array($query2))
{
?>

<li id="ajax" onclick='fill("<?php echo $query3['name']; ?>")'><?php echo $query3['name']; ?></li>
<?php
}
}
?>
</ul>
</html>