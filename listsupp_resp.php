<?php
session_start();
require_once 'login.php';
include 'redir.php';
require 'myfuncs.php';
echo<<<_HEAD1
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/simple.css">
  <title>CompLib: Suppliers</title>
  
  <link rel="stylesheet" type="text/css" href="jquery/jquery.dataTables.min.css">
  <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="jquery/jquery.dataTables.min.js"></script>
</head>
<body>
_HEAD1;
include 'menuf.php';
echo "<h2>View inventory by Supplier</h2>";

$dbfs = array("catn","natm","ncar","nnit","noxy","nsul","ncycl","nhdon","nhacc","nrotb","mw","TPSA","XLogP");
$nms = array("catid","n atoms","n carbons","n nitrogens","n oxygens","n sulphurs","n cycles","n H donors","n H acceptors","n rot bonds","mol wt","TPSA","XLogP");
$rowid = array(11,1,2,3,4,5,6,7,8,9,12,13,14);

$db_server = dbset($db_hostname,$db_username,$db_password,$db_database);
$manarray = array();
$manid = array();
get_manarray($manarray,$manid);

# This gets the variable tgval from listsupp.php (the chosen supplier)
$chosen = $_POST['tgval'];
for($j = 0 ; $j < $manrows ; ++$j)
  {
    $row = mysql_fetch_row($result);
    $manarray[$j] = $row[1];
    $manid[$j] = $j + 1;
  }
$query = "select * from Compounds where ManuID = ".$chosen;
$result = mysql_query($query);
if(!$result) die("unable to process query: " . mysql_error());
$resrows = mysql_num_rows($result);
echo <<<_MAIN1
<p>Selected Supplier ID: $chosen</p>
<p>There are $resrows compounds associated with this supplier.</p>
_MAIN1;
echo "<table id=\"myTable\" class=\"display\" width =\"100%\" border=\"1\" cellspacing=\"1\">\n<thead>\n<tr>";
    for($k = 0 ; $k < sizeof($dbfs) ; ++$k) {
      echo "<th>".$nms[$k]."</th>";
    }
    echo "</tr>\n</thead>\n<tbody>\n";
    for($j = 0 ; $j < $resrows ; ++$j)
      {
         $row = mysql_fetch_row($result);
         echo "<tr>";
         for($k = 0 ; $k < sizeof($dbfs) ; ++$k) {
           echo "<td>".$row[$rowid[$k]]."</td>";
         }
         echo "</tr>\n";
      }
      echo "</tbody>\n</table>";
echo <<<_TAIL1
<script type="text/javascript">
$(function() {
  $("#myTable").DataTable();
});
</script>
_TAIL1;
include 'footer.php';
echo <<<_TAIL2
</body>
</html>
_TAIL2;
?>

