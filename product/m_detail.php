<?php
$langID = $_SESSION['EDPOSV1AKAT_langID'];
$get_serviceID = $mysqli->real_escape_string($_GET['product']);

if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }

$qr_pd ="SELECT * FROM tb_services WHERE serviceID = '$get_serviceID' and status_id = 1 and titleType =0 and langID = '$langID' ORDER BY topNo ASC ";
$qr_fn ="SELECT * FROM tb_service_detail WHERE serviceID = '$get_serviceID' and status_id = 1 and langID = '$langID' ORDER BY topNo ASC ";
if ($result_pd = $mysqli->query($qr_pd)) {
    while ($row = $result_pd->fetch_row()) {
        $serviceTitle = $row[1];       
        $serviceDescript = $row[2];        
        $serviceImg = $row[4];  
    }
    $result_pd->close();
}



?>
 