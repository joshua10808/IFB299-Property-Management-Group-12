<?php
session_start();

include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/db.php');
include '../func.php';

$id = $db->insert ('users', $_POST);


header("Location: http://carlwirkus.com/IFB299/modules/tenants/");
die();
?>