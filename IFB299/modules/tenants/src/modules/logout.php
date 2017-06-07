      <div id="loginWrapper">
      	<div>
      		<?php 
	      		echo "You are currently logged in as: " . $_SESSION['userdata'][0]['username']; 
      		?>
      	</div>
  		<form action="?logout=t" method="post">
          <input type="submit" value="logout"/>
        </form>
      </div>