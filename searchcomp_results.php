<?php
session_start();
require_once 'login.php';
include 'redir.php';
echo <<<_HEAD1
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/simple.css">
  <title>CompLib: Property Retrieval</title>

  <link rel="stylesheet" type="text/css" href="jquery/jquery.dataTables.min.css">
  <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="jquery/jquery.dataTables.min.js"></script>

</head>
<body>
_HEAD1;
include 'menuf.php';
require 'myfuncs.php';
# Get output for search by property
$db_server = dbset($db_hostname,$db_username,$db_password,$db_database);

$smask = $_SESSION['supmask'];
   
$mansel = get_mansel($smask);

$setpar = isset($_POST['natmax']); 

$manarray = array();
$manid = array();
get_manarray($manarray,$manid);

if($setpar) {
  $firstsl = False;
  $compsel = "select * from Compounds where (";
  if (($_POST['natmax'] != "") && ($_POST['natmin']!="")) {
    $compsel = $compsel."(natm > ".get_post('natmin')." and  natm < ".get_post('natmax').")";
    $firstsl = True;
  }
  if (($_POST['ncrmax']!="") && ($_POST['ncrmin']!="")) {
    if($firstsl) $compsel = $compsel." and ";
    $compsel = $compsel."(ncar > ".get_post('ncrmin')." and  ncar < ".get_post('ncrmax').")";
    $firstsl = True;
  }
  if (($_POST['nntmax']!="") && ($_POST['nntmin']!="")) {
    if($firstsl) $compsel = $compsel." and ";
    $compsel = $compsel."(nnit > ".get_post('nntmin')." and  nnit < ".get_post('nntmax').")";
    $firstsl = True;
  }
  if (($_POST['noxmax']!="") && ($_POST['noxmin']!="")) {
    if($firstsl) $compsel = $compsel." and ";
    $compsel = $compsel."(noxy > ".get_post('noxmin')." and  noxy < ".get_post('noxmax').")";
    $firstsl = True;
  }
  if($firstsl) {
    $compsel = $compsel.") and ".$mansel;
    $result = mysql_query($compsel);
    if(!result) die("unable to process query: " . mysql_error());
    $rows = mysql_num_rows($result);
    if($rows > 10000) {
      echo "<br><pre>Too many results ",$rows,". Max is 10000\n</pre>";
    } else  {
    echo <<<_VAL
<p><a href="http://mscidwd.bch.ed.ac.uk/s2255686/searchcomp.php">&#x2190;back</a></p>
<p>Following are the compounds retrieved for query <br><i>$compsel</i></p>
<p>Query returned <b>$rows</b> results.</p>
_VAL;
    echo <<< _TABLE
    <table id="myTable" class="display" border="1">
      <thead><tr>
      <th>CAT Number</th>
      <th>Manufacturer</th>
      </tr></thead><tbody>
_TABLE;
     for($j = 0 ; $j < $rows ; ++$j)
       {
         echo '<tr>';
	 $row = mysql_fetch_row($result);
         printf("<td><a href=showprops.php?cid=%s>%s</a></td> <td>%s</td>", 
$row[0], $row[11], $manarray[$row[10]-1]);
         echo '</tr>';
       }
       echo '</tbody></table>';
     }
  } else {
    echo "<p><a href=\"http://mscidwd.bch.ed.ac.uk/s2255686/searchcomp.php\">&#x2190;back</a></p><p>No Query Given\n";
  }
} 
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
