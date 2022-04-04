<?php
session_start();
require_once 'login.php';
include 'redir.php';
echo<<<_HEAD1
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/simple.css">
  <title>CompLib: Manufacturer</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
require 'myfuncs.php';
echo "<h2>View inventory by Supplier</h2>";
$db_server = dbset($db_hostname,$db_username,$db_password,$db_database);
$manarray = array();
$manid = array();
get_manarray($manarray,$manid);
echo <<<_FORM
<p>Select a supplier to view all available compounds by the supplier.</p>
<form action="listsupp_resp.php" method="post">
<pre>
_FORM;
echo $manrows;
for($j = 0 ; $j < sizeof($manarray) ; ++$j) {
  if($j == 0) {
    printf(' %15s <input type="radio" name="tgval" value="%s" checked"/>',$manarray[$j],$manid[$j]);
  } else {
    printf(' %15s <input type="radio" name="tgval" value="%s"/>',$manarray[$j],$manid[$j]);
  }
    echo"\n";
  }
echo <<<_MIDDLE1
</pre>
<input type="submit" value="List" />
</form>
_MIDDLE1;
include 'footer.php';
echo <<<_TAIL1
</body>
</html>
_TAIL1;
?>
