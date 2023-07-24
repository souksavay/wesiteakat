<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }
$qr_ab ="SELECT * FROM tb_about WHERE status_id = 1  and langID = '$langID' ORDER BY topNo "; 

/*
if ($result_ab = $mysqli->query($qr_ab)) {
    while ($row = $result_ab->fetch_row()) {
        $abTitle = $row[1];       
        $abDescript = $row[2];        
        $abImg = $row[4];        
    }
    $result_ab->close();
}
*/


?>
 