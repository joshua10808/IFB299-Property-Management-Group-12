<?php

  //$data = Array ("username" => "username", ... )
  function register($data){
    $db->where("username", $data['username']);
    if(!$db->has("users")){
      //register user
      $id = $db->insert("users",$data);
      if($id){
        //success
        return 1
      }
    }

    return -1;
  }
?>
