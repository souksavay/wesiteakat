<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_clientH ="SELECT * FROM tb_client WHERE status_id = 1 and titleType =1 and langID = '$langID' ORDER BY clientID DESC LIMIT 1 "; 
$qr_clientD ="SELECT * FROM tb_client WHERE status_id = 1 and titleType =0 and langID = '$langID' ORDER BY clientNo ASC ";
if ($result = $mysqli->query($qr_clientH)) {
    while ($row = $result->fetch_row()) {
        $clientTitle = $row[2];       
        $clientDescript = $row[3];        
    }
    $result->close();
}
?>
 