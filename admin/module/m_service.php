<?php
 
$qr_service ="SELECT * FROM v_services WHERE status_id IN (1,2) ORDER BY langID ASC "; 
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