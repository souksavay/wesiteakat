<?php
	session_start();
	
	unset($_SESSION['EGPOSAKATuser_id']);
	unset($_SESSION['EGPOSAKATuser_name']);
	unset($_SESSION['EGPOSAKATrole_id']);
	unset($_SESSION['EGPOSAKATfirst_name']);
	unset($_SESSION['EGPOSAKATlast_name']);
	unset($_SESSION['EGPOSAKATdateuser_add']);
	unset($_SESSION['EGPOSAKATuser_pic']);
	unset($_SESSION['EGPOSAKATinfo_id']);
	unset($_SESSION['EGPOSAKATinfo_name']);
	unset($_SESSION['EGPOSAKATinfo_addr']);
	unset($_SESSION['EGPOSAKATinfo_tel']);
	unset($_SESSION['EGPOSAKATinfo_owner']);
	unset($_SESSION['EGPOSAKATinfo_logo']);

	header("Location: login.php");
