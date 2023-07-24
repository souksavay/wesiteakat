<?php
$GET_userID = $_SESSION['EGPOSAKATuser_id'];
if(isset($_POST["btnSaveNew"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 
	$cbHeader = $mysqli->real_escape_string($_POST['cbHeader']); 
	if ($cbHeader != "1") {
		$cbHeader = "0";
	}
	$txtTitle = $mysqli->real_escape_string($_POST['txtTitle']); 
	$txtDescription = $mysqli->real_escape_string($_POST['txtDescription']); 
	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 
	$txtTopno = $mysqli->real_escape_string($_POST['txtTopno']); 
	if ($cbActive != "1") {
		$cbActive = "0";
	}
	$tmp_file_name = trim($_FILES["txtImage"]["tmp_name"]);

	

	if($tmp_file_name != "") { 
		$file_name = date('YmdHms').$_FILES["txtImage"]["name"]; 
		copy($_FILES["txtImage"]["tmp_name"],"../img/partner/".$file_name);

		$fullPath = "img/partner/".$file_name; 
	}

	$sql = "INSERT INTO tb_partner (partnerTitle, partnerDescript, topNo, partnerImg, status_id, titleType, langID, user_add, date_add)
			VALUES ('$txtTitle', '$txtDescription', '$txtTopno', '$fullPath', '$cbActive', '$cbHeader', '$lang', '$GET_userID', NOW()) ";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/partner");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$txtId = $mysqli->real_escape_string($_POST['txtId']); 
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 
	$cbHeader = $mysqli->real_escape_string($_POST['cbHeader']); 
	if ($cbHeader != "1") {
		$cbHeader = "0";
	}
	$txtTitle = $mysqli->real_escape_string($_POST['txtTitle']); 
	$txtDescription = $mysqli->real_escape_string($_POST['txtDescription']); 
	$cbActive = $mysqli->real_escape_string($_POST['cbActive']); 
	$txtTopno = $mysqli->real_escape_string($_POST['txtTopno']); 
	if ($cbActive != "1") {
		$cbActive = "2";
	}
	$tmp_file_name = trim($_FILES["txtImage"]["tmp_name"]);

	

	if($tmp_file_name != "") { 
		$file_name = date('YmdHms').$_FILES["txtImage"]["name"]; 
		copy($_FILES["txtImage"]["tmp_name"],"../img/partner/".$file_name);
		$fullPath = "img/partner/".$file_name; 		
		$sql_img = "UPDATE tb_partner SET partnerImg='$fullPath' WHERE partnerID = '$txtId' ";	 
		$mysqli->query($sql_img); 
	}

	$sql = "UPDATE tb_partner SET partnerTitle='$txtTitle', partnerDescript='$txtDescription', topNo='$txtTopno', status_id='$cbActive', titleType='$cbHeader', langID='$lang' , user_add='$GET_userID', date_add=NOW() WHERE partnerID = '$txtId' ";	 	
	if ($mysqli->query($sql) === TRUE) {
		if ($cbHeader == "1") {
			$sql_h = "UPDATE tb_partner SET titleType = 0 WHERE langID = '$lang' and partnerID <> '$txtId'";	
			$mysqli->query($sql_h); 
		} 
		
		header("Location: ?d=module/partner");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}


if(isset($_GET["partner"]) && isset($_GET["header"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['partner'])); 	 
	$id = substr($id, 0, strlen($id)-11);

	$headerID = $mysqli->real_escape_string(base64_decode($_GET['header'])); 	 
	$headerID = substr($headerID, 0, strlen($headerID)-11);

	$langID = $mysqli->real_escape_string(base64_decode($_GET['lang'])); 	 
	$langID = substr($langID, 0, strlen($langID)-11);
	 
	if ($headerID == "1") {

		$sql = "UPDATE tb_partner SET titleType = 0 WHERE partnerID ='$id'";	 
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=module/partner");
		}else{
			echo "<center><h2>ERROR UPDATE</h2></center>";
		}	
	} else {
		$sql = "UPDATE tb_partner SET titleType = 1 WHERE partnerID ='$id'";	 
		if ($mysqli->query($sql) === TRUE) {
			$sql = "UPDATE tb_partner SET titleType = 0 WHERE langID = '$langID' and partnerID <> '$id'";	 
			if ($mysqli->query($sql) === TRUE) {
				header("Location: ?d=module/partner");
			} else {
				echo "<center><h2>ERROR UPDATE</h2></center>";
			}			
		}else{
			echo "<center><h2>ERROR UPDATE</h2></center>";
		}	
	}
}


if(isset($_GET["partner"]) && isset($_GET["active"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['partner'])); 	 
	$id = substr($id, 0, strlen($id)-11);

	$activeID = $mysqli->real_escape_string(base64_decode($_GET['active'])); 	 
	$activeID = substr($activeID, 0, strlen($activeID)-11);	
	 
	if ($activeID == "1") {
		$activeID = "2";		
	} else if ($activeID == "2") {
		$activeID = "1";		 
	}

	$sql = "UPDATE tb_partner SET status_id = '$activeID' WHERE partnerID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/partner");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}


if(isset($_GET["partner"]) && isset($_GET["del"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['partner'])); 	 
	$id = substr($id, 0, strlen($id)-11);	 		 

	$sql = "UPDATE tb_partner SET status_id = '3' WHERE partnerID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/partner");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}

?>
 