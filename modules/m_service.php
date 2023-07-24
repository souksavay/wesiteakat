<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_sH ="SELECT * FROM tb_services WHERE status_id = 1 and titleType =1 and langID = '$langID' ORDER BY serviceID DESC LIMIT 1 "; 
$qr_sD ="SELECT * FROM tb_services WHERE status_id = 1 and titleType =0 and langID = '$langID' ORDER BY topNo ASC ";
if ($result_sh = $mysqli->query($qr_sH)) {
    while ($row = $result_sh->fetch_row()) {
        $serviceTitle_h = $row[1];       
        $serviceDescript_h = $row[2];        
    }
    $result_sh->close();
}



?>
 