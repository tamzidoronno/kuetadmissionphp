<?php
		
	
	$email	= $_POST['email'];
	$phone	= $_POST['phn'];
	$password	= $_POST['pswrd'];
	$image_link = "";
	
	$idst = 	$_POST['idst'];
	if($_FILES['image_link']['error']>0){
		echo 'error';
	}
	else{
		
		$upload_folder = 'upload/';

		$prefix = $idst;
		$link = $upload_folder.$prefix.$_FILES['image_link']['name'];
		move_uploaded_file($_FILES['image_link']['tmp_name'], $link);
		//move_uploaded_file($_FILES['image_link']['tmp_name'], $upload_folder.$_FILES['image_link']['name']);
		//move_uploaded_file($_FILES["image_file"]["tmp_name"],$link);
		$image_link = "http://localhost/motherpage/upload/".$prefix;
	}
	
	$con = mysql_connect('localhost', 'root', '');
	/*if($con){
		echo 'success';
	 } */
	mysql_select_db('signup');



	//$query = "INSERT INTO `signup`.`student` (`name`, `hscroll`, `hscbrd`, `hscrslt`, `sscroll`, `sscbrd`, `sscrslt`, 'math', 'phy', 'che', 'eng', `email`, `phn`, `gender`, `pswrd`, `pswrd2`) VALUES ('$Name', '$Hscroll', '$Hscbrd', '$Hscrslt', '$Sscroll', '$Sscbrd', '$Sscrslt', '$Math', '$Phy', '$Che', '$Eng', '$Email', '$Phn', '$Gender', '$Pswrd', '$Pswrd2')";
	
		//$query = "insert into student (name,hsc_roll,hsc_board,hsc_result,ssc_roll,ssc_board,ssc_result,math,phy,che,eng,email,phone,gender,password,password2,image_link) values ('$name','$hsc_roll','$hsc_board','$hsc_result','$ssc_roll','$ssc_board','$ssc_result','$math','$phy','$eng','$email','$phone','$gender','$password','$password2','$image_link')";

		// mysql_query("insert into student (name,hsc_roll,hsc_board,hsc_result,ssc_roll,ssc_board,ssc_result,math,phy,che,eng,email,phone,gender,password,image_link) values ('$name','$hsc_roll','$hsc_board','$hsc_result','$ssc_roll','$ssc_board','$ssc_result','$math','$phy','$che','$eng','$email','$phone','$gender','$password','$image_link')");

		
		
		$query = "SELECT * FROM `student` WHERE `ssc_roll`='".$sscRoll."' and `hsc_roll`='".$hscRoll."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

 
 
		mysql_query("UPDATE  `signup`.`student` SET  `email` =  '$email',
`phone` =  '$phone',
`password` =  '$password',
`image_link` =  '$image_link',
`sign_link` =  '$sign_link' WHERE  `student`.`id` =$idst;
")


	//$result = mysql_query($query);
	//echo $result;
	
		/*$query="SELECT * FROM student ";
		$result = mysqli_query($con,$query);
		if($result){echo "success";}
		else echo "not successful";*/
		// while($row=mysqli_fetch_array($result)){
			// echo '<img height = "300" width = "300" src="data:image;base64,'.$row[image].'" >';
		


	 //header("Location:kuetadmission.php");
	
?>
<?php
header("Location:appslnmbr.php");
?>