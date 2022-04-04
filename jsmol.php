<?php
session_start();
require_once 'login.php';
include 'redir.php';
$cid = 1;
if(isset($_GET['cid'])) {
  $cid = $_GET['cid'];
}
echo <<<_HEAD1
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/simple.css">
  <title>Complib: JSmol</title>

  <script type="text/javascript" src="http://mscidwd.bch.ed.ac.uk/s2255686/jsmol/JSmol.min.js"></script>
  <script type="text/javascript"> 

$(document).ready(function() {

Info = {
	width: 400,
	height: 400,
	debug: false,
	j2sPath: "http://mscidwd.bch.ed.ac.uk/s2255686/jsmol/j2s",
	color: "0xC0C0C0",
        disableJ2SLoadMonitor: true,
        disableInitialConsole: true,
	addSelectionOptions: false,
        readyFunction: null,
        allowjavascript: true,
        src: "http://mscidwd.bch.ed.ac.uk/s2255686/getmol_resp.php?cid=$cid"
}


$("#jmoldiv").html(Jmol.getAppletHtml("jmolApplet0",Info));

});

</script>
</head>

<body>
_HEAD1;
include 'menuf.php';
echo <<<_MIDDLE1
<p><a href="http://mscidwd.bch.ed.ac.uk/s2255686/jsmol_query.php">&#x2190;back</a>
<p>The Jsmol applet shows retrieved compound ID #$cid</p>
<span id=jmoldiv></span>

<p>
<a href="javascript:Jmol.script(jmolApplet0, 'spin on')"><button type="button">spin on</button></a>
<a href="javascript:Jmol.script(jmolApplet0, 'spin off')"><button type="button">spin off</button></a>
</p>
_MIDDLE1;
include 'footer.php';
echo <<<_TAIL2
</body>
</html>
_TAIL2;
?>
