 <div id="loginWrapper">

    <form action="?login=t" method="post">

      <span>Login:</span>

      <input  type="text" name="user" placeholder="username"/>
      <input  type="password" name="pass" placeholder="password" />

      <input type="submit" />

    </form>
     

     
     <span id="registerButton"><a>Register</a></span>
	
	<div id="registerForm">
		<form action="src/modules/registertenantparser.php" method="post">
		
		<span>Registration Details:</span>
		
		<input  type="text" name="username" placeholder="username" />
		<input  type="text" name="firstname" placeholder="firstname" />		
		<input  type="text" name="lastname" placeholder="lastname" />
		<input  type="password" name="password" placeholder="password" />
		<input  type="hidden" name="tenant" value="1" />
		<input type="submit" />
		
		</form>
	</div>

</div>
          
          
<script>
$( "#registerButton" ).click(function() {
    $( "#registerForm" ).toggle();
});
</script>  			 