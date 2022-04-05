<?php
/* This script is the website front page.
It initialises the supplier selection integer to indicate
that all dbs are active
Asks for first and last name to store the session
in the session associate array as supmask 
*/
session_start();
require_once 'login.php';
require 'myfuncs.php';
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
  width: 35%;
  height: 70%;
  background-color: rgba(0,0,0,.7);
  color: white;
  text-align: center;
  padding: none;
  border-radius: 50%;
}
input[type=submit] {
  height: 100px;
  width: 180px;
  font-size: 20px;
  border-radius: 5px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: black;
  color: white;
}  
</style>
</head>


<body>
_HEAD1;
# Connect to db
$db_server = dbset($db_hostname,$db_username,$db_password,$db_database);  

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
<br><br><br>
  <h1>Welcome to CompLib!</h1>
  <h2>First Name:</h2><input type="text" name="fn" style="border-radius:5px; text-align:center; font-size:16px"/>
  <h2>Last Name:</h2><input type="text" name="sn" style="border-radius:5px; text-align:center; font-size:16px"/>
  <br>
<input type="submit" value="ENTER"/>
</pre>
</div>
</form>
</body>
</html>
_EOP;
?>
