<?php
$GET_userID = $_SESSION['EGPOSAKATuser_id'];
if(isset($_POST["btnSaveNew"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
	$txtTitle = $mysqli->real_escape_string($_POST['txtTitle']); 	
	$serviceID = $_SESSION['EGPOSAKATserviceDetail']; 	
	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 
	$txtTopno = $mysqli->real_escape_string($_POST['txtTopno']); 
	if ($cbActive != "1") {
		$cbActive = "0";
	}	

	$sql = "INSERT INTO tb_service_detail (serviceID, serviceTitle, topNo, status_id, langID, user_add, date_add)
			VALUES ('$serviceID', '$txtTitle', '$txtTopno', '$cbActive', '$lang', '$GET_userID', NOW()) ";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/service_detail");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$txtId = $mysqli->real_escape_string($_POST['txtId']); 
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
	$txtTitle = $mysqli->real_escape_string($_POST['txtTitle']); 	
	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 
	$txtTopno = $mysqli->real_escape_string($_POST['txtTopno']); 
	if ($cbActive != "1") {
		$cbActive = "2";
	}	

	$sql = "UPDATE tb_service_detail SET serviceTitle='$txtTitle', topNo='$txtTopno', status_id='$cbActive', langID='$lang' , user_add='$GET_userID', date_add=NOW() WHERE sdID = '$txtId' ";	 	
	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=module/service_detail");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}


if(isset($_GET["service_detail"]) && isset($_GET["active"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['service_detail'])); 	 
	$id = substr($id, 0, strlen($id)-11);

	$activeID = $mysqli->real_escape_string(base64_decode($_GET['active'])); 	 
	$activeID = substr($activeID, 0, strlen($activeID)-11);	
	 
	if ($activeID == "1") {
		$activeID = "2";		
	} else if ($activeID == "2") {
		$activeID = "1";		 
	}

	$sql = "UPDATE tb_service_detail SET status_id = '$activeID' WHERE sdID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/service_detail");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}


if(isset($_GET["service_detail"]) && isset($_GET["del"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['service_detail'])); 	 
	$id = substr($id, 0, strlen($id)-11);	 		 

	$sql = "UPDATE tb_service_detail SET status_id = '3' WHERE sdID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/service_detail");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}

?>
 