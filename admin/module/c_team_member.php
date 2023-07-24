<?php
$GET_userID = $_SESSION['EGPOSAKATuser_id'];
if(isset($_POST["btnSaveNew_H"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
	$txtTitle = $mysqli->real_escape_string($_POST['txtTitle']); 
	$txtDescription = $mysqli->real_escape_string($_POST['txtDescription']); 
	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 
	if ($cbActive != "1") {
		$cbActive = "0";		
	}	else {
		$sql_h = "UPDATE tb_team SET status_id = 2 WHERE langID = '$lang'";	
			$mysqli->query($sql_h); 
	}

	$sql = "INSERT INTO tb_team (teamTitle, teamDescript, status_id, langID, user_add, date_add)
			VALUES ('$txtTitle', '$txtDescription', '$cbActive', '$lang', '$GET_userID', NOW()) ";	 
	if ($mysqli->query($sql) === TRUE) {		
		header("Location: ?d=module/team_member");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit_H"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$txtId = $mysqli->real_escape_string($_POST['txtId']); 
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
	$txtTitle = $mysqli->real_escape_string($_POST['txtTitle']); 
	$txtDescription = $mysqli->real_escape_string($_POST['txtDescription']); 
	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 
	if ($cbActive != "1") {
		$cbActive = "2";		
	}	 

	$sql = "UPDATE tb_team SET teamTitle='$txtTitle', teamDescript='$txtDescription', status_id='$cbActive', langID='$lang' , user_add='$GET_userID', date_add=NOW() WHERE teamID = '$txtId' ";	 	
	if ($mysqli->query($sql) === TRUE) {
		if ($cbActive == "1") {
			$sql_h = "UPDATE tb_team SET status_id = 2 WHERE langID = '$lang' and teamID <> '$txtId' ";	
			$mysqli->query($sql_h); 
		} 
		
		header("Location: ?d=module/team_member");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_GET["tHeader"]) && isset($_GET["active"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['tHeader'])); 	 
	$id = substr($id, 0, strlen($id)-11);

	$activeID = $mysqli->real_escape_string(base64_decode($_GET['active'])); 	 
	$activeID = substr($activeID, 0, strlen($activeID)-11);	

	$lang = $mysqli->real_escape_string(base64_decode($_GET['lang'])); 	 
	$lang = substr($lang, 0, strlen($lang)-11);	
	 
	if ($activeID == "1") {
		$activeID = "2";		
	} else if ($activeID == "2") {
		$activeID = "1";	
		$sql_h = "UPDATE tb_team SET status_id = 2 WHERE langID = '$lang' and teamID <> '$id' ";	
		$mysqli->query($sql_h); 	 
	}

	$sql = "UPDATE tb_team SET status_id = '$activeID' WHERE teamID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {		
		header("Location: ?d=module/team_member");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
} 

if(isset($_GET["tHeader"]) && isset($_GET["del"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['tHeader'])); 	 
	$id = substr($id, 0, strlen($id)-11);	 		 

	$sql = "UPDATE tb_team SET status_id = '3' WHERE teamID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/team_member");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}


//==========================================================================



if(isset($_POST["btnSaveNew"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
	$txtFullname = $mysqli->real_escape_string($_POST['txtFullname']); 
	$txtPosition = $mysqli->real_escape_string($_POST['txtPosition']); 
	$txtFacebook = $mysqli->real_escape_string($_POST['txtFacebook']); 
	$txtWhatsapp = $mysqli->real_escape_string($_POST['txtWhatsapp']); 
	$txtMobile = $mysqli->real_escape_string($_POST['txtMobile']); 
	$txtDescription = $mysqli->real_escape_string($_POST['txtDescription']); 

	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 
	$txtTopno = $mysqli->real_escape_string($_POST['txtTopno']); 
	if ($cbActive != "1") {
		$cbActive = "0";
	}
	$tmp_file_name = trim($_FILES["txtImage"]["tmp_name"]);

	

	if($tmp_file_name != "") { 
		$file_name = date('YmdHms').$_FILES["txtImage"]["name"]; 
		copy($_FILES["txtImage"]["tmp_name"],"../img/members/".$file_name);

		$fullPath = "img/members/".$file_name; 
	}

	$sql = "INSERT INTO tb_member (teamID, showNo, fullName, memDescript, mbImg, position, facebook, whatsapp, tel, langID, status_id, user_add, date_add)
			VALUES (1, '$txtTopno', '$txtFullname', '$txtDescription', '$fullPath','$txtPosition','$txtFacebook','$txtWhatsapp','$txtMobile', '$lang', 1, '$GET_userID', NOW()) ";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/team_member");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$txtId = $mysqli->real_escape_string($_POST['txtId']); 
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
	$txtFullname = $mysqli->real_escape_string($_POST['txtFullname']); 
	$txtPosition = $mysqli->real_escape_string($_POST['txtPosition']); 
	$txtFacebook = $mysqli->real_escape_string($_POST['txtFacebook']); 
	$txtWhatsapp = $mysqli->real_escape_string($_POST['txtWhatsapp']); 
	$txtMobile = $mysqli->real_escape_string($_POST['txtMobile']); 
	$txtDescription = $mysqli->real_escape_string($_POST['txtDescription']); 

	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 
	$txtTopno = $mysqli->real_escape_string($_POST['txtTopno']); 
	if ($cbActive != "1") {
		$cbActive = "2";
	}
	$tmp_file_name = trim($_FILES["txtImage"]["tmp_name"]);
	
	if($tmp_file_name != "") { 
		$file_name = date('YmdHms').$_FILES["txtImage"]["name"]; 
		copy($_FILES["txtImage"]["tmp_name"],"../img/members/".$file_name);
		$fullPath = "img/members/".$file_name; 		
		$sql_img = "UPDATE tb_member SET mbImg='$fullPath' WHERE memberID = '$txtId' ";	 
		$mysqli->query($sql_img); 
	}

	$sql = "UPDATE tb_member SET fullName='$txtFullname', memDescript='$txtDescription',position='$txtPosition',facebook='$txtFacebook',whatsapp='$txtWhatsapp', tel='$txtMobile', showNo='$txtTopno', status_id='$cbActive', langID='$lang' , user_add='$GET_userID', date_add=NOW() WHERE memberID = '$txtId' ";		
	if ($mysqli->query($sql) === TRUE) {		
		header("Location: ?d=module/team_member");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
} 


if(isset($_GET["team_member"]) && isset($_GET["active"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['team_member'])); 	 
	$id = substr($id, 0, strlen($id)-11);

	$activeID = $mysqli->real_escape_string(base64_decode($_GET['active'])); 	 
	$activeID = substr($activeID, 0, strlen($activeID)-11);	
	 
	if ($activeID == "1") {
		$activeID = "2";		
	} else if ($activeID == "2") {
		$activeID = "1";		 
	}

	$sql = "UPDATE tb_member SET status_id = '$activeID' WHERE memberID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/team_member");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}


if(isset($_GET["team_member"]) && isset($_GET["del"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['team_member'])); 	 
	$id = substr($id, 0, strlen($id)-11);	 		 

	$sql = "UPDATE tb_member SET status_id = '3' WHERE memberID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/team_member");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}

?>
 