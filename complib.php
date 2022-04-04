<?php
/* This script is the website front page.
It initialises the supplier selection integer to indicate
that all dbs are active
Asks for first and last name to store the session
in the session associate array as supmask 
*/
session_start();
require_once 'login.php';
echo<<<_HEAD1
<html>
<head>
<title>Welcome to CompLib</title>
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
  height: 400px;
  background-color: black;
  color: white;
  text-align: center;
  padding: 20px;
}
</style>
</head>

<body>
_HEAD1;
# Connect to db
$db_server = mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to database: " . mysql_error());
mysql_select_db($db_database,$db_server) or die ("Unable to select database: " . mysql_error());     

# Selects all manufacturers
$query = "select * from Manufacturers";
     $result = mysql_query($query);
     if(!$result) die("unable to process query: " . mysql_error());
     $rows = mysql_num_rows($result);
     $mask = 0;
     mysql_close($db_server);
     for($j = 0 ; $j < $rows ; ++$j)
     {
       $mask = (2 * $mask) + 1;
     }
# Store session's supplier selection
$_SESSION['supmask'] = $mask;
echo <<<_EOP
<script>
   function validate(form) 
{
   fail = ""
   if(form.fn.value == "") fail = "Must Give Forename "
   if(form.sn.value == "") fail += "Must Give Surname"
   if(fail == "") return true
       else {alert(fail); return false}
}
</script>
<!--Form to enter session user names-->
<form action="indexp.php" method="post" onSubmit="return validate(this)">
<div>
<pre>
  <h1>Welcome to CompLib!</h1>
  <h3>First Name:</h3><input type="text" name="fn"/>
  <h3>Last Name:</h3><input type="text" name="sn"/>

<input type="submit" value="ENTER" style="height:50px; width:180px; font-size:20px" />
</pre>
</div>
</form>
_EOP;
echo "</body></html>";
?>
