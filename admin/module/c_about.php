<?php
$GET_userID = $_SESSION['EGPOSAKATuser_id'];
if(isset($_POST["btnSaveNew"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
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
		copy($_FILES["txtImage"]["tmp_name"],"../img/about/".$file_name);

		$fullPath = "img/about/".$file_name; 
	}

	$sql = "INSERT INTO tb_about (aboutTitle, aboutDesctip, topNo, aboutImg, status_id, langID, user_add, date_add)
			VALUES ('$txtTitle', '$txtDescription', '$txtTopno', '$fullPath', '$cbActive', '$lang', '$GET_userID', NOW()) ";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/about");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"]) && $_SESSION['EGPOSAKATrole_id'] <= 2) {
	$txtId = $mysqli->real_escape_string($_POST['txtId']); 
	$lang = $mysqli->real_escape_string($_POST['txtLang']); 	
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
		copy($_FILES["txtImage"]["tmp_name"],"../img/about/".$file_name);
		$fullPath = "img/about/".$file_name; 		
		$sql_img = "UPDATE tb_about SET aboutImg='$fullPath' WHERE aboutID = '$txtId' ";	 
		$mysqli->query($sql_img); 
	}

	$sql = "UPDATE tb_about SET aboutTitle='$txtTitle', aboutDesctip='$txtDescription', topNo='$txtTopno', status_id='$cbActive', langID='$lang' , user_add='$GET_userID', date_add=NOW() WHERE aboutID = '$txtId' ";	 	
	if ($mysqli->query($sql) === TRUE) {			
		header("Location: ?d=module/about");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
} 

if(isset($_GET["about"]) && isset($_GET["active"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['about'])); 	 
	$id = substr($id, 0, strlen($id)-11);

	$activeID = $mysqli->real_escape_string(base64_decode($_GET['active'])); 	 
	$activeID = substr($activeID, 0, strlen($activeID)-11);	
	 
	if ($activeID == "1") {
		$activeID = "2";		
	} else if ($activeID == "2") {
		$activeID = "1";		 
	}

	$sql = "UPDATE tb_about SET status_id = '$activeID' WHERE aboutID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		//header("Location: ?d=module/about");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}


if(isset($_GET["about"]) && isset($_GET["del"]) && isset($_GET["lang"]) && $_SESSION['EGPOSAKATrole_id'] <= 2){	
	$id = $mysqli->real_escape_string(base64_decode($_GET['about'])); 	 
	$id = substr($id, 0, strlen($id)-11);	 		 

	$sql = "UPDATE tb_about SET status_id = '3' WHERE aboutID ='$id'";	 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=module/about");
	}else{
		echo "<center><h2>ERROR UPDATE</h2></center>";
	}	
}

?>
 