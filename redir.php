<?php
/*
This script checks if forename and surname have been stored in a session
Otherwise redirects any of the pages back to complib.php
*/
if(!(isset($_SESSION['forname']) &&
     isset($_SESSION['surname'])))
  {
  header('location: http://mscidwd.bch.ed.ac.uk/s2255686/complib.php');
  }
?>
