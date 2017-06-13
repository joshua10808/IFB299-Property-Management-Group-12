<?php
session_start();

	include $_SERVER['DOCUMENT_ROOT'] . '/IFB299/includes/db.php';
	include $_SERVER['DOCUMENT_ROOT'] . '/IFB299/includes/helper.php';
	
 $data = Array ("login" => "admin",
               "firstName" => "John",
               "lastName" => 'Doe'
		);
$id = $db->insert ('users', $data);

if($id)
    echo 'user was created. Id=' . $id;

?>
    
   