<?php
session_start();
require_once 'login.php';
include 'redir.php';
#$smilesstring = 1;
if(isset($_GET['smilesstring'])) {
  $smiltesstring = $_GET['smilesstring'];
}
?>
<!DOCTYPE html>
<!--Code adapted from this example at https://chemapps.stolaf.edu/jmol/jsmol/jsv_jme.htm by Bob Hanson-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/simple.css">
<title>Smiles to Spectra</title>
<meta charset="utf-8" />

<script type="text/javascript" src="jsmol/JSmol.min.js"></script>
<script type="text/javascript" src="jsmol/js/JSmolJSV.js"></script>
<script type="text/javascript" src="jsmol/js/JSmolJME.js"></script>
<script type="text/javascript" src="jsme/jsme.nocache.js"></script>

<script>
function predictSpectrum(isJmol) {
  unhideJSV();
  if (!isJmol) {
    var data = Jmol.jmeGetFile(jme, false);
    if (!data.length) {
      alert("Please draw a structure or do a search first.");
      return;
    }
  }
  Jmol.updateView(isJmol ? jmol : jme);
}

js = Jmol._search;

Jmol._search = function(applet, query) {
 unhideJSV();
 js(applet, query);
}

Jmol.User.viewUpdatedCallback = function(applet, note) {
  $("#moldiv").html(note + "\n\n" + Jmol.View.dumpViews(applet._viewSet))
}

function unhideJSV() {
 $("#infodiv").hide();
 $("#jsvdiv").show(); 
}

var JMEInfo = {     
  viewSet: 1,
         use: "HTML5",
  divId: "jmediv", // note: width and height are set by a style attribute in this div
  options : "autoez;nocanonize",
  editOptions: "editDisabled;",
  addSelectionOptions: true,
  structureChangedCallback: "testCallback" // Jmol will handle this
}

Jmol.setGrabberOptions([["$", "NCI"]]) // allows 2D reading

JSVInfo = {
  viewSet: 1,
	use: "HTML5",
	width: 640,
	height: 400,
	color: "0xC0C0C0",
	serverURL: "https://chemapps.stolaf.edu/jmol/jsmol/php/jsmol.php",
  preloadScript: "close views;close simulations > 1; DEFAULTNMRNORMALIZATION 1000;",
  script: 'defaultLoadScript "OVERLAYSTACKED true; VIEW *;STACKOFFSETY 50;";',
  disableJ2SLoadMonitor: false,
  disableInitialConsole: true,
  addSelectionOptions: false,
}

//Jmol.setAppletSync(["jsv", "jmol"], ["", ""], true);

var smilesS = "<?php echo $_GET['smilesstring']; ?>"; //Get the smiles string from smiles.php as preloaded input of the jme_query search box

$(document).ready(function() {
 $("#jme_query").val(smilesS);
 $(".btn").css({width:auto});
 $("a").css({"text-decoration":"none"});
 $("#enableEdit").prop('checked', false);
});

function nameIt() {
	alert(Jmol.getChemicalInfo(jme, 'names'));
}
</script>

</head>
<body>
<?php include 'menuf.php'; ?>
<h2>Smiles to Spectra</h2>
<p>Here the SMILES string is preloaded into the Search box of the Javascript Molecular Editor (JSME). 
<p>Click <i>Search</i> to display the JSME object, then click <i>Predict Spectrum</i> to see a <b>simulated</b> spectrum by JSpecView. 
<p>Alternatively, enter an identifier such as a chemical name or SMILES string, or enable editing and draw a compound. Or load your own spectrum by dragging a file into the blue box or using a right-click to access the pop-up menu.
<article>
To select atoms on the structure, click <span><img src=images/jmestar.png></span> from the menu, then click on an atom.
<br>
To select a peak, just click on it. Clickable peaks are the ones with a red tab at the top.
</article>

<article>
<p>
<label><input id="enableEdit" type="checkbox" onclick="jme._enableEdit(this.checked)">Enable Editing</label>
<br>
<a href="javascript:Jmol.saveImage(jme)"><input type="button" value="Capture Image"></button></a> 
<div id="jmediv" style="position:relative;width:350px;height:320px;"></div>
<script>
Jmol.getJMEApplet("jme", JMEInfo);
</script>
<input class="btn" type="button" onclick="predictSpectrum(0)" value="Predict spectrum"/>
</article>

<article>
<div id="jsvdiv" style="position:relative;border-style:solid;border-color:blue;border-width:1px;width:640px;">
<script>
Jmol.getJSVApplet("jsv", JSVInfo)
</script>
</div>
<a href="javascript:unhideJSV();Jmol.showInfo(jsv, true);Jmol.showInfo(jmol, true)"><u>Info</u></a> 
<a href="javascript:Jmol.clearConsole(jsv);Jmol.clearConsole(jmol);"><u>Clear</u></a>
<a href="javascript:Jmol.showInfo(jsv, false);Jmol.showInfo(jmol, false)"><u>Spectrum</u></a>
<a href="javascript:Jmol.showInfo(jsv, false);Jmol.script(jsv, 'showIntegration')"><u>Integration</u></a>
<a href="javascript:Jmol.script(jsv, 'write PDF')"><u>Print</u></a>
<span style="font-size:10pt">
<a href="http://www.rsc.org/learn-chemistry/collections/spectroscopy">RSC SpectraSchool</a>
<br>
(drag to zoom; right-click for menu; note that OH and NH may not be shown)
</span>
</article>

<p>Name-to-structure: JSmol call for NIH resolver (Frederick, Maryland)
<br>Structure-to-spectrum: JSmol call for nmrdb (Lausanne, Switzerland)
<br><span style="color:red">Note that these spectra are <i>just predictions.</i> They may differ significantly from actual NMR spectra.</span>

<?php include 'footer.php'; ?>
</body>
</html>

