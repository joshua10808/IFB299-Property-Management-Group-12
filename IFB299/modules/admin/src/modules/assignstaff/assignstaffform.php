<h2>Assigning Staff To Property: <?php echo $_GET['id']; ?></h2>

<form method="post" action="src/modules/assignstaff/assignstaffparser.php">
	<select name="userid">
		<?php
			$db->where('staff', 1);
			$data=$db->get('users');

			foreach($data as $user){
				echo'
				<option value="'.$user['id'].'">'.$user['username'].'</option>
				';
			}
		?>
	</select>
	<input type="hidden" name="propid" value="<?php echo $_GET['id'] ?>">
	<input type="submit">
</form>