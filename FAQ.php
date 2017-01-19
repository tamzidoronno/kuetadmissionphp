<?php
session_start();
$con = mysql_connect("localhost","root","") or die("Sam " . mysql_error());
mysql_select_db("signup",$con); 
$username = $_POST["username"];
$password = $_POST["password"];
//$username = "rabbi";
//$password = "111";
$query = "SELECT * FROM `student` WHERE `appsl`='".$username."' and `password`='".$password."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
//var_dump($row);
//$_SESSION["username"] = $row['appsl'];
//$_SESSION["password"] = $row['password'];
//echo "From Session: ".$_SESSION["username"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	KUET Undergraduate Admission Test
</title><link type="image/x-icon" rel="icon" href="../Images/logo.png" /><link rel="Stylesheet" type="text/css" href="Stylesheet.css" />
    <script type="text/javascript" src="~/jQueryui/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="~/Information/jquery.slimmenu.min.js"></script>
    <script type="text/javascript" src="~/Information/jquery.easing.min.js"></script>
    <link rel="Stylesheet" type="text/css" href="slimmenu.min.css" />
    <script type="text/javascript">
        $('ul.slimmenu').slimmenu(
        {
            resizeWidth: '800',
            collapserTitle: 'Main Menu',
            easingEffect: 'easeInOutQuint',
            animSpeed: 'medium',
            indentChildren: true,
            childrenIndenter: '&raquo;'
        });
    </script>
    
    <title>FAQ</title>
    <link type="text/css" rel="stylesheet" href="../jQueryui/jquery-ui.min.css">
	<link href="css/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../jQueryui/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="../jQueryui/jquery-ui.min.js"></script>
    
    <script type="text/javascript">
        $(function () {
            var icons = {
                header: "ui-icon-circle-arrow-e",
                activeHeader: "ui-icon-circle-arrow-s"
            };
            $("#accordion").accordion({
                icons: icons
            });
        });
    </script>
	
</head>
<body>
 <div class="wrapper">
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
	   <li><a href="admin.php">Admin Login</a></li>
	  <li>
	
	  <?php
	  if(isset($_SESSION["username"])){
		  echo '<a href="admlogout.php">Logout ('.$_SESSION['username'].')</a>';
	  }else{
		  echo '<a href="kkk.php">Login</a>';
	  }
	  ?>
	  </li>
  
    </ul>


</p></b>
  </div>

    <div id="innerdiv">
        <div style="padding: 150px 0px 50px 0px;">
            
    <div style="font-family: Verdana; font-size: 12px;">
        <div align="left">
            <h2>
                FAQ</h2>
        </div>
        <div id="accordion">
            <h3>
                Online Application Form Fill up ??</h3>
            <div>
                <ul>
                    <li>Application form should be filled up properly through the assigned website (admission.kuet.ac.bd
                        --> Apply Now) and submit recent color photograph (approximately 300 x 350 pixel
                        and less than 100 kB in size) and signature (approximately 300 x 80 pixel and less
                        than 50 kB in size) of the candidate. It is recommended to submit both the photograph
                        and signature in *.jpg format. Any writing or attestation on photograph is not permitted.
                        No indistinct or distortion of signature and photograph is accepted. Note that photograph
                        and signature of the applicant will be verified in examination hall.</li>
                    <li>After filling up the application form one can see the preview of the filled form
                        by clicking <strong>'Preview'</strong> button. If any information is needed to be
                        corrected, one can edit the form by clicking <strong>'Update'</strong> button.</li>
                    <li>If everything in the '<strong>Preview of Application</strong>' is correct, one can
                        finally submit the application by clicking <strong>'Submit'</strong> button.
                    </li>
                    <li>If the submission is successful, the applicant can see the <strong>'Confirmation
                        Page'</strong> where the necessary instruction will be provided along with the 6
                        digit <strong>'Application No.'</strong> and a <strong>'Password'</strong>.<strong><u>Applicant
                            must remember his Application No. and the 'Password' for further use.</u></strong>
                        Applicant should login to the dashboard to download and print the printable PDF
                        version of the <strong>'Receipt of Application'</strong> which will be available
                        through clicking the <strong>'Application receipt'</strong> link in the dashboard</li>
                    <li>Some applicants may be marked as A, T or P on the application for the following
                        reasons:
                        <ul style="list-style-type: disc">
                            <li>A -> Passed in GCE 'O' level and 'A' level examination and/or from Foreign Education
                                Board</li>
                            <li>T -> If the applicant is a Small Ethnic Groups (Tribal).</li>
                            <li>P -> If there is a mismatch between the information provided by the applicant and
                                information collected from the Education Board or the information in the Board is
                                missing.</li>
                        </ul>
                    </li>
                </ul>
                <p>
                    A PDF version of the application and <strong>'Receipt of Application'</strong> marked
                    with A, T or P will be generated automatically. Applicants of this category are
                    requested to follow the instruction mentioned in next "Submitting Necessary Documents
                    for A, T or P marked Applications" section.
                </p>
            </div>
            <h3>
                Payment of Application Fee</h3>
            <div>
                <p>
                    The application fee of Tk. 800 (Eight hundred) should be paid through DBBL Mobile
                    Banking using Mobile.
                    <br />
                    1. Dial *322#<br />
                    2. Biller Id for KUET: 350<br />
                    3. Bill Number is Application SN (Serial Number).<br />
                    <br />
                    Please See the Payment Section.
                </p>
            </div>
            <h3>
                Collection of Money Receipt</h3>
            <div>
                <p>
                    If the applicant paid the application fee successfully, can download and print the
                    PDF version of the Money Receipt from the assigned website (www.admission.kuet.ac.bd).
                    The applicant has to click the "Applicant's Log in" button and by providing the
                    password and Application No. s/he can get the Money receipt by clicking the "Download
                    money receipt" button.
                </p>
            </div>
            <h3>
                Submitting Necessary Documents for A, T or P marked Applications</h3>
            <div>
                <p>
                    Those who received the marked A, T or P in the <strong>'Receipt of Application'</strong>
                    and <strong>'Application Form'</strong>, mentioned in Step 1, they have to download
                    the PDF version of the On-Line filled application of 3 pages and print it on one
                    side of A4 size, 80 gm offset paper. The first 2 pages are the Online filled application
                    form and the 3rd page is the <strong>'Receipt of Application'</strong>.
                    <p class="info">
                        The printed version (hard copy) of the application along with the following documents
                        should be submitted physically by <font color="#CC0066">the applicant or his/her guardian</font>
                        to the Registrar office of KUET within <strong>12 October, 2015 before 5:00 pm</strong>.
                        <strong><em>No Application posted by Postal/Courier service will be accepted</em></strong>.
                    </p>
                    <ol style="list-style-type: disc">
                        <li>Attested copy of the SSC or equivalent examination certificate and Grade sheet.</li>
                        <li>Attested copy of the HSC or equivalent examination Grade sheet. Instead of Grade
                            sheet, the Tabulation sheet attested by the respective Principal of the college/institute
                            is also acceptable</li>
                        <li>Printed copy of the <strong>'Money Receipt'</strong>.</li>
                        <li>Printed copy of the <strong>'Receipt of Application'</strong> and <strong>'Application
                            Form'</strong>.</li>
                        <li>If the applicant is a Small Ethnic Groups (Tribal), s/he needs to submit the certificate
                            of citizenship of Bangladesh and as a proof of the said Groups (tribe), s/he needs
                            the certificate from the respective principal of the college where s/he studied,
                            certificate from the chairman of local Pouroshova/Zilla Parishad/Union Parishad
                            and Morol of the said Groups (Tribe). </li>
                    </ol>
                    <h5>
                        NB:</h5>
                    <p class="warning">
                        Those who received the <strong>'Receipt of Application'</strong> marked with A,
                        T or P, they must submit the printed version (hard copy) of the application along
                        with the necessary documents to the Registrar office of KUET within the deadline.
                        For the above mentioned applicants, only Online submission will not be granted.
                    </p>
                </p>
            </div>
        </div>
    </div>

        </div>
    </div>
    <div id="bottomdiv" style="font-family: Verdana; font-size: 11px; color: White;"
        align="center">
        <div style="margin-top: 10px;">
            Copyright &copy; KUET 2015, Powered by: IICT, Developed by: Engr. Md. Nazim Uddin,
            Engr. S. M. Saifur Rahman, Engr. Mehirlal Sarker, Engr. Prodip Kumer Das. <a style="font-family: Verdana;
                color: White;" href="Information/Credit.aspx">[ Details... ]</a>
        </div>
    </div>
    </form>
</body>
</html>
