													
<h2>
Register Form
</h2>

<form id="RegisterNewTenant" action="FormTParser.php" method="post">

    <input name="username" placeholder="username" type="text" value="<?php echo $username?>" />
    <input name="firstname" placeholder="firstname" type="text" value="<?php echo $firstname?>"/>
    <input name="lastname" placeholder="lastname" type="text" value="<?php echo $lastname?>"/>
    <input name="password" placeholder="password" type="password"value="" />
    <input name="email" placeholder="email" type="text" value="<?php echo $email?>"/>
   >

    <input type="submit" value="Register New Tenant">
</form>
