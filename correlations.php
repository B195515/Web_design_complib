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
  <title>CompLib: Correlations</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
echo "<p>Compare the statistics of two attributes for all compounds of the selected manufacturers by Pearson's Correlation Coefficient</p>";

$dbfs = array("natm","ncar","nnit","noxy","nsul","ncycl","nhdon","nhacc","nrotb","mw","TPSA","XLogP");
$nms = array("n atoms","n carbons","n nitrogens","n oxygens","n sulphurs","n cycles","n H donors","n H acceptors","n rot bonds","mol wt","TPSA","XLogP");

# Check if forms are properly filled, then determine which attributes have been chosen
if(isset($_POST['tgval']) && isset($_POST['tgvalb']))
    {
     $chosen = 0;
     $tgval = $_POST['tgval'];
     $tgvalb = $_POST['tgvalb'];
     for($j = 0 ; $j <sizeof($dbfs) ; ++$j) {
       if(strcmp($dbfs[$j],$tgval) == 0) $chosen = $j; 
     } 
     for($j = 0 ; $j <sizeof($dbfs) ; ++$j) {
       if(strcmp($dbfs[$j],$tgvalb) == 0) $chosenb = $j;
     }

     # Determine what is the "where" clause is from the masked supplier list
     $db_server = dbset($db_hostname,$db_username,$db_password,$db_database);  
     $smask = $_SESSION['supmask'];
     $mansel = get_mansel($smask);

     #Build up command to execute python script based on the input, and output results to screen
    $comtodo = "./correlate3.py ".$dbfs[$chosen]." ".$dbfs[$chosenb]." \"".$mansel."\"";
    printf("<b>Correlation for %s (%s) vs %s (%s) <br>",$dbfs[$chosen],$nms[$chosen],$dbfs[$chosenb],$nms[$chosenb]);
    #print($comtodo);
    $rescor = system($comtodo);
    printf("\n");
   }
echo "</b>";
// Build form with two sets of radio buttons
echo '<form action="correlations.php" method="post"><pre>';
for($j = 0 ; $j <sizeof($dbfs) ; ++$j) {
  if($j == 0) {
    printf(' %15s <input type="radio" name="tgval" value="%s" checked"/> %15s <input type="radio" name="tgvalb" value="%s" checked"/>',$nms[$j],$dbfs[$j],$nms[$j],$dbfs[$j]);
  } else {
    printf(' %15s <input type="radio" name="tgval" value="%s"/> %15s <input type="radio" name="tgvalb" value="%s"/>',$nms[$j],$dbfs[$j],$nms[$j],$dbfs[$j]);
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
