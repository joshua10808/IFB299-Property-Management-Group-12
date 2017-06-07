
<?php

function isStaff(){

	if(isset($_SESSION['staff'])){

		if($_SESSION['staff'] == true){

			return true;

		}	

	}	

}



function login($db, $user, $pass){



	$db->where("username", $user);

	$db->where("password", $pass);

	$db->where("staff", "1");

	$data = $db->get("users");

	if(isset($data)) {

    	$_SESSION['userdata'] = $data;

    	$_SESSION['staff'] = true;

    	return true;	

	} 



	return false;

}


?>
