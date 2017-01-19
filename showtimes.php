<?php 
    session_start();
    include "db.php";

    $query = "SELECT * FROM `student`";
	
    $result = mysql_query($query);

?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="engine1/jquery.js"></script>




<script>
function showMovie(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            
            xmlhttp = new XMLHttpRequest();
        } else {
            
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","showtime_process.php?q="+str,true);
        xmlhttp.send();
    }
}

</script>



</head>
<body>

<table class="startmovie">
<tr>
  <th>
    <img src="Images/hi.png" alt="Note" style="height:100px;width:120px">
  </th>
  <td>
    <h1 style="color:white";"text-align:center">
      Movie tickets online
    </h1>
  </td>
  <th>
       <div class="dropdown">
  <button class="dropbtn"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?></style></button>
  <div class="dropdown-content">
    <a href="logout.php">Log Out</a>
    
  </div>
</div>
  </th>
</tr>
</table>

  
  <div class="nav">
    <nav style="font-size:150%"><pre style="font-family:cursive"><a href="motherpage.php">            HOME        </a><a href="halls.php">       HALLS        </a><a href="showtimes.php">       SHOW TIMES        </a><a href="booktickets.php">     BOOK TICKETS    </a><a href="trailer.php">    TRAILERS   </a><a href="aboutus.php">    ABOUT US   </a></pre></nav>
  </div>
<br><br><br><br>

	<div class="combo">
	
	<form>
<select style="font-size:200%";"border-radius:10px" name="users" onchange="showMovie(this.value)">
  <option value="null" selected>Select Movie</option>
  <br><br>
            <?php
                    while($row = mysql_fetch_array($result))
                    { 
                         echo "<option value=".$row['name'].">"; echo $row['name']; echo "</option>";
						
                    }
            ?>
	</select>
  </select>
</form>

<form>
<h3>Enter Application SL No or Name: </h3>

<input type="search" id="txtHint" onsearch="showMovie(this.value)">

</form>

</div>
	
	
<div id="txtHint"><b></b></div>
   
 <footer>

</footer>
</body>
</html>