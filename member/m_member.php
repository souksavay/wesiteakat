<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
$get_memID = $mysqli->real_escape_string($_GET['mem']);

if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }

$qr_mf ="SELECT * FROM tb_member WHERE memberID = '$get_memID' and status_id = 1 and langID = '$langID' ";
$qr_tt ="SELECT * FROM tb_member_detail WHERE memberID = '$get_memID' and status_id = 1 and langID = '$langID' ORDER BY mdID ASC ";
if ($result_mf = $mysqli->query($qr_mf)) {
    while ($row = $result_mf->fetch_row()) {
        $memFullName = $row[3];       
        $memDescript = $row[4];    
        $memImg = $row[5];        
        $memPosition = $row[6];  
        $memFacebook = $row[7];  
        $memWhatsapp = $row[8];  
        $memTel = $row[9];  

        if ($row[5]!='') {
            if (file_exists($row[5])) {
				$memImg = $row[5];
			} else {
				$memImg = "img/team-img/member1.png";
            }
        } else {
       		$memImg = "img/team-img/member1.png";
		}
    }
    $result_mf->close();
}



?>
 