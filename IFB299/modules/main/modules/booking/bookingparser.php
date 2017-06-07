<?php

session_start();
include($_SERVER['DOCUMENT_ROOT'].'/IFB299/includes/db.php');

$db->insert('bookings',$_POST);
unset($_POST);
header("Location: http://carlwirkus.com/IFB299/");

die();
?>


