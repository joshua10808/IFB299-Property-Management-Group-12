	<H1>Add a New Tenant</H1>

	<Form action="AddTParser.php" method="post">
	<input name="username" placeholder="username" type="text" value="<?php echo $username?>" />
    	<input name="firstname" placeholder="firstname" type="text" value="<?php echo $firstname?>"/>
    	<input name="lastname" placeholder="lastname" type="text" value="<?php echo $lastname?>"/>
    	<input name="password" placeholder="password" type="password"value="" />
    	<input name="email" placeholder="email" type="text" value="<?php echo $email?>"/>
  
 	<input type="submit" name="submit" value="Register New Tenant">
</form>
