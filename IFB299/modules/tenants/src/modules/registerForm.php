<?php
require_once("includedFunctions.php");

if(isset($_POST['submit']))
	{
	$username=$_POST["username"];
	$firstname =$_POST["firstname"];
	$lastname =$_POST["lastname"];
	$email =$_POST["email"];
	$password =$_POST["password"];
	$password_again =$_POST["password_again"];
	
	$message = "loging in {$username}";
	
	if ($username==nayereh && $password==n)
		{
		echo"The form is Submitted";
		}
		else
		{
		echo "There were some Error";
		$username=$_POST["username"];
		$firstname =$_POST["firstname"];
		$lastname =$_POST["lastname"];
		$email =$_POST["email"];
		}
	
	}
	else
	{
	$message = "Please Log In";
	}
															

?>

<h2>
Register Form
</h2>



<form id="RegisterNewTenant" action="registerForm.php" method="post">

    <input name="username" placeholder="username" type="text" value="<?php echo $username?>" />
    <input name="firstname" placeholder="firstname" type="text" value="<?php echo $firstname?>"/>
    <input name="lastname" placeholder="lastname" type="text" value="<?php echo $lastname?>"/>
    <input name="password" placeholder="password" type="password"value="" />
    <input name="password_again" placeholder="Confirm Password" type="password"value="" />
    <input name="email" placeholder="email" type="text" value="<?php echo $email?>"/>

    <input type="submit" name="submit" value="Register New Tenant">
</form>