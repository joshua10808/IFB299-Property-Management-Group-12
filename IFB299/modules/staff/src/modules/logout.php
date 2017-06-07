      <div id="loginWrapper">
      	<div>		<?php			$db->where ("id", $_SESSION['userdata'][0]['id']);			$details  = $db->getOne ("users");		?>
      		<?php 
	      		echo "You are currently logged in as: &nbsp;" . $_SESSION['userdata'][0]['username'];				echo"<br>";				echo "Welcome ". $details['firstname']; 
      		?>			
      	</div>
  		<form action="?logout=t" method="post">
          <input type="submit" value="logout"/>
        </form>
      </div>