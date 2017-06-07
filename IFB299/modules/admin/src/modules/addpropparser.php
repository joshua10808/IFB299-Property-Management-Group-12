<?php
	session_start();

	include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/db.php');
	include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/helper.php');

	if(isset($_POST)){
		if(isAdmin()){
			$id = $db->insert ('propertys', $_POST);
			unset($_POST);
			//echo "added value: " . $id;
		} else{
			//echo "not admin";
		}
	} else {
		//echo "no post sent";
	}

	header("Location: http://carlwirkus.com/IFB299/modules/admin/?module=addproperty");
	die();
?>