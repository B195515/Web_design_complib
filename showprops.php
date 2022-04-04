<?php
require_once 'login.php';
require 'myfuncs.php';
echo <<<_HEAD1
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/simple.css">
  <title>CompLib: Property Retrieval</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
$dbfs = array("catn","natm","ncar","nnit","noxy","nsul","ncycl","nhdon","nhacc","nrotb","mw","TPSA","XLogP");
$nms = array("catid","n atoms","n carbons","n nitrogens","n oxygens","n sulphurs","n cycles","n H donors","n H acceptors","n rot bonds","mol wt","TPSA","XLogP");
$rowid = array(11,1,2,3,4,5,6,7,8,9,12,13,14);

# GET variable cid from the caller page
if(isset($_GET['cid'])) {
  $db_server = dbset($db_hostname,$db_username,$db_password,$db_database);
  $cid = $_GET['cid'];
  $query = "select * from Compounds where id=$cid";
  $result = mysql_query($query);
  if(!result) die("unable to process query: " . mysql_error());
  echo "<p>Details for Compound <b>$cid</b></p>";
  echo "<table id=\"myTable\" width =\"100%\" border=\"1\" cellspacing=\"1\" align=\"center\"><thead><tr>";
    for($k = 0 ; $k < sizeof($dbfs) ; ++$k) {
      echo "<th>".$nms[$k]."</th>";
    }
    echo "</tr>\n</thead>\n<tbody>\n";
    $row = mysql_fetch_row($result);
    echo "<tr>";
    for($k = 0 ; $k < sizeof($dbfs) ; ++$k) {
       echo "<td>".$row[$rowid[$k]]."</td>";
    }
    echo "</tr>\n";
    echo "</tbody>\n</table>\n";
  mysql_close($db_server);
} else {
  echo "<p>No Compound selected</p>";
}

include 'footer.php';
echo "</body></html>";
?>
