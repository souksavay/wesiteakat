<?php
$GET_userID = $_SESSION['EGPOSAKATuser_id'];
if(isset($_POST["btnSaveNew"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
	$txtTitle = $mysqli->real_escape_string($_POST['txtTitle']); 	
	$team_member_detailID = $_SESSION['EGPOSAKATTeamDetail']; 	
	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 
	
	if ($cbActive != "1") {
		$cbActive = "0";
	}	

	$sql = "INSERT INTO tb_member_detail (memberID, memTitle, langID, status_id, user_add, date_add)
			VALUES ('$team_member_detailID', '$txtTitle', '$lang', '$cbActive', '$GET_userID', NOW()) ";	 
	if ($mysqli->query($sql) === TRUE) {
		//header("Location: ?d=module/team_member_detail");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$txtId = $mysqli->real_escape_string($_POST['txtId']); 
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
	$txtTitle = $mysqli->real_escape_string($_POST['txtTitle']); 	
	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 	
	if ($cbActive != "1") {
		$cbActive = "2";
	}	

	$sql = "UPDATE tb_member_detail SET memTitle='$txtTitle', status_id='$cbActive', langID='$lang' , user_add='$GET_userID', date_add=NOW() WHERE mdID = '$txtId' ";	 	
	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=module/team_member_detail");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}


if(isset($_GET["team_member_detail"]) && isset($_GET["active"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['team_member_detail'])); 	 
	$id = substr($id, 0, strlen($id)-11);

	$activeID = $mysqli->real_escape_string(base64_decode($_GET['active'])); 	 
	$activeID = substr($activeID, 0, strlen($activeID)-11);	
	 
	if ($activeID == "1") {
		$activeID = "2";		
	} else if ($activeID == "2") {
		$activeID = "1";		 
	}

	$sql = "UPDATE tb_member_detail SET status_id = '$activeID' WHERE mdID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/team_member_detail");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}


if(isset($_GET["team_member_detail"]) && isset($_GET["del"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['team_member_detail'])); 	 
	$id = substr($id, 0, strlen($id)-11);	 		 

	$sql = "UPDATE tb_member_detail SET status_id = '3' WHERE mdID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/team_member_detail");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}

?>
 