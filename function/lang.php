<?php 
 session_start();
	$SET_langID = $_GET['langid']; 

	if ($SET_langID == '' || $SET_langID == '0' || $SET_langID == '1') {
		$_SESSION['EDPOSV1AKAT_langID'] = '1';
	} else {
		$_SESSION['EDPOSV1AKAT_langID'] = $SET_langID;
	}

?>



