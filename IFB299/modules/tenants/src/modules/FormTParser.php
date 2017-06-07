<?php

include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/db.php');
include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/helper.php');

if(isset($_POST))
	{
	$id = $db->insert ('users', $_POST);
			unset($_POST);
			//echo "added value: " . $id;
		} else{
			//echo "not admin";
		}

		//echo "no post sent";
	

	die();
?>