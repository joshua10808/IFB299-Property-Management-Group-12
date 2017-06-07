<?php 
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/IFB299/includes/db.php');

	if (isset($_POST)) {
		$db->where ('id', 4);
		$details = $db->update('users', $_POST);
		unset($_POST);
	}
	header("Location: http://carlwirkus.com/IFB299/modules/staff/?module=personalDetails");
	die();

?>