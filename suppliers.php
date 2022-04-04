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
  <title>CompLib: Suppliers</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
echo "<h2>Select suppliers</h2>";
$db_server = dbset($db_hostname,$db_username,$db_password,$db_database);
    
$query = "select * from Manufacturers";
$result = mysql_query($query);
if(!$result) die("unable to process query: " . mysql_error());
$rows = mysql_num_rows($result);
$smask = $_SESSION['supmask'];
for($j = 0 ; $j < $rows ; ++$j)
  {
    $row = mysql_fetch_row($result);
    $sid[$j] = $row[0];
    $snm[$j] = $row[1];
    $sact[$j] = 0;
    $tvl = 1 << ($sid[$j] - 1);
    if($tvl == ($tvl & $smask)) {
	$sact[$j] = 1;
      }
  }
if(isset($_POST['supplier'])) 
   {
     $supplier = $_POST['supplier'];
     $nele = sizeof($supplier);
      for($k = 0; $k <$rows; ++$k) {
       $sact[$k] = 0;
       for($j = 0 ; $j < $nele ; ++$j) {
	 if(strcmp($supplier[$j],$snm[$k]) == 0) $sact[$k] = 1;
       }
     }
     $smask = 0;
     for($j = 0 ; $j < $rows ; ++$j)
       {
	 if($sact[$j] == 1) {
	   $smask = $smask + (1 << ($sid[$j] - 1));
	 }
       }
     $_SESSION['supmask'] = $smask;
   }
   echo '<p>Currently selected Suppliers:</p>';
   for($j = 0 ; $j < $rows ; ++$j)
      {
    	if($sact[$j] == 1) {
	  echo $snm[$j] ;
	  echo " ";
	}
      }
echo '<form action="suppliers.php" method="post"><pre>';
  for($j = 0 ; $j < $rows ; ++$j) {
   echo "<input type=\"checkbox\" name=\"supplier[]\" value=\"$snm[$j]\"/>$snm[$j] \n";
  }
echo <<<_TAIL1
</pre>
<input type="submit" value="OK" />
</form>
_TAIL1;
include 'footer.php';
echo "</body></html>";
?>
