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
<html>
<head>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/reset-font-min.css">
<link rel="stylesheet" href="css/clearfix.css">
<link rel="stylesheet" href="css/jquery.newsticker.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin:;
  }
  </style>
</head>

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
        <div style="padding: 0px 50px 0px;">
            
    <div style="font-family: Verdana;">
        <div>
            <h2>
                Instruction</h2>
        </div>
        <div class="warning">
            The application form for Admission 2015-2016 of KUET will only be available online,
            and the application processing fee can be paid only through DBBL Mobile Banking
            using mobile phone. No printed application form will be sold from this University
            or elsewhere, and other modes of payment except through DBBL Mobile Banking will
            not be accepted.
        </div>
        <h3>
            Application Procedure</h3>
        <div style="font-size: 12px; font-family: Verdana">
            <div>
                <h4 class="step">
                    Step 1: Online Application Form Fill up</h4>
                <ul class="greenbulet" style="font-size: 12px;">
                    <li>Application form should be filled up properly through the assigned website (www.admission.kuet.ac.bd)
                        and submit recent color photograph (approximately 300 x 350 pixel and at most 100
                        kB in size) and signature (approximately 300 x 80 pixel and at most 50 kB in size)
                        of the candidate. It is recommended to submit both the photograph and signature
                        in *.JPG format. Any writing or attestation on photograph is not permitted. No indistinct
                        or distortion of signature and photograph is accepted. Note that photograph and
                        signature of the applicant will be verified in examination hall.</li>
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
                        Applicant should print and collect the printable PDF version of the <strong>'Receipt
                            of Application'</strong> which will be available through clicking the <strong>'Download
                                of Application'</strong> button.</li>
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
                    requested to follow the instruction mentioned in Step 4.
                </p>
            </div>
            <h4 class="step">
                Step 2: Payment of Application Fee</h4>
            <div style="font-size: 12px;">
                The application fee of Tk. 800 (Eight hundred) should be paid through DBBL Mobile
                Banking using Mobile.
                <br />
                The instruction of 'How to Payment' is as follows:
            </div>
            <div align="center">
                <img id="MainContent_ImgDBBLPayment" src="Images/DBBLBillPayment.jpg" style="width:900px;" />
            </div>
            <h4 class="step">
                Step 3: Collection of Money Receipt</h4>
            <div style="font-size: 12px;">
                If the applicant paid the application fee successfully, can download and print the
                PDF version of the Money Receipt from the assigned website <b>(www.admission.kuet.ac.bd)</b>.
                The applicant has to click the "Applicant's Log in" button and by providing the
                password and Application No. s/he can get the Money receipt by clicking the "Download
                money receipt" button.
            </div>
            <h4 class="step">
                Step 4: Submitting Necessary Documents for A, T or P marked Applications</h4>
            <div style="font-size: 12px;">
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
                <p class="warning">
                    <b>[NOTE]</b> Those who received the <strong>'Receipt of Application'</strong> marked
                    with A, T or P, they must submit the printed version (hard copy) of the application
                    along with the necessary documents to the Registrar office of KUET within the deadline.
                    For the above mentioned applicants, only Online submission will not be granted.
                </p>
            </div>
            <h4 class="step">
                Step 5: Collection of Admit Card</h4>
            <p style="font-size: 12px;">
                After publishing the list of the qualified applicants for the admission test, the
                applicant has to download the Admit card from the assigned website (www.admission.kuet.ac.bd)
                by clicking 'Download Admit Card' button and print it on A4 size 80 gm Offset paper.
                <strong><i>An applicant without Admit Card will not be allowed to sit for the examination.</i></strong></p>
        </div>
        <div>
            <center>
                <h4 style="color: red;">
                    Applicant must read and understand the following steps carefully</h4>
            </center>
        </div>
        <div style="text-align: justify; font-size: 12px;">
            <ol class="instruction">
                <li>Read the KUET Undergraduate Online Application procedure carefully. </li>
                <li>At the very beginning of your online application you will be asked to provide your
                    S.S.C Board Name, S.S.C Roll Number, S.S.C Year of passing, H.S.C Board Name, H.S.C
                    Roll Number, H.S.C Year of Passing and after providing the information you will
                    click on the "Continue" button. </li>
                <li>If your board data is available to us then the board data will be loaded to the
                    application from and the total Online application Form in six (6) different Steps
                    will be visible to you. If your board data is not available to us then you will
                    be asked to provide it by yourself. </li>
                <li>After filling the online application form you will press the "Preview" button that
                    is at the bottom of the last Step of the online Application form. If you are eligible
                    for the application then you will get the Preview version of your online application.
                    But if you are not eligible for the application then you will not be allowed to
                    go forward. </li>
                <li>When you are in the "Preview" section of your online application then please look
                    over the application carefully. If you find any information is incorrect then please
                    Click on the "Cancel" button of that page which is just below the preview form.
                    After Pressing the "Cancel" button you will get back to the Online form again for
                    making any correction.After completing the correction, press the "Preview" button
                    again. </li>
                <li>If all the information in the preview page is correct then please Click on the "Submit"
                    button. After the successful Submission of your online application you will get
                    a Application Number and a Password. Please take note of the Application Number
                    and Password for future use. Furthermore, if you have specified an Email address
                    in the Application Form then an auto generated Email with your "Application Number"
                    and "Password" will be sent to your Email address. </li>
            </ol>
            <br />
        </div>
        <!-- end .content -->
    </div>

        </div>
    </div>
    
    
</body>
</html>
