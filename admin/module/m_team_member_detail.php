<?php

if (isset($_GET['team_member'])) {
	$team_member_detaildetailID = $mysqli->real_escape_string(base64_decode($_GET['team_member'])); 	 
	$team_member_detaildetailID = substr($team_member_detaildetailID, 0, strlen($team_member_detaildetailID)-11);
	$_SESSION['EGPOSAKATTeamDetail'] = $team_member_detaildetailID;

	$team_member_name = $mysqli->real_escape_string(base64_decode($_GET['member'])); 	 
	$team_member_name = substr($team_member_name, 0, strlen($team_member_name)-11);
	$_SESSION['EGPOSAKATTeamDetailName'] = $team_member_name;
	
}

$GET_TeamDetail = $_SESSION['EGPOSAKATTeamDetail'];
$qr_team_member_detail ="SELECT * FROM v_member_detail WHERE status_id IN (1,2) and memberID = '$GET_TeamDetail' "; 
$qr_Lang ="SELECT * FROM tb_lang "; 


?>