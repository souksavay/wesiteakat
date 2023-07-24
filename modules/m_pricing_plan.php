<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_pH ="SELECT * FROM tb_price WHERE status_id = 1 and titleType =1 and langID = '$langID' ORDER BY priceID DESC LIMIT 1 "; 
$qr_priceD ="SELECT * FROM tb_price WHERE status_id = 1 and titleType =0 and langID = '$langID' ORDER BY topNo ASC ";

if ($result = $mysqli->query($qr_pH)) {
    while ($row = $result->fetch_row()) {
        $priceTitle = $row[1];       
        $priceDescript = $row[2];                 
    }
    $result->close();
}



?>
 