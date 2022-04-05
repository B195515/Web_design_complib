<?php
session_start();
require_once 'login.php';
include 'redir.php';
# This script retrieves manufacturer name and compound id, as input to JMol
echo <<<_HEAD1
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/simple.css">
  <title>CompLib: JSmol</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
require 'myfuncs.php';
$db_server = dbset($db_hostname,$db_username,$db_password,$db_database);
$dbfs = array();
$dbid = array();
get_manarray($dbfs,$dbid);
echo <<<_MAIN1
<p>Enter the Catalog ID of a compound and its corresponding Manufacturer.
<br>Click OK to retrieve, then click <i>Display</i> to view an interactive <a href="http://jmol.sourceforge.net/" target="_blank" rel="noopener noreferrer">JSmol</a> object.
</p>
_MAIN1;
if(isset($_POST['tgval'])) 
   {
     $chosen = 0;
     $tgval = $_POST['tgval'];
     $compnm = $_POST['compid'];
     for($j = 0 ; $j <sizeof($dbfs) ; ++$j) {
       if(strcmp($dbfs[$j],$tgval) == 0) {
          $chosen = $j;
          $supid = $dbid[$j];
       } 
     } 
     echo "<p>Query is $compnm from $dbfs[$chosen].</p>";
     # Retrieve id from Compounds table with specific manufacturer and catalog number 
     $query = sprintf("select id from Compounds where ManuID='%s' and catn='%s'",$supid,$compnm);
     $result = mysql_query($query);
     # This message doesn't print? Just shows blank where the id is supposed to be if not found
     if(!mysql_num_rows($result)) {echo "<pre>Cannot find compound $compnm from manufacturer $dbfs[$chosen]!</pre>";
     } else {
	$row = mysql_fetch_row($result);
     	$compid = $row[0];
        echo "Item #$compid found!";
        echo "<p><a href=jsmol.php?cid=$compid>Display Jsmol object of item $compid</a></p>";
     }
   }

echo '<form action="jsmol_query.php" method="post"><pre>';
for($j = 0 ; $j <sizeof($dbfs) ; ++$j) {
  if($j == 0) {
     printf(' %15s <input type="radio" name="tgval" value="%s" checked"/>',$dbfs[$j],$dbfs[$j]);
  } else {
     printf(' %15s <input type="radio" name="tgval" value="%s"/>',$dbfs[$j],$dbfs[$j]);
  }
  echo "\n";
}
echo <<<_TAIL1
Compound id  <input type="text" name="compid"/> e.g. SPH1-096-606 from Asinex
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
