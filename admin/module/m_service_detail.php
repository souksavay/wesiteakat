<?php

if (isset($_GET['service'])) {
	$servicedetailID = $mysqli->real_escape_string(base64_decode($_GET['service'])); 	 
	$servicedetailID = substr($servicedetailID, 0, strlen($servicedetailID)-11);
	$_SESSION['EGPOSAKATserviceDetail'] = $servicedetailID;

	$servicedetailLang = $mysqli->real_escape_string(base64_decode($_GET['lang'])); 	 
	$servicedetailID = substr($servicedetailLang, 0, strlen($servicedetailLang)-11);
	$_SESSION['EGPOSAKATserviceDetailLang'] = $servicedetailLang;
}

$GET_serviceDetail = $_SESSION['EGPOSAKATserviceDetail'];
$qr_service ="SELECT * FROM v_services_detail WHERE status_id IN (1,2) and serviceID = '$GET_serviceDetail' "; 
$qr_Lang ="SELECT * FROM tb_lang "; 


/* 
if ($result = $mysqli->query($qr_feature)) {
    while ($row = $result->fetch_row()) {
        $featureTitle = $row[1];       
        $featureDescript_h = $row[2];        
    }
    $result->close();
}

*/

?>