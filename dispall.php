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
  <title>CompLib: Summary</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
echo "<h2>Summary compounds from all manufacturers</h2>";
/* This is the database display page
Shows for a table consisting of manufacturers per row
For each manufacturer, the min/max/avg of the atom counts is shown
*/
# Connect to db
$db_server = dbset($db_hostname,$db_username,$db_password,$db_database);
# Setup arrays
$manarray=array();
$manid=array();
get_manarray($manarray,$manid);
# Count how many manufacturers
$manrows=count($manarray);
echo <<<_MAIN1
<p>Below is a table displaying the minimum, maximum, and average atoms (carbon, nitrogen, oxygen) per manufacturer:</p>
<table border="1" width=100%>
  <tr>
    <td>ID, Manufacturer</td>
    <td>Min C</td>
    <td>Max C</td>
    <td>Avg C</td>
    <td>Min N</td>
    <td>Max N</td>
    <td>Avg N</td>
    <td>Min O</td>
    <td>Max O</td>
    <td>Avg O</td>
  </tr>
_MAIN1;
# Use simple sql summaries for each manufacturer
for($j = 0 ; $j < $manrows ; ++$j)
  {
    printf("<tr><td>%s</td>", $manarray[$j]);
    $compsel = "Select min(ncar) from Compounds where ManuID=".($j+1);
    $result = mysql_query($compsel);
    $row = mysql_fetch_row($result);
    printf("<td>%s</td>", $row[0]);
    $compsel = "Select max(ncar) from Compounds where ManuID=".($j+1);
    $result = mysql_query($compsel);
    $row = mysql_fetch_row($result);
    printf("<td>%s</td>", $row[0]);
    $compsel = "Select avg(ncar) from Compounds where ManuID=".($j+1);
    $result = mysql_query($compsel);
    $row = mysql_fetch_row($result);
    printf("<td>%s</td>", $row[0]);
    $compsel = "Select min(nnit) from Compounds where ManuID=".($j+1);
    $result = mysql_query($compsel);
    $row = mysql_fetch_row($result);
    printf("<td>%s</td>", $row[0]);
    $compsel = "Select max(nnit) from Compounds where ManuID=".($j+1);
    $result = mysql_query($compsel);
    $row = mysql_fetch_row($result);
    printf("<td>%s</td>", $row[0]);
    $compsel = "Select avg(nnit) from Compounds where ManuID=".($j+1);
    $result = mysql_query($compsel);
    $row = mysql_fetch_row($result);
    printf("<td>%s</td>", $row[0]);
    $compsel = "Select min(noxy) from Compounds where ManuID=".($j+1);
    $result = mysql_query($compsel);
    $row = mysql_fetch_row($result);
    printf("<td>%s</td>", $row[0]);
    $compsel = "Select max(noxy) from Compounds where ManuID=".($j+1);
    $result = mysql_query($compsel);
    $row = mysql_fetch_row($result);
    printf("<td>%s</td>", $row[0]);
    $compsel = "Select avg(noxy) from Compounds where ManuID=".($j+1);
    $result = mysql_query($compsel);
    $row = mysql_fetch_row($result);
    printf("<td>%s</td>", $row[0]);
    printf("</tr>%n");
  }
echo <<<_TAIL1
</table>
<table style="border:1px; width:200px;">
  <tr>
    <td>ManID</td>
    <td>Manufacturer</td>
  </tr>
_TAIL1;
for($j = 0 ; $j < $manrows ; ++$j)
  {
    printf("<tr><td>%s</td>", $j+1);
    printf("<td>%s</td>", $manarray[$j]);
    printf("</tr>%n");
  }
echo "</table>";
include 'footer.php';
echo "</body></html>";
?>
