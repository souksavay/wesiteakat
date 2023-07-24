<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];

if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_ct ="SELECT * FROM tb_contact WHERE status_id = 1 and langID = '$langID' and titleType = 1 ORDER BY contactID DESC LIMIT 1 "; 
if ($result_ct = $mysqli->query($qr_ct)) {
    while ($row_ct = $result_ct->fetch_row()) {
        $contactTitle = $row_ct[1];                     
        $contactDescript = $row_ct[2];      
        $contactName = $row_ct[3];
        $contactEmail = $row_ct[4];
        $contactSubject = $row_ct[5];
        $contactMessage = $row_ct[6];
        $contactTel = $row_ct[7];
        $contactbtnSend = $row_ct[8];       
    }
    $result_ct->close();
}



?>