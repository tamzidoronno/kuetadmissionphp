<?php
ob_start();
session_start();
$_SESSION["username"] = null;
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
setcookie('user',$user,time()-3600);
header("Location: admits.php");
?>