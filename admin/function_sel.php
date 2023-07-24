<?php
include_once("../config.php");
$log_id = $_SESSION['EGPOSAKATuser_id'];

ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom=ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean (erase) the output buffer

$findme = "Physical";
$pmac = strpos($mycom, $findme); // Find the position of Physical text
$mac=substr($mycom,($pmac+36),17); // Get Physical Address

$_SESSION['EGPOSAKATmacadd'] = $mac;


function checkLogin($macaddress, $getUsername, $getPass, $mysqli) { 
    $message='';
    $passmd5 = md5($getPass.'505uK5@v@y'.$getUsername);
    $qry = " SELECT *, date(date_add) as dateadd FROM  v_user  WHERE  username='$getUsername' and password='$passmd5'  ";

    if ($result_auth = $mysqli->query($qry)) {
    	while ($row = $result_auth->fetch_row()) {
	        $_SESSION['EGPOSAKATuser_id'] = $row[0];
	 		$_SESSION['EGPOSAKATuser_name'] = $row[2];       
	        $_SESSION['EGPOSAKATrole_id'] = $row[3];
	        $_SESSION['EGPOSAKATfirst_name'] = $row[4];
	        $_SESSION['EGPOSAKATlast_name'] = $row[5];
	        $_SESSION['EGPOSAKATdateuser_add'] = $row[26];
	        $_SESSION['EGPOSAKATuser_pic'] = $row[15];
	        $_SESSION['EGPOSAKATinfo_id'] = $row[21];
	        $_SESSION['EGPOSAKATinfo_name'] = $row[7];
	        $_SESSION['EGPOSAKATinfo_addr'] = $row[8];
	        $_SESSION['EGPOSAKATinfo_tel'] = $row[9];
	        $_SESSION['EGPOSAKATinfo_owner'] = $row[10];
	        $_SESSION['EGPOSAKATinfo_logo'] = $row[11];  
	        header("Location: index.php");
	        exit();
	    }
	     $result_auth->close();
    }
     

      
}


?>
