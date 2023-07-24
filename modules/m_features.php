<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_featureH ="SELECT * FROM tb_features WHERE status_id = 1 and titleType =1 and langID = '$langID' ORDER BY featuresID DESC LIMIT 1 "; 
$qr_featureD ="SELECT * FROM tb_features WHERE status_id = 1 and titleType =0 and langID = '$langID' ORDER BY topNo ASC ";
if ($result = $mysqli->query($qr_featureH)) {
    while ($row = $result->fetch_row()) {
        $featureTitle_h = $row[1];       
        $featureDescript_h = $row[2];        
    }
    $result->close();
}



?>
 