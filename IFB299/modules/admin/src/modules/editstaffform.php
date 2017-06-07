<form id="editstaffform" action="src/modules/updatestaffparser.php?id=<?php echo $_GET['id']; ?>" method="post">
	<input value="<?php echo $staffdata[0]['username']; ?>" name="username" placeholder="username" type="text" />
    <input value="<?php echo $staffdata[0]['firstname']; ?>" name="firstname" placeholder="firstname" type="text" />
    <input value="<?php echo $staffdata[0]['lastname']; ?>" name="lastname" placeholder="lastname" type="text" />
    <input value="<?php echo $staffdata[0]['password']; ?>" name="password" placeholder="password" type="text" />
    <input value="<?php echo $staffdata[0]['email']; ?>" name="email" placeholder="email" type="text" />
    <input type="submit" value="Update Staff Member">
</form>

<a id="deletestaffbutton" href="src/modules/deletestaffparser.php?id=<?php echo $_GET['id']; ?>">Delete Staff</a>