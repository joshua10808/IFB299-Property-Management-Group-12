<?php

function userlogin($user, $password){
  $db->where("user", $user);
  $db->where("password", md5($password));
  if($db->has("users")) {
      $db->where("user", $user);
      $db->where("password", md5($password));
      $user = $db->$db->getOne ("users")
      $_SESSION['id'] = user['id'];
      return true;
  } else {
      return false;
  }
}

?>
