<?php 

function consolelog($data){
	echo"<script>console.log('". $data ."');</script>";
}

function login($db, $user, $pass){

	$db->where("username", $user);
	$db->where("password", $pass);
	$data = $db->get("users");
	if(isset($data)) {
    	$_SESSION['userdata'] = $data;
    	return true;	
	} 
	return false;
}

function isAdmin(){
	if(isset($_SESSION['userdata'])){
		if($_SESSION['userdata'][0]['admin'] == 1){
			return true;
		}	
	}	
}

function isStaff(){
	if(isset($_SESSION['userdata'])){
		if($_SESSION['userdata'][0]['staff'] == 1){
			return true;
		}	
	}	
	return false;
}

function isTenant(){
	if(isset($_SESSION['userdata'])){
		if($_SESSION['userdata'][0]['tenant'] == 1){
			return true;
		}	
	}
	return false;
}

?>