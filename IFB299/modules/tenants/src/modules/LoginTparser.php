<?php
session_start();

include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/db.php');
include($_SERVER['DOCUMENT_ROOT'] .'/IFB299/includes/helper.php');


if(isset($_POST['submit']))
	if(isTdmin()){
	$username =$_POST["username"];
	$password =$_POST["password"];
		
	$db->where ("username", $username);
        echo $user['username'];

	?>
	