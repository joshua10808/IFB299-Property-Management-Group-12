<?php

function isTenant(){
	if(isset($_SESSION['tenant'])){
		if($_SESSION['tenant'] == true){
			return true;
		}	
	}	
}


function login($db, $user, $pass){

	$db->where("username", $user);
	$db->where("password", $pass);
	$db->where("tenant", "1");
	$data = $db->get("users");
	if($data != null) {
    	$_SESSION['userdata'] = $data;
    	$_SESSION['tenant'] = true;
    	return true;	
	} 

	return false;
}

?>