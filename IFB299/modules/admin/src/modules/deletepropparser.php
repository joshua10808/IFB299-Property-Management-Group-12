<?php
	session_start();

	include $_SERVER['DOCUMENT_ROOT'] . '/IFB299/includes/db.php';
	include $_SERVER['DOCUMENT_ROOT'] . '/IFB299/includes/helper.php';

	if(isset($_POST)){
		if(isAdmin()){
			$db->where ('id', $_GET['id']);
			$id = $db->delete('propertys');
			//echo $db->count . ' records were updated';
			unset($_POST);
		} else{
			//echo "not admin";
		}
	} else {
		//echo "no post sent";
	}

	header("Location: http://carlwirkus.com/IFB299/modules/admin/?module=editproperty");
	die();
?>