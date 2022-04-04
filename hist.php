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
  <title>CompLib: Histogram</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
echo "<p>Plot a histogram of the distribution of the selected attribute.</p>";

$dbfs = array("natm","ncar","nnit","noxy","nsul","ncycl","nhdon","nhacc","nrotb","mw","TPSA","XLogP");
$nms = array("n atoms","n carbons","n nitrogens","n oxygens","n sulphurs","n cycles","n H donors","n H acceptors","n rot bonds","mol wt","TPSA","XLogP");

if(isset($_POST['tgval'])) 
   {
     $chosen = 0;
     $tgval = $_POST['tgval'];
     for($j = 0 ; $j <sizeof($dbfs) ; ++$j) {
       # Determine the chosen radio button
       if(strcmp($dbfs[$j],$tgval) == 0) $chosen = $j; 
     } 

     $db_server = dbset($db_hostname,$db_username,$db_password,$db_database); 
     $smask = $_SESSION['supmask'];
     $mansel = get_mansel($smask);
     
     # Build up command to run histog.py with sys args
     $comtodo = "./histog.py ".$dbfs[$chosen]." \"".$nms[$chosen]."\" \"".$mansel."\"";
     
     # Execute the command, Python output becomes and encoded data in base64 format
     # then stored in the variable $output
     $output = base64_encode(shell_exec($comtodo));
     
     # Tell browser that data is inline (a png image that is base64 encoded)
     # not using external url, so less HTTP request per page
     echo <<<_imgput
     <img src="data:image/png;base64,$output"/>
_imgput;
   }
   
echo '<form action="hist.php" method="post"><pre>';
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
