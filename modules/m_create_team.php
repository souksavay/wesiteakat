<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_tm ="SELECT * FROM tb_team WHERE status_id = 1 and langID = '$langID' ORDER BY teamID DESC LIMIT 1 "; 
$qr_mmb ="SELECT * FROM tb_member WHERE status_id = 1 and langID = '$langID' ORDER BY showNo ASC ";
if ($result_tm = $mysqli->query($qr_tm)) {
    while ($row = $result_tm->fetch_row()) {
        $teamTitle = $row[1];       
        $teamDescript = $row[2];        
    }
    $result_tm->close();
}



?>
 