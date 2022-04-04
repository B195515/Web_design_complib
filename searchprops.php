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
  <title>CompLib: Search Property</title>
</head>
<body>
_HEAD1;
include 'menuf.php';
echo<<<_MAIN
<h2>Search compounds by property</h2>
<p>This is the Property search page</p>
<p>Use the <a href="http://mscidwd.bch.ed.ac.uk/s2255686/hist.php" target="_blank" rel="noopener noreferrer">Histogram</a> page to check the range of values for each attribute.</p>

<form action="searchprops_result.php" method="post">
<pre>mol wt <input type="radio" name="tgval" value="mw" checked"/>
TPSA <input type="radio" name="tgval" value="TPSA"/>
XlogP <input type="radio" name="tgval" value="XlogP"/>
Value <input type="text" size="4" name="cval"/>
</pre>
<input type="submit" value="OK" />
</form>
_MAIN;
include 'footer.php';
echo <<<_TAIL2
</body>
</html>
_TAIL2;
?>
