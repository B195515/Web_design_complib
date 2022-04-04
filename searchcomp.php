<?php
session_start();
include 'redir.php';
require_once 'login.php';
echo <<<_HEAD1
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/simple.css">
  <title>CompLib: Catalogue</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
/*This is a script for searching compounds by the attributes in (atoms, carbons, nitrogens, and oxygens. Max return is 100 compounds. More reliable after choosing a manufacturer(s)*/
echo <<<_FORM1
<h2>Search compounds by elements</h2>
<p>This is the Property search page</p>
<p>Use the <a href="http://mscidwd.bch.ed.ac.uk/s2255686/hist.php" target="_blank" rel="noopener noreferrer">Histogram</a> page to check the range of values for each element.</p>

<form action="searchcomp_results.php" method="post"><pre>
Max Atoms      <input type="text" size="4" name="natmax"/>    Min Atoms      <input type="text" size="4" name="natmin"/>
Max Carbons    <input type="text" size="4" name="ncrmax"/>    Min Carbons    <input type="text" size="4" name="ncrmin"/>
Max Nitrogens  <input type="text" size="4" name="nntmax"/>    Min Nitrogens  <input type="text" size="4" name="nntmin"/>
Max Oxygens    <input type="text" size="4" name="noxmax"/>    Min Oxygens    <input type="text" size="4" name="noxmin"/>
</pre>
<input type="submit" value="List" />
</form>
_FORM1;
include 'footer.php';
echo <<<_TAIL
</body>
</html>
_TAIL;
?>

