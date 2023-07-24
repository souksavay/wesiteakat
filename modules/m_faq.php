<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_faqH ="SELECT * FROM tb_faq WHERE status_id = 1 and titleType =1 and langID = '$langID' ORDER BY faqID DESC LIMIT 1 "; 
$qr_faqD ="SELECT * FROM tb_faq WHERE status_id = 1 and titleType =0 and langID = '$langID' ORDER BY topNo ASC ";
if ($result = $mysqli->query($qr_faqH)) {
    while ($row = $result->fetch_row()) {
        $faqTitle_h = $row[1];       
        $faqDescript_h = $row[2]; 
        
        if ($row[4]!='') {
            if (file_exists($row[4])) {
				$faqImg_h = $row[4]; 
			} else {
				$faqImg_h = "img/core-img/digital-3.png";
            }
        } else {
       		$faqImg_h = "img/core-img/digital-3.png";
		}  
    }
    $result->close();
}



?>
 