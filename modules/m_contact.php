<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];

if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_contact ="SELECT * FROM tb_contact_modules WHERE status_id = 1 and langID = '$langID' ORDER BY contactID DESC LIMIT 1 "; 

if ($result_contact = $mysqli->query($qr_contact)) {
    while ($row_ct = $result_contact->fetch_row()) {
        $contactTitle1 = $row_ct[1];       
        $contactTitle2 = $row_ct[2];        
        $contactDiscript = $row_ct[3];      
        $contactInputEmail = $row_ct[4];
        $contactButton = $row_ct[5];
    }
    $result_contact->close();
}



?>