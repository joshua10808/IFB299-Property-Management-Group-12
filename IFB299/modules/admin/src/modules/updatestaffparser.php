<?php
	session_start();

	include $_SERVER['DOCUMENT_ROOT'] . '/IFB299/includes/db.php';
	include '../func.php';

	if(isset($_POST)){
		if(isAdmin()){
			$db->where ('id', $_GET['id']);
			$id = $db->update('users', $_POST);
			//echo $db->count . ' records were updated';
			unset($_POST);
		} else{
			//echo "not admin";
		}
	} else {
		//echo "no post sent";
	}

	header("Location: http://carlwirkus.com/IFB299/modules/admin/?module=managestaff");
	die();
?>