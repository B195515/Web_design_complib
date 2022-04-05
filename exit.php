<?php
/* This is the exit page. 
Can leave feedback or give option to start a new session*/
session_start();
include 'redir.php';
echo<<<_HEAD1
<html>
<head>
<title>Exit CompLib</title>
<style>
	body {
  background-image: url('images/pexels-magda-ehlers-2569842.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
	div {
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 300px;
  height: 50%;
  overflow-wrap: break-word;
  background-color: rgba(0,0,0,.7);
  font-family: 'Lato', sans-serif;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  border-radius:10px;
}
</style>
</head>
<body>
_HEAD1;
$fn = $_SESSION['forname'];
$sn = $_SESSION['surname'];
$_SESSION = array();
# Linkback to home page
echo "<h1><a href=\"http://mscidwd.bch.ed.ac.uk/s2255686/complib.php\" style=\"text-decoration:none; text-align:center; color:#fff\">&#x2190; Return to Compound Library</a></h1>";
# Destroy session if the session ID is not empty
if( session_id() != "" || isset($_COOKIE[session_name()]))
  setcookie(session_name(), '', time() - 2592000, '/');
  session_destroy();
echo <<<_MAIN1
<div>
  <h1>Thank you for using the Compound Library $fn $sn!</h1>
  <h3><a href="mailto:s2255686@ed.ac.uk" data-original-title><button type="button" id="feedback-button">Send feedback</button></a></h3>
</div>
</body>
</html>
_MAIN1;
?>
