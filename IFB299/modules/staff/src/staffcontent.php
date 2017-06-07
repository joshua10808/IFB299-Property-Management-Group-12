<div id="staffWrapper">

<div id="staffSide">

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

  if( !isStaff() ){
  		include('modules/login.php');
  	} else {
  		include('modules/logout.php');
  	}

?>

</div>

<div id="staffContent">
<?php
  if( isStaff() ){
    //determines what content is shown...
    $module = $_GET['module'];
    if( $module == 'viewassignedproperties'){
      include('modules/viewproperties.php');
    } elseif( $module == 'viewSchedule' ){
      include('modules/viewSchedule.php');
    } elseif( $module == 'personalDetails' ){
      include('modules/details.php');
	} elseif( $module == 'changeDetails' ){
      include('modules/changeDetails.php');
    } else{
      include('modules/dashboard.php');
    }
  }
?>
</div>

</div>
