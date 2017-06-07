<div id="tenantWrapper">

<div id="tenantSide">



<?php
  if($_GET['login'] == 't'){
    if(login($db, $_POST['user'],$_POST['pass'])){
      //if the user is logged in...
      consolelog("login success");
    }
  } elseif($_GET['logout'] == 't'){
    // remove all session variables
    session_unset(); 
    // destroy the session 
    session_destroy(); 
  }

  if( !isTenant() ){
  		include('modules/login.php');
  	} else {
  		include('modules/logout.php');
  	}

?>

</div>

<div id="tenantContent">
<?php
  if( isTenant() ){
    //determines what content is shown...
    $module = $_GET['module'];
    if( $module == 'faq'){
      include('modules/faq.php');
    } elseif( $module == 'emergency'){
      include('modules/emergency.php');
	} elseif( $module == 'myTaskSearch'){
      include('modules/myTaskSearch.php');
    } else{
      include('modules/dashboard.php');
    }
  }
?>
</div>

</div>
