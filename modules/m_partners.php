<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_partnerH ="SELECT * FROM tb_partner WHERE status_id = 1 and titleType =1 and langID = '$langID' ORDER BY partnerID DESC LIMIT 1 "; 
$qr_partnerD ="SELECT * FROM tb_partner WHERE status_id = 1 and titleType =0 and langID = '$langID' ORDER BY showNo ASC ";
if ($result = $mysqli->query($qr_partnerH)) {
    while ($row = $result->fetch_row()) {
        $partnerTitle_h = $row[2];       
        $partnerDescript_h = $row[3];        
    }
    $result->close();
}



?>
 