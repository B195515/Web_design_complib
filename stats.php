<?php
session_start();
include 'redir.php';
require_once 'login.php';
require 'myfuncs.php';
echo <<<_HEAD1
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/simple.css">
  <title>CompLib: Statistics</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
echo "<p>Choose an attribute below to show its statistics (average and standard deviation).</p>";

$dbfs = array("natm","ncar","nnit","noxy","nsul","ncycl","nhdon","nhacc","nrotb","mw","TPSA","XLogP");
$nms = array("n atoms","n carbons","n nitrogens","n oxygens","n sulphurs","n cycles","n H donors","n H acceptors","n rot bonds","mol wt","TPSA","XLogP");

if(isset($_POST['tgval'])) 
   {
     $chosen = 0;
     $tgval = $_POST['tgval'];
     for($j = 0 ; $j <sizeof($dbfs) ; ++$j) {
       if(strcmp($dbfs[$j],$tgval) == 0) $chosen = $j; 
     } 
     echo "<b>Statistics for $dbfs[$chosen] ($nms[$chosen]):<br>";

     # Your mysql and statistics calculation goes here
     $db_server = dbset($db_hostname,$db_username,$db_password,$db_database);  
 
     $query = sprintf("select AVG($dbfs[$chosen]), STD($dbfs[$chosen]) from Compounds");
     $result = mysql_query($query);
     if(!$result) die("unable to process query: " . mysql_error());
     $row = mysql_fetch_row($result);
     printf(" Average $row[0]<br>Standard Dev $row[1]</b>");
   }

echo '<form action="stats.php" method="post"><pre>';
for($j = 0 ; $j <sizeof($dbfs) ; ++$j) {
  if($j == 0) {
     printf(' %15s <input type="radio" name="tgval" value="%s" checked"/>',$nms[$j],$dbfs[$j]);
  } else {
     printf(' %15s <input type="radio" name="tgval" value="%s"/>',$nms[$j],$dbfs[$j]);
  }
  echo "\n";
} 
echo <<<_TAIL1
</pre>
<input type="submit" value="OK" />
</form>
_TAIL1;
include 'footer.php';
echo <<<_TAIL2
</body>
</html>
_TAIL2;
?>
