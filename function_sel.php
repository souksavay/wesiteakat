<?php
include_once("config.php");
$log_id = $_SESSION['EGPOSAKATuser_id'];
//echo encrypt_decrypt("encrypt", "single");
ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom=ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean (erase) the output buffer

$findme = "Physical";
$pmac = strpos($mycom, $findme); // Find the position of Physical text
$mac=substr($mycom,($pmac+36),17); // Get Physical Address

$_SESSION['EGPOSAKATmacadd'] = $mac;

 


?>
