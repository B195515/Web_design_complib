<?php
session_start();
/*
This is the PHP session facility
Manages communication between web pages
The only data communicated here is user names and
a single integer indicating which DBs are selected
*/
if(isset($_POST['fn']) &&
   isset($_POST['sn']))
  {
    echo<<<_HEAD1
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/simple.css">
<title>CompLib: Welcome</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
# These are the user names entered
$_SESSION['forname'] = $_POST['fn'];
$_SESSION['surname'] = $_POST['sn'];
$fn = $_SESSION['forname'];
$sn = $_SESSION['surname'];
# This is the integer indicating which DB is selected
$smask =  $_SESSION['supmask'];
echo <<<_TAIL1
<h2>Welcome $fn $sn to the Compound Library.</h2>
<p>Select one of the options above to begin your search, or head over to the <a href="https://mscidwd.bch.ed.ac.uk/s2255686/documentation.php">Documentation</a> page for instructions to use this website.</p>
<p>Mask Value $smask</p>
_TAIL1;
    } else { 
  header('location: http://mscidwd.bch.ed.ac.uk/s2255686/complib.php');
  }

include 'footer.php';
echo <<<_TAIL2
</body>
</html>
_TAIL2;
?>
