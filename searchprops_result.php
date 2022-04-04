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
# Returns the results of searchprops.php
$db_server = dbset($db_hostname,$db_username,$db_password,$db_database);
$manarray = array();
$manid = array();
get_manarray($manarray,$manid);

if (($_POST['tgval'] != "") && ($_POST['cval']!="")) {
  # "get_post" array instead of ?
  $mychoice = get_post('tgval');
  $myvalue = get_post('cval');
  $compsel = "select * from Compounds where ";
  if($mychoice == "mw") {
    $compsel = $compsel."( mw > ".($myvalue - 1.0)." and  mw < ".($myvalue + 1.0).")";
  }
  if($mychoice == "TPSA") {
    $compsel = $compsel."( TPSA > ".($myvalue - 0.1)." and  TPSA < ".($myvalue + 0.1).")";
  }
  if($mychoice == "XlogP") {
    $compsel = $compsel."( XlogP > ".($myvalue - 0.1)." and  XlogP < ".($myvalue + 0.1).")";
  }
  # echo $compsel;
  $result = mysql_query($compsel);
  if(!$result) die("unable to process query: " . mysql_error());
  $rows = mysql_num_rows($result);
  echo "<p><a href=\"http://mscidwd.bch.ed.ac.uk/s2255686/searchprops.php\">&#x2190;back</a></p>";
  if($rows > 10000) {
    echo "Too many results ",$rows," Max is 10000\n";
  } else  {
    echo <<<_VAL
<p>Following are the compounds retrieved for query <b>$mychoice $myvalue</b></p>
<p>Query returned <b>$rows</b> results.</p>
_VAL;
    echo <<<_TABLE
<table id="myTable" class="display" border="1">
  <thead><tr>
    <th>CAT Number</th>
    <th>Manufacturer</th>
    <th>Property</th>
  </tr></thead>
  <tbody>
_TABLE;
    for($j = 0 ; $j < $rows ; ++$j)
      {
	echo "<tr>";
        $row = mysql_fetch_row($result);
        # This gives the link to show the properties of the selected compound
	printf("<td><a href=showprops.php?cid=%s target=\"_blank\" rel=\"noreferrer noopener\">%s</a></td> <td>%s</td>", $row[0],$row[11],$manarray[$row[10] - 1]);
	if($mychoice == "mw") {
	   printf("<td>$row[12]</td>");
	}
	if($mychoice == "TPSA") {
          printf("<td>%s</td> ", $row[13]);
	}
	if($mychoice == "XlogP") {
	  printf("<td>%s</td> ", $row[14]);
	}     
        echo "</tr>";
      }
      echo "</tbody></table>";
    }
  } else {
    echo "<p>No Query Given\n";
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
