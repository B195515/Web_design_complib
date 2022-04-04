<?php
session_start();
require_once 'login.php';
require 'myfuncs.php';
include 'redir.php';
echo <<<_HEAD1
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/simple.css">
  <title>CompLib: Smiles conversion</title>

  <link rel="stylesheet" type="text/css" href="jquery/jquery.dataTables.min.css">
  <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="jquery/jquery.dataTables.min.js"></script>
</head>
<body>
_HEAD1;
include 'menuf.php';
/*This is a script for searching a compound and using the smiles string in the database and uses the NIH cactus software to convert smiles string into an image of the corresponding chemical structure*/
echo "<h2>Smiles conversion and spectra viewer</h2>";
$db_server = dbset($db_hostname,$db_username,$db_password,$db_database);
$smask = $_SESSION['supmask'];
$mansel = get_mansel($smask);
$manarray = array();
$manid = array();
get_manarray($manarray,$manid);

$setpar = isset($_POST['natmax']); 
echo <<<_MAIN1
<p>This is Smiles string page. Filter compounds by atom count, then generate an image of the chemical structure, followed by conversion of SMILES string into predicted NMR spectrum.</p>

<p>For more info: <a href="https://cactus.nci.nih.gov/chemical/structure" target="_blank" rel="noopener noreferrer">Chemical Identifier Resolver by Cactus (NIH)</a></p>

<p>Or use the JSME-JSpecView converter directly <a href="http://mscidwd.bch.ed.ac.uk/s2255686/smilesjj.php?smilesstring=ethanol" target="_blank" rel="noopener noreferrer">here</a>.</p>
_MAIN1;
if($setpar) {
  $firstsl = False;
  $compsel = "select catn,id,ManuID from Compounds where (";
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
    echo "<p>The Query used for this search was</p>";
    echo "\n<i>$compsel</i>";
     $result = mysql_query($compsel);
     if(!$result) die("unable to process query: " . mysql_error());
     $rows = mysql_num_rows($result);
     if($rows > 200) {
       echo "<pre>\nToo many results ",$rows," Max is 200\n</pre>\n";
     } else  {
     echo "<p>Search returned $rows results.</p>";
     echo <<<_TABLESET
     <table id="myTable" class="display" border="1">
     <thead><tr>
       <th>Catalog ID</th>
       <th>Manufacturer</th>
       <th>Smiles String</th>
       <th>Structure</th>
     </tr></thead>
     <tbody>
_TABLESET;
     for($j = 0 ; $j < $rows ; ++$j)
       {
	 $row = mysql_fetch_row($result);
         $cid = $row[1];
         $compselsmi = "select smiles from Smiles where cid = ".$cid;
         $resultsmi = mysql_query($compselsmi);
         $smilesrow = mysql_fetch_row($resultsmi);
         $smilesstring = $smilesrow[0];
         $convurl = "https://cactus.nci.nih.gov/chemical/structure/".urlencode($smilesstring)."/image";
         $convstr = base64_encode(file_get_contents($convurl));
	 printf("<tr><td>%s</td> <td>%s</td> <td><a href=smilesjj.php?smilesstring=%s target=\"_blank\" rel=\"noopener noreferrer\">%s</a></td> <td><img src=\"data:image/gif;base64,%s\"></img></td> </tr>",$row[0],$smask,$smilesstring,$smilesstring,$convstr);
       }
     echo "</tbody></table>\n";
     }
  } else {
    echo "<pre>No Query Given</pre>";
  }
} 
echo <<<_TAIL1
<form action="smiles.php" method="post"><pre>
Max Atoms      <input type="text" size="4" name="natmax"/>    Min Atoms      <input type="text" size="4" name="natmin"/>
Max Carbons    <input type="text" size="4" name="ncrmax"/>    Min Carbons    <input type="text" size="4" name="ncrmin"/>
Max Nitrogens  <input type="text" size="4" name="nntmax"/>    Min Nitrogens  <input type="text" size="4" name="nntmin"/>
Max Oxygens    <input type="text" size="4" name="noxmax"/>    Min Oxygens    <input type="text" size="4" name="noxmin"/>
</pre>
<input type="submit" value="List" />
</form>

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
