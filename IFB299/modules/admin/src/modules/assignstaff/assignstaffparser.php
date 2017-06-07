<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/db.php');
	include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/helper.php');

	if(isset($_POST)){
		if(isAdmin()){
			$id = $db->insert ('StaffAssignedProperty', $_POST);
			unset($_POST);
		}
	} 

	header("Location: http://carlwirkus.com/IFB299/modules/admin/?module=assignstaff");

	die();
?>