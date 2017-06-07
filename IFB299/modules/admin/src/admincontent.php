<div id="adminWrapper">

  <div id="adminSide">

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

    if( !isAdmin() ){
    		include('modules/login.php');
    	} else {
    		include('modules/logout.php');
    	}

  ?>

  </div>

  <div id="adminContent">
  <?php
    if( isAdmin() ){
      //determines what content is shown...
      $module = $_GET['module'];
      if( $module == 'addproperty'){
        include('modules/addproperty.php');
      } elseif( $module == 'editproperty' ){
        include('modules/editproperty.php');
      } elseif( $module == 'editprop' ){
        include('modules/editprop.php');
      } elseif( $module == 'managestaff'){
        include('modules/managestaff.php');
      } elseif( $module == 'assignstaff'){
        include('modules/assignstaff/assignstaff.php');
      } else{
        include('modules/dashboard.php');
      }
    }
  ?>
  </div>

</div>
