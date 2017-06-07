<?php
session_start();

include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/db.php');
include '../func.php';

if(isset($_POST)){
if(isAdmin()){
$id = $db->insert ('properties', $_POST);
unset($_POST);

echo "added value: " . $id;

		} else{

			echo "not admin";

		}

	} else {

		echo "no post sent";

	}




die();
?>