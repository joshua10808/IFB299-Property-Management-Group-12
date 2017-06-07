<?php

function login($db, $user, $pass){

  $db->where("username", $user);
  $db->where("password", $pass);
  $db->where("admin", "1");
  $data = $db->get("users");
  if($data != null) {
      $_SESSION['userdata'] = $data;
      return true;  
  } 

  return false;
}
?>
