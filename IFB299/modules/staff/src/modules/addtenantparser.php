<?php

	session_start();



	require_once $_SERVER['DOCUMENT_ROOT'] . '/IFB299/includes/db.php';


	$db->where('id',$_GET['id']);
	$id = $db->update ('propertys', $_POST);

	unset($_POST);

	header("Location: http://carlwirkus.com/IFB299/modules/staff/");

	die();

?>